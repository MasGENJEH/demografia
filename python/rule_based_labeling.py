import pandas as pd
import numpy as np
import re
import sys
import os

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

    # 2. Evaluasi Pendidikan_terakhir
    pend = str(row.get('pendidikan_terakhir', '')).lower().strip()
    if re.search(r'\b(diploma|strata|s1|s2|s3|sarjana|d3|d4)\b', pend):
        score += 5
    elif re.search(r'\b(sma|slta|smk|stm|smea)\b', pend):
        score += 3
    elif re.search(r'\b(sd|tidak|belum)\b', pend):
        score -= 1
    else:
        score += 1

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
    if score >= 10:
        return 'Mapan'
    elif score < -1:
        return 'Rentan'
    else:
        return 'Berkembang'

def main():
    input_csv = 'dataset_penduduk.csv'
    output_csv = 'dataset_penduduk.csv'
    
    if not os.path.exists(input_csv):
        print(f"Error: File {input_csv} tidak ditemukan.")
        sys.exit(1)
        
    print(f"Membaca file {input_csv}...")
    try:
        df = pd.read_csv(input_csv)
    except Exception as e:
        print(f"Gagal membaca CSV: {e}")
        sys.exit(1)
        
    # Periksa apakah kolom yang dibutuhkan ada
    required_cols = ['pekerjaan', 'pendidikan_terakhir', 'tanggungan']
    missing_cols = [col for col in required_cols if col not in df.columns]
    
    if missing_cols:
        print(f"Peringatan: Kolom {missing_cols} tidak ditemukan di CSV.")
        print("Pastikan file CSV memiliki kolom: pekerjaan, pendidikan_terakhir, tanggungan (huruf kecil)")
        sys.exit(1)
        
    print("Melakukan klasifikasi dengan Rule-Based Expert System...")
    # Terapkan fungsi pelabelan ke setiap baris
    df['status_ekonomi'] = df.apply(heuristic_label, axis=1)
    
    # Hitung statistik
    label_counts = df['status_ekonomi'].value_counts()
    
    print("\nHasil Klasifikasi:")
    for label, count in label_counts.items():
        print(f"- {label}: {count} data")
        
    # Simpan ke CSV baru
    try:
        df.to_csv(output_csv, index=False)
        print(f"\nBerhasil! Data telah dilabeli dan disimpan ke '{output_csv}'")
    except Exception as e:
        print(f"Gagal menyimpan CSV: {e}")
        sys.exit(1)

if __name__ == '__main__':
    main()
