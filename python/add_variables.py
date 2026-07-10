import pandas as pd
from datetime import datetime
import os

def parse_date(date_str):
    if pd.isna(date_str) or str(date_str).strip() == '':
        return pd.NaT
    date_str = str(date_str).strip()
    if '-' in date_str:
        try:
            return pd.to_datetime(date_str, format='%Y-%m-%d')
        except:
            pass
    if '/' in date_str:
        try:
            return pd.to_datetime(date_str, format='%d/%m/%Y')
        except:
            pass
    return pd.to_datetime(date_str, errors='coerce')

def process_file(file_path):
    if not os.path.exists(file_path):
        return False
        
    try:
        df = pd.read_csv(file_path)
    except Exception as e:
        print(f"Bisa tidak membaca {file_path}: {e}")
        return False

    # 1. Ubah Tanggal Lahir menjadi Umur
    if 'TANGGAL LAHIR' in df.columns:
        today = pd.to_datetime('2026-07-10')
        parsed_dates = df['TANGGAL LAHIR'].apply(parse_date)
        df['UMUR'] = (today - parsed_dates).dt.days // 365
        df['UMUR'] = df['UMUR'].fillna(0).astype(int)
        
        # Rename or drop TANGGAL LAHIR
        # We replace TANGGAL LAHIR column with UMUR column in place
        cols = list(df.columns)
        idx = cols.index('TANGGAL LAHIR')
        cols[idx] = 'UMUR'
        df = df.drop(columns=['TANGGAL LAHIR'])
        # Reorder to put UMUR where TANGGAL LAHIR was
        df = df[[c for c in cols if c in df.columns]]
        
    elif 'tanggal_lahir' in df.columns:
        today = pd.to_datetime('2026-07-10')
        parsed_dates = df['tanggal_lahir'].apply(parse_date)
        df['umur'] = (today - parsed_dates).dt.days // 365
        df['umur'] = df['umur'].fillna(0).astype(int)
        df = df.drop(columns=['tanggal_lahir'])

    # 2. Update Status Perkawinan (JANDA)
    # Jika Kepala Keluarga Perempuan, status KAWIN, tanpa suami -> JANDA
    # Asumsi kolom: NOMOR KK, STATUS KELUARGA, JENIS KELAMIN, STATUS PERKAWINAN
    if all(c in df.columns for c in ['NOMOR KK', 'STATUS KELUARGA', 'JENIS KELAMIN', 'STATUS PERKAWINAN']):
        for no_kk, group in df.groupby('NOMOR KK'):
            # Cek apakah ada suami
            has_suami = any(group['STATUS KELUARGA'].str.upper().str.strip() == 'SUAMI')
            if not has_suami:
                # Cari kepala keluarga perempuan kawin
                cond = (
                    (df['NOMOR KK'] == no_kk) & 
                    (df['STATUS KELUARGA'].str.upper().str.strip() == 'KEPALA KELUARGA') & 
                    (df['JENIS KELAMIN'].str.upper().str.strip() == 'PEREMPUAN') & 
                    (df['STATUS PERKAWINAN'].str.upper().str.strip() == 'KAWIN')
                )
                df.loc[cond, 'STATUS PERKAWINAN'] = 'JANDA'
    
    try:
        df.to_csv(file_path, index=False)
        print(f"Berhasil memproses {file_path}")
        return True
    except Exception as e:
        print(f"Gagal menyimpan {file_path}: {e}")
        return False

process_file("data_bersih1.csv")
process_file("data_bersih2.csv")
