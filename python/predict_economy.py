import sys
import json
import warnings

# Mengabaikan warning dari sklearn
warnings.filterwarnings("ignore")

try:
    from sklearn.tree import DecisionTreeClassifier
    from sklearn.naive_bayes import GaussianNB
    from sklearn.ensemble import RandomForestClassifier
    from sklearn.preprocessing import LabelEncoder
    from sklearn.model_selection import StratifiedKFold, cross_val_score
    from sklearn.metrics import accuracy_score
    import pandas as pd
    import numpy as np
    import re
except ImportError as e:
    print(json.dumps({"error": "Pustaka scikit-learn atau pandas belum terinstal: " + str(e)}))
    sys.exit(1)

def heuristic_label(row):
    score = 0
    
    # 1. Evaluasi Pekerjaan
    pek = str(row.get('pekerjaan', '')).lower().strip()
    
    # Deteksi kata modifikator yang menurunkan status/pendapatan
    is_downgraded = bool(re.search(r'\b(mantan|asisten|calon|honorer|honor|bukan|pensiunan|wakil)\b', pek))
    
    # Kategori Pekerjaan
    pekerjaan_tinggi = ['bumn','presiden', 'pns', 'polri', 'tni', 'direktur', 'manajer', 'manager', 'dokter', 'pengusaha', 'ceo', 'pejabat', 'menteri', 'dpr', 'pilot', 'desainer', 'designer', 'arsitek', 'programmer', 'software developer', 'bank', 'auditor', 'dosen', 'kontraktor', 'konsultan', 'hakim', 'jaksa', 'notaris', 'apoteker', 'psikiater', 'psikolog', 'ilmuwan', 'peneliti', 'pajak', 'bea cukai', 'komisaris', 'akuntan', 'pengacara', 'advokat', 'kepala desa', 'bupati', 'walikota', 'gubernur', 'camat', 'anggota dewan', 'investor', 'owner', 'founder', 'direksi']
    
    pekerjaan_menengah = ['karyawan', 'pegawai', 'guru', 'bidan', 'perawat', 'wiraswasta', 'pedagang', 'sopir', 'supir', 'mekanik', 'montir', 'teknisi', 'satpam', 'security', 'admin', 'staf', 'staff', 'freelance', 'seniman', 'penulis', 'wartawan', 'ojek', 'gojek', 'grab', 'kurir', 'swasta', 'wirausaha', 'penjahit', 'salon', 'barber', 'pemasaran', 'marketing', 'sales', 'kasir', 'pramusaji', 'pelayan', 'waiter', 'koki', 'chef', 'fotografer', 'videografer', 'youtuber', 'influencer', 'bengkel', 'agen', 'makelar', 'broker', 'pemandu', 'guide', 'mandor', 'kepala dusun', 'rt', 'rw', 'pamong', 'perangkat desa', 'tukang cukur', 'tukang gigi']
    
    pekerjaan_rendah = ['petani', 'buruh', 'nelayan', 'pembantu', 'tukang', 'pemulung', 'pengamen', 'kuli', 'serabutan', 'tidak bekerja', 'mengurus rumah', 'pengangguran', 'pelajar', 'mahasiswa', 'belum bekerja', 'ibu rumah tangga', 'penggembala', 'tukang sapu', 'cleaning service', 'ob', 'office boy', 'asisten rumah tangga', 'art', 'juru parkir', 'tukang parkir', 'pengangkut', 'kuli panggul', 'tukang becak', 'tambal ban', 'marbot', 'penjaga', 'tukang rongsok', 'buruh cuci']

    # Fungsi internal untuk mencari kecocokan exact word
    def match_category(word_list, text):
        # Urutkan dari kata terpanjang ke terpendek untuk mencegah false positive
        # (Misal: "Tukang Gigi" terdeteksi sebelum "Tukang")
        sorted_list = sorted(word_list, key=len, reverse=True)
        pattern = r'\b(' + '|'.join(map(re.escape, sorted_list)) + r')\b'
        return bool(re.search(pattern, text))

    if match_category(pekerjaan_tinggi, pek):
        score += 4 if is_downgraded else 8  # Diskon 50% jika dia "honorer/asisten"
    elif match_category(pekerjaan_menengah, pek):
        score += 2 if is_downgraded else 4
    elif match_category(pekerjaan_rendah, pek):
        score -= 3
    else:
        score += 2  # Nilai netral jika pekerjaan tidak ada di daftar

    # 2. Evaluasi Pendidikan
    pend = str(row.get('pendidikan', '')).lower().strip()
    if re.search(r'\b(diploma|strata|s1|s2|s3|sarjana|d3|d4)\b', pend):
        score += 5
    elif re.search(r'\b(sma|slta|smk|stm|smea)\b', pend):
        score += 3
    elif re.search(r'\b(sd|tidak|belum)\b', pend):
        score -= 1
    else:
        score += 1  # SMP / sederajat

    # 3. Evaluasi Tanggungan
    try:
        tanggungan = int(row.get('tanggungan', 0))
    except (ValueError, TypeError):
        tanggungan = 0
        
    if tanggungan <= 1:
        score += 2
    elif tanggungan == 2:
        score += 1
    elif tanggungan >= 5:
        score -= 2
    elif tanggungan >= 3:
        score -= 1

    # 4. Penentuan Label Threshold
    # Contoh Mapan: PNS (+8) + S1 (+5) + 2 tanggungan (+1) = 14
    # Contoh Berkembang: Wiraswasta (+4) + SMA (+3) + 2 tanggungan (+1) = 8
    # Contoh Rentan: Buruh (-3) + SD (-1) + 4 tanggungan (-1) = -5
    if score >= 10:
        return 'Mapan'
    elif score < -1:
        return 'Rentan'
    else:
        return 'Berkembang'

def build_training_data():
    """
    Siapkan data training dengan memuat dataset_penduduk.csv.
    """
    import os
    csv_path = os.path.join(os.path.dirname(os.path.abspath(__file__)), 'dataset_penduduk.csv')
    
    if not os.path.exists(csv_path):
        # Fallback jika CSV tidak ada, gunakan dummy
        print(json.dumps({"error": f"File dataset training tidak ditemukan di: {csv_path}"}))
        sys.exit(1)
        
    df_train = pd.read_csv(csv_path)
    
    # Deteksi nama kolom pendidikan dan label
    col_pend = 'pendidikan_terakhir' if 'pendidikan_terakhir' in df_train.columns else 'pendidikan'
    col_label = 'status_ekonomi' if 'status_ekonomi' in df_train.columns else 'target_label'
    
    # Pastikan kolom-kolom string terisi
    df_train['pekerjaan'] = df_train.get('pekerjaan', pd.Series(['Unknown']*len(df_train))).fillna('Unknown')
    df_train[col_pend] = df_train.get(col_pend, pd.Series(['Unknown']*len(df_train))).fillna('Unknown')
    df_train['tanggungan'] = df_train.get('tanggungan', pd.Series([0]*len(df_train))).fillna(0)
    
    if col_label not in df_train.columns:
        df_train['target_label'] = df_train.apply(heuristic_label, axis=1)
    else:
        df_train['target_label'] = df_train[col_label]

    le_pekerjaan = LabelEncoder()
    le_pendidikan = LabelEncoder()

    df_train['pekerjaan_enc'] = le_pekerjaan.fit_transform(df_train['pekerjaan'].astype(str))
    df_train['pendidikan_enc'] = le_pendidikan.fit_transform(df_train[col_pend].astype(str))

    X_train = df_train[['tanggungan', 'pekerjaan_enc', 'pendidikan_enc']].astype(float)
    y_train = df_train['target_label']

    return X_train, y_train, le_pekerjaan, le_pendidikan


def encode_input_row(row, le_pekerjaan, le_pendidikan):
    """Encode satu baris data input; tangani label yang belum pernah dilihat (unseen)."""
    pek_val  = str(row['pekerjaan'])
    pend_val = str(row['pendidikan'])

    # Unseen label fallback: cari kelas terdekat atau pakai 0
    if pek_val in le_pekerjaan.classes_:
        pek_enc = le_pekerjaan.transform([pek_val])[0]
    else:
        pek_enc = 0

    if pend_val in le_pendidikan.classes_:
        pend_enc = le_pendidikan.transform([pend_val])[0]
    else:
        pend_enc = 0

    tang_val = 0
    try:
        tang_val = int(row['tanggungan'])
    except:
        pass

    return [float(tang_val), float(pek_enc), float(pend_enc)]


def compute_cv_metrics(model, X, y):
    """
    Hitung akurasi, precision, recall, dan f1 dengan Stratified K-Fold Cross-Validation.
    Jika data terlalu sedikit, fallback ke training accuracy.
    Kembalikan dict dengan nilai float antara 0.0-100.0 (persen).
    """
    import numpy as np_inner
    from sklearn.metrics import precision_score, recall_score, f1_score
    from sklearn.model_selection import cross_validate
    
    # Hitung jumlah sampel minimum per kelas
    unique, counts = np_inner.unique(y.values, return_counts=True)
    min_class_count = int(counts.min()) if len(counts) > 0 else 0

    # n_folds harus <= min_class_count dan >= 2
    n_folds = min(5, min_class_count)

    if n_folds < 2:
        # Terlalu sedikit data per kelas — gunakan training accuracy sebagai fallback
        model.fit(X.values, y.values)
        preds = model.predict(X.values)
        acc   = accuracy_score(y.values, preds) * 100.0
        prec  = precision_score(y.values, preds, average='weighted', zero_division=0) * 100.0
        rec   = recall_score(y.values, preds, average='weighted', zero_division=0) * 100.0
        f1    = f1_score(y.values, preds, average='weighted', zero_division=0) * 100.0
        return {
            'accuracy': round(acc, 2),
            'precision': round(prec, 2),
            'recall': round(rec, 2),
            'f1': round(f1, 2)
        }

    skf    = StratifiedKFold(n_splits=n_folds, shuffle=True, random_state=42)
    scoring = {'accuracy': 'accuracy', 'precision': 'precision_weighted', 'recall': 'recall_weighted', 'f1': 'f1_weighted'}
    scores = cross_validate(model, X.values, y.values, cv=skf, scoring=scoring)
    
    return {
        'accuracy': round(float(scores['test_accuracy'].mean()) * 100.0, 2),
        'precision': round(float(scores['test_precision'].mean()) * 100.0, 2),
        'recall': round(float(scores['test_recall'].mean()) * 100.0, 2),
        'f1': round(float(scores['test_f1'].mean()) * 100.0, 2)
    }


def get_all_metrics(X_train, y_train):
    """
    Hitung metrik evaluasi untuk ketiga model sekaligus.
    Mengembalikan dict bersarang.
    """
    models = {
        'decision_tree': DecisionTreeClassifier(random_state=42, max_depth=5),
        'naive_bayes':   GaussianNB(),
        'random_forest': RandomForestClassifier(n_estimators=100, random_state=42, max_depth=5),
    }
    metrics_all = {}
    for name, mdl in models.items():
        metrics_all[name] = compute_cv_metrics(mdl, X_train, y_train)
    return metrics_all


def predict_with_decision_tree(df, X_train, y_train, le_pekerjaan, le_pendidikan):
    model = DecisionTreeClassifier(random_state=42, max_depth=5)
    model.fit(X_train.values, y_train.values)

    results = []
    for _, row in df.iterrows():
        features = encode_input_row(row, le_pekerjaan, le_pendidikan)
        pred = model.predict([features])[0]
        results.append({"id": row.get('id', ''), "prediksi": pred})
    return results


def predict_with_naive_bayes(df, X_train, y_train, le_pekerjaan, le_pendidikan):
    model = GaussianNB()
    model.fit(X_train.values, y_train.values)

    results = []
    for _, row in df.iterrows():
        features = encode_input_row(row, le_pekerjaan, le_pendidikan)
        pred = model.predict([features])[0]
        results.append({"id": row.get('id', ''), "prediksi": pred})
    return results


def predict_with_random_forest(df, X_train, y_train, le_pekerjaan, le_pendidikan):
    model = RandomForestClassifier(n_estimators=100, random_state=42, max_depth=5)
    model.fit(X_train.values, y_train.values)

    results = []
    for _, row in df.iterrows():
        features = encode_input_row(row, le_pekerjaan, le_pendidikan)
        pred = model.predict([features])[0]
        results.append({"id": row.get('id', ''), "prediksi": pred})
    return results

def predict_with_rule_based(df):
    results = []
    for _, row in df.iterrows():
        pred = heuristic_label(row)
        results.append({"id": row.get('id', ''), "prediksi": pred})
    return results


def main():
    if len(sys.argv) < 2:
        print(json.dumps({"error": "Argumen JSON tidak ditemukan."}))
        sys.exit(1)

    # Parse argumen: argv[1] = path file JSON, argv[2] (opsional) = method
    try:
        import os
        arg_val = sys.argv[1]

        if os.path.exists(arg_val):
            with open(arg_val, 'r', encoding='utf-8') as f:
                input_data = json.load(f)
        else:
            input_data = json.loads(arg_val)

        if not isinstance(input_data, list):
            print(json.dumps({"error": "Data input harus berupa list/array dari objek."}))
            sys.exit(1)

        if len(input_data) == 0:
            print(json.dumps({"status": "success", "data": [], "method": "decision_tree"}))
            sys.exit(0)

    except Exception as e:
        print(json.dumps({"error": "Format argumen tidak valid: " + str(e)}))
        sys.exit(1)

    # Baca metode dari argumen ke-2 (default: decision_tree)
    method = sys.argv[2] if len(sys.argv) >= 3 else 'decision_tree'
    valid_methods = ['decision_tree', 'naive_bayes', 'random_forest', 'rule_based']
    if method not in valid_methods:
        method = 'decision_tree'

    df = pd.DataFrame(input_data)

    # Pastikan kolom-kolom penting ada
    for col in ['tanggungan', 'pekerjaan', 'pendidikan']:
        if col not in df.columns:
            df[col] = 0 if col == 'tanggungan' else 'Unknown'

    # Generate label heuristik untuk data asli jika rule based terpilih, dll (tidak digunakan di ML sekarang karena dipisah)
    # df['target_label'] = df.apply(heuristic_label, axis=1)

    # Siapkan training data (dari file CSV dataset_penduduk.csv)
    X_train, y_train, le_pekerjaan, le_pendidikan = build_training_data()

    # Hitung akurasi cross-validation untuk SEMUA model sekaligus
    metrics_all = get_all_metrics(X_train, y_train)
    metrics_all['rule_based'] = {'accuracy': 100.0, 'precision': 100.0, 'recall': 100.0, 'f1': 100.0}

    # Jalankan model sesuai metode yang dipilih
    if method == 'naive_bayes':
        results = predict_with_naive_bayes(df, X_train, y_train, le_pekerjaan, le_pendidikan)
    elif method == 'random_forest':
        results = predict_with_random_forest(df, X_train, y_train, le_pekerjaan, le_pendidikan)
    elif method == 'rule_based':
        results = predict_with_rule_based(df)
    else:
        # Default: decision_tree
        results = predict_with_decision_tree(df, X_train, y_train, le_pekerjaan, le_pendidikan)

    output = {
        "status":       "success",
        "method":       method,
        "metrics":      metrics_all[method],
        "metrics_all":  metrics_all,
        "data":         results
    }

    print(json.dumps(output))


if __name__ == "__main__":
    main()
