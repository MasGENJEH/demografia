import pandas as pd
import numpy as np
from sklearn.model_selection import train_test_split
from sklearn.preprocessing import LabelEncoder
from imblearn.over_sampling import SMOTE
from sklearn.tree import DecisionTreeClassifier
from sklearn.metrics import accuracy_score, precision_score, recall_score, f1_score, confusion_matrix, classification_report
import os
import sys

# Ensure current directory is in sys.path so we can import local modules
sys.path.append(os.path.dirname(os.path.abspath(__file__)))
import re

def heuristic_label(row):
    score = 0
    
    # 1. Tanggungan
    try:
        tanggungan = int(row.get('tanggungan', 0))
    except ValueError:
        tanggungan = 0
        
    if tanggungan == 0:
        score += 1
    elif tanggungan <= 2:
        score += 1
    elif tanggungan > 4:
        score -= 1
        
    # 2. Pendidikan
    pend = str(row.get('pendidikan_terakhir', row.get('pendidikan', ''))).lower()
    is_downgraded = (tanggungan > 4)
    
    pendidikan_tingkat_tinggi = ['s1', 's2', 's3', 'd4', 'sarjana', 'strata']
    pendidikan_tingkat_menengah = ['sma', 'smk', 'd3', 'd1', 'd2', 'slta', 'skta', 'ba', 'diploma']
    pendidikan_tingkat_rendah = ['sd', 'smp', 'sltp', 'tidak tamat', 'belum tamat', 'tidak sekolah']
    
    if any(p in pend for p in pendidikan_tingkat_tinggi):
        score += 3 if is_downgraded else 5
    elif any(p in pend for p in pendidikan_tingkat_menengah):
        score += 1 if is_downgraded else 3
        
    # 3. Pekerjaan
    pek = str(row.get('pekerjaan', '')).lower()
    
    pekerjaan_tinggi = ['bumn','presiden', 'pns', 'polri', 'tni', 'direktur', 'manajer', 'manager', 'dokter', 'pengusaha', 'ceo', 'pejabat', 'menteri', 'dpr', 'pilot', 'desainer', 'designer', 'arsitek', 'programmer', 'software developer', 'bank', 'auditor',  'kontraktor', 'konsultan', 'hakim', 'jaksa', 'notaris', 'apoteker', 'psikiater', 'psikolog', 'ilmuwan', 'peneliti', 'pajak', 'bea cukai', 'komisaris', 'akuntan', 'pengacara', 'advokat', 'kepala desa', 'bupati', 'walikota', 'gubernur', 'camat', 'anggota dewan', 'investor', 'owner', 'founder', 'direksi']
    pekerjaan_menengah = ['dosen','karyawan', 'pegawai', 'guru', 'bidan', 'perawat', 'wiraswasta', 'pedagang', 'sopir', 'supir', 'mekanik', 'montir', 'teknisi', 'satpam', 'security', 'admin', 'staf', 'staff', 'freelance', 'seniman', 'penulis', 'wartawan', 'ojek', 'gojek', 'grab', 'kurir', 'swasta', 'wirausaha', 'penjahit', 'salon', 'barber', 'pemasaran', 'marketing', 'sales', 'kasir', 'pramusaji', 'pelayan', 'waiter', 'koki', 'chef', 'fotografer', 'videografer', 'youtuber', 'influencer', 'bengkel', 'agen', 'makelar', 'broker', 'pemandu', 'guide', 'mandor', 'kepala dusun', 'rt', 'rw', 'pamong', 'perangkat desa', 'tukang cukur', 'tukang gigi']
    pekerjaan_rendah = ['petani', 'buruh', 'nelayan', 'pembantu', 'tukang', 'pemulung', 'pengamen', 'kuli', 'serabutan', 'tidak bekerja', 'mengurus rumah', 'pengangguran', 'pelajar', 'mahasiswa', 'belum bekerja', 'ibu rumah tangga', 'penggembala', 'tukang sapu', 'cleaning service', 'ob', 'office boy', 'asisten rumah tangga', 'art', 'juru parkir', 'tukang parkir', 'pengangkut', 'kuli panggul', 'tukang becak', 'tambal ban', 'marbot', 'penjaga', 'tukang rongsok', 'buruh cuci']

    def match_category(word_list, text):
        sorted_list = sorted(word_list, key=len, reverse=True)
        pattern = r'\b(' + '|'.join(map(re.escape, sorted_list)) + r')\b'
        return bool(re.search(pattern, text))

    if match_category(pekerjaan_tinggi, pek):
        score += 4 if is_downgraded else 8
    elif match_category(pekerjaan_menengah, pek):
        score += 2 if is_downgraded else 4
    elif match_category(pekerjaan_rendah, pek):
        score -= 3
    else:
        score += 2
        
    # Threshold Evaluasi
    if score >= 6:
        return 'Mapan'
    elif score <= 1:
        return 'Rentan'
    else:
        return 'Berkembang'

def main():
    print("Mulai proses Pipeline Machine Learning - Decision Tree")
    print("-" * 50)
    
    # 1. Load Data
    try:
        df = pd.read_csv('data_bersih2.csv')
        print(f"Data awal dimuat: {len(df)} baris")
    except FileNotFoundError:
        print("Error: File 'data_bersih2.csv' tidak ditemukan di direktori ini.")
        return

    # Bersihkan Data
    df.drop_duplicates(inplace=True)
    print(f"Setelah hapus duplikat: {len(df)} baris")
    
    # Identifikasi kolom nama
    col_pend = 'pendidikan_terakhir' if 'pendidikan_terakhir' in df.columns else 'pendidikan'
    
    # Hapus missing values di kolom penting (3 variabel)
    df.dropna(subset=['tanggungan', 'pekerjaan', col_pend], inplace=True)
    print(f"Setelah hapus missing values di kolom penting: {len(df)} baris")
    
    # 2. Pelabelan menggunakan rule-based heuristics
    print("Melakukan pelabelan (Rentan/Berkembang/Mapan)...")
    df['target_label'] = df.apply(heuristic_label, axis=1)
    
    print("Distribusi label awal:")
    print(df['target_label'].value_counts())
    
    # --- Custom Ordinal Encoders ---
    def encode_pekerjaan(pek):
        import re
        pek = str(pek).lower()
        pekerjaan_tinggi = ['bumn','presiden', 'pns', 'polri', 'tni', 'direktur', 'manajer', 'manager', 'dokter', 'pengusaha', 'ceo', 'pejabat', 'menteri', 'dpr', 'pilot', 'desainer', 'designer', 'arsitek', 'programmer', 'software developer', 'bank', 'auditor',  'kontraktor', 'konsultan', 'hakim', 'jaksa', 'notaris', 'apoteker', 'psikiater', 'psikolog', 'ilmuwan', 'peneliti', 'pajak', 'bea cukai', 'komisaris', 'akuntan', 'pengacara', 'advokat', 'kepala desa', 'bupati', 'walikota', 'gubernur', 'camat', 'anggota dewan', 'investor', 'owner', 'founder', 'direksi']
        pekerjaan_menengah = ['dosen','karyawan', 'pegawai', 'guru', 'bidan', 'perawat', 'wiraswasta', 'pedagang', 'sopir', 'supir', 'mekanik', 'montir', 'teknisi', 'satpam', 'security', 'admin', 'staf', 'staff', 'freelance', 'seniman', 'penulis', 'wartawan', 'ojek', 'gojek', 'grab', 'kurir', 'swasta', 'wirausaha', 'penjahit', 'salon', 'barber', 'pemasaran', 'marketing', 'sales', 'kasir', 'pramusaji', 'pelayan', 'waiter', 'koki', 'chef', 'fotografer', 'videografer', 'youtuber', 'influencer', 'bengkel', 'agen', 'makelar', 'broker', 'pemandu', 'guide', 'mandor', 'kepala dusun', 'rt', 'rw', 'pamong', 'perangkat desa', 'tukang cukur', 'tukang gigi', 'resepsionis']
        def match_category(word_list, text):
            sorted_list = sorted(word_list, key=len, reverse=True)
            pattern = r'\b(' + '|'.join(map(re.escape, sorted_list)) + r')\b'
            return bool(re.search(pattern, text))
        if match_category(pekerjaan_tinggi, pek): return 2
        elif match_category(pekerjaan_menengah, pek): return 1
        else: return 0

    def encode_pendidikan(pend):
        pend = str(pend).lower()
        pendidikan_tinggi = ['s1', 's2', 's3', 'd4', 'sarjana', 'strata']
        pendidikan_menengah = ['sma', 'smk', 'd3', 'd1', 'd2', 'slta', 'skta', 'ba', 'diploma']
        if any(p in pend for p in pendidikan_tinggi): return 2
        elif any(p in pend for p in pendidikan_menengah): return 1
        else: return 0

    # 4. Encoding Kategorial (Ordinal Mapping)
    print("\nMenerapkan Ordinal Encoding untuk fitur...")
    df['pekerjaan_enc'] = df['pekerjaan'].apply(encode_pekerjaan)
    df['pendidikan_enc'] = df[col_pend].apply(encode_pendidikan)
    
    # Menyiapkan Fitur (X) dan Target (y)
    # Variabel utama: Tanggungan, Pekerjaan, Pendidikan
    X = df[['tanggungan', 'pekerjaan_enc', 'pendidikan_enc']].values
    y = df['target_label'].values
    
    # 5. Pembagian Dataset (80/20 Stratified Split)
    print("\nMelakukan Stratified Split 80/20...")
    X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, stratify=y, random_state=42)
    print(f"Data Latih: {X_train.shape[0]} sampel")
    print(f"Data Uji: {X_test.shape[0]} sampel")
    
    # 6. Penerapan SMOTE
    print("\nMenerapkan SMOTE pada Data Latih...")
    try:
        smote = SMOTE(random_state=42)
        X_train_sm, y_train_sm = smote.fit_resample(X_train, y_train)
        
        print("Distribusi kelas setelah SMOTE (Data Latih):")
        unique, counts = np.unique(y_train_sm, return_counts=True)
        print(dict(zip(unique, counts)))
    except Exception as e:
        print(f"Gagal menerapkan SMOTE (mungkin karena sampel per kelas terlalu sedikit): {e}")
        # Fallback tanpa SMOTE jika data per kelas tidak cukup
        X_train_sm, y_train_sm = X_train, y_train
        
    # 7. Pelatihan & Evaluasi Tiga Model
    import joblib
    from sklearn.ensemble import RandomForestClassifier
    from sklearn.naive_bayes import GaussianNB
    from sklearn.model_selection import GridSearchCV
    
    models_to_save = {}
    
    print("-" * 50)
    print("MELATIH MODEL-MODEL KLASIFIKASI")
    print("-" * 50)

    # A. Decision Tree (di-tuning agar paling tinggi)
    print("\n[1] Melatih Model Decision Tree (dengan GridSearchCV)...")
    dt_params = {
        'criterion': ['gini', 'entropy'],
        'max_depth': [None, 5, 10, 15, 20],
        'min_samples_split': [2, 5, 10],
        'min_samples_leaf': [1, 2, 4],
        'class_weight': [None, 'balanced']
    }
    dt_base = DecisionTreeClassifier(random_state=42)
    dt_grid = GridSearchCV(dt_base, dt_params, cv=5, scoring='f1_weighted', n_jobs=-1)
    
    # Kunci untuk Decision Tree: Latih TANPA SMOTE karena SMOTE merusak pola diskrit!
    dt_grid.fit(X_train, y_train)
    
    dt_model = dt_grid.best_estimator_
    y_pred_dt = dt_model.predict(X_test)
    print(f"F1-Score Decision Tree: {f1_score(y_test, y_pred_dt, average='weighted', zero_division=0)*100:.2f}%")
    print(f"Best Params DT: {dt_grid.best_params_}")
    models_to_save['decision_tree'] = dt_model
    
    # B. Naive Bayes
    print("\n[2] Melatih Model Naive Bayes (Gaussian NB)...")
    nb_model = GaussianNB()
    nb_model.fit(X_train_sm, y_train_sm)
    y_pred_nb = nb_model.predict(X_test)
    print(f"F1-Score Naive Bayes: {f1_score(y_test, y_pred_nb, average='weighted', zero_division=0)*100:.2f}%")
    models_to_save['naive_bayes'] = nb_model
    
    # C. Random Forest (dengan Grid Search CV)
    print("\n[3] Melatih Model Random Forest (dengan GridSearchCV)...")
    rf_params = {
        'n_estimators': [50, 100],
        'max_depth': [None, 10, 20]
    }
    rf_base = RandomForestClassifier(random_state=42)
    rf_grid = GridSearchCV(rf_base, rf_params, cv=3, scoring='f1_weighted', n_jobs=-1)
    rf_grid.fit(X_train_sm, y_train_sm)
    rf_model = rf_grid.best_estimator_
    y_pred_rf = rf_model.predict(X_test)
    print(f"F1-Score Random Forest: {f1_score(y_test, y_pred_rf, average='weighted', zero_division=0)*100:.2f}%")
    print(f"Best Params RF: {rf_grid.best_params_}")
    models_to_save['random_forest'] = rf_model
    
    # 8. Export Model
    print("-" * 50)
    print("MENYIMPAN MODEL (.pkl)")
    print("-" * 50)
    
    # Simpan model
    for name, m in models_to_save.items():
        filename = f'model_{name}.pkl'
        joblib.dump(m, filename)
        print(f"-> Model {name} berhasil disimpan sebagai {filename}")
        
    print("\nPipeline Selesai! Model siap dihubungkan dengan antarmuka web PHP.")

if __name__ == "__main__":
    main()
