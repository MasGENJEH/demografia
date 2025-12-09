<?php

namespace App\Controllers;

class Bansos extends BaseController
{
    public function index()
    {
        // --- 1. DEFINISI KRITERIA DAN BOBOT (W) ---
        $kriteria = [
            'C1' => ['nama' => 'Pendapatan', 'sifat' => 'cost', 'bobot' => 0.40],
            'C2' => ['nama' => 'Skala Rumah', 'sifat' => 'cost', 'bobot' => 0.30],
            'C3' => ['nama' => 'Jumlah Tanggungan', 'sifat' => 'benefit', 'bobot' => 0.30],
        ];
        $bobot = [
            'C1' => $kriteria['C1']['bobot'],
            'C2' => $kriteria['C2']['bobot'],
            'C3' => $kriteria['C3']['bobot'],
        ];

        // Konfigurasi Pagination
        $perPage = 20; // Jumlah baris per halaman
        // Ambil nomor halaman saat ini dari query string 'page', default ke 1
        $currentPage = $this->request->getVar('page') ?? 1;

        // --- 2. AMBIL DATA ALTERNATIF (X) DARI DATABASE ---
        $alternatif = $this->getAlternatifData();

        // --- 3. MENENTUKAN NILAI MAX/MIN DARI MATRIKS KEPUTUSAN (X) ---
        $matriksX = [];
        $minMax = [
            'C1' => ['min' => PHP_FLOAT_MAX, 'max' => PHP_FLOAT_MIN],
            'C2' => ['min' => PHP_FLOAT_MAX, 'max' => PHP_FLOAT_MIN],
            'C3' => ['min' => PHP_FLOAT_MAX, 'max' => PHP_FLOAT_MIN],
        ];

        foreach ($alternatif as $kk) {
            // Mengakses properti objek, sesuai dengan returnType Model KartuKeluargaModel
            $C1 = (float) $kk->pendapatan;
            $C2 = (float) $kk->skala_rumah;
            $C3 = (float) $kk->jumlah_tanggungan;

            // Simpan nilai X (Matriks Keputusan)
            $matriksX[$kk->nomor_kk] = [
                'nomor_kk' => $kk->nomor_kk,
                'alamat' => $kk->alamat,
                'C1' => $C1, // Pendapatan
                'C2' => $C2, // Skala Rumah
                'C3' => $C3, // Jumlah Tanggungan
            ];

            // Update nilai Max dan Min untuk Normalisasi
            $minMax['C1']['min'] = min($minMax['C1']['min'], $C1);
            $minMax['C1']['max'] = max($minMax['C1']['max'], $C1);

            $minMax['C2']['min'] = min($minMax['C2']['min'], $C2);
            $minMax['C2']['max'] = max($minMax['C2']['max'], $C2);

            $minMax['C3']['min'] = min($minMax['C3']['min'], $C3);
            $minMax['C3']['max'] = max($minMax['C3']['max'], $C3);
        }

        // --- 4. NORMALISASI MATRIKS (R) & 5. PERHITUNGAN NILAI PREFERENSI (V) ---
        $results = [];
        foreach ($matriksX as $nomor_kk => $x) {
            $r = [];
            $nilaiV = 0;

            // --- Normalisasi ---

            // C1 (Pendapatan - COST) = Min / X
            $r['C1'] = $minMax['C1']['min'] > 0 ? ($minMax['C1']['min'] / $x['C1']) : 0;
            // C2 (Skala Rumah - COST) = Min / X
            $r['C2'] = $minMax['C2']['min'] > 0 ? ($minMax['C2']['min'] / $x['C2']) : 0;
            // C3 (Jumlah Tanggungan - BENEFIT) = X / Max
            // Hati-hati: Jika Max C3=0 (semua tanggungan 0), set r=0 untuk menghindari pembagian 0
            $r['C3'] = $minMax['C3']['max'] > 0 ? ($x['C3'] / $minMax['C3']['max']) : 0;

            // --- Perhitungan Nilai Preferensi (V) ---
            // V = SUM(R_ij * W_j)
            $nilaiV = ($r['C1'] * $bobot['C1']) +
                      ($r['C2'] * $bobot['C2']) +
                      ($r['C3'] * $bobot['C3']);

            // Simpan Hasil
            $results[] = [
                'nomor_kk' => $x['nomor_kk'],
                'alamat' => $x['alamat'],
                'nilai_kriteria' => $x,
                'matriks_normalisasi' => $r,
                'nilai_v' => $nilaiV,
            ];
        }

        // --- 6. RANKING: Urutkan berdasarkan Nilai V (Descending/Terbesar ke Terkecil) ---
        usort($results, function ($a, $b) {
            return $b['nilai_v'] <=> $a['nilai_v']; // Urutkan DESC
        });

        // --- 7. PAGINATION MANUAL (ARRAY SLICING) ---
        $totalItems = count($results);
        $offset = ($currentPage - 1) * $perPage;

        // Ambil data untuk halaman saat ini (slice array)
        $paginatedResults = array_slice($results, $offset, $perPage);

        // Buat objek Pager Service
        $pager = \Config\Services::pager();

        // Inisialisasi Pager: (Current Page, Items Per Page, Total Items)
        $pager->makeLinks($currentPage, $perPage, $totalItems);

        // Kirim data ke View
        $data = [
            'results' => $paginatedResults,
            'pager' => $pager,
            'totalItems' => $totalItems,
            'kriteria' => $kriteria,
            'message' => 'Perhitungan SAW selesai. Hasil diurutkan dari nilai V tertinggi (paling berhak).',
        ];

        return view('bansos/view_bansos1', $data);
    }

    private function getAlternatifData()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('kartu_keluarga kk');

        $alternatif = $builder
            ->select('kk.nomor_kk, kk.alamat, kk.pendapatan, kk.skala_rumah, COUNT(p.nik) as jumlah_tanggungan')
            ->join('penduduk p', 'p.nomor_kk = kk.nomor_kk', 'left')
            ->where('kk.pendapatan <', 5000000)
            ->groupBy('kk.nomor_kk, kk.alamat, kk.pendapatan, kk.skala_rumah')
            ->get()
            ->getResult();

        return $alternatif;
    }
}
