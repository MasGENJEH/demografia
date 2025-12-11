<?php

namespace App\Controllers;

use App\Models\KartuKeluargaModel;
use App\Models\PendudukModel;
use App\Models\UserModel;

class Home extends BaseController
{
    private Bansos $bansos;

    public function __construct()
    {
        $this->penduduk = new PendudukModel();
        $this->kartu_keluarga = new KartuKeluargaModel();
        $this->pengguna = new UserModel();
        $this->bansos = new Bansos();
    }

    public function index(): string
    {
        if (!session('id')) {
            return redirect()->to(base_url('auth/login'));
        }

        $allKK = $this->kartu_keluarga->findAll();
        $gender = $this->penduduk->findAll();

        // 2. Inisialisasi Kategori Penghasilan
        $incomeCategories = [
            '<500 ribu' => 0,
            '500 ribu - 1 juta' => 0,
            '1 - 3 juta' => 0,
            '3 - 5 juta' => 0,
            '5 - 10 juta' => 0,
            '10 - 20 juta' => 0,
            '> 20 juta' => 0,
        ];

        $houseScaleCategories = [
            'Sangat Sederhana (<20m²)' => 0,
            'Sederhana (20m²-40m²)' => 0,
            'Menengah (41m²-80m²)' => 0,
            'Mewah (81m²-120m²)' => 0,
            'Sangat Mewah (>120m²)' => 0,
        ];

        $genderCategories = [
            'LAKI-LAKI' => 0,
            'PEREMPUAN' => 0,
        ];
        foreach ($gender as $jk) {
            // Asumsi kolom 'pendapatan' ada di hasil model dan bertipe numerik.
            $jenis = $jk->jenis_kelamin;

            if ($jenis == 'LAKI-LAKI') {
                ++$genderCategories['LAKI-LAKI'];
            } else { // Jika PEREMPUAN
                ++$genderCategories['PEREMPUAN'];
            }
        }

        // 3. Looping dan Kategorisasi
        foreach ($allKK as $kk) {
            // Asumsi kolom 'pendapatan' ada di hasil model dan bertipe numerik.
            $income = (float) $kk->pendapatan;
            $scale = (float) $kk->skala_rumah;

            if ($income < 500000) {
                ++$incomeCategories['<500 ribu'];
            } elseif ($income >= 500000 && $income < 1000000) {
                ++$incomeCategories['500 ribu - 1 juta'];
            } elseif ($income >= 1000000 && $income < 3000000) {
                ++$incomeCategories['1 - 3 juta'];
            } elseif ($income >= 3000000 && $income < 5000000) {
                ++$incomeCategories['3 - 5 juta'];
            } elseif ($income >= 5000000 && $income < 10000000) {
                ++$incomeCategories['5 - 10 juta'];
            } elseif ($income >= 10000000 && $income < 20000000) {
                ++$incomeCategories['10 - 20 juta'];
            } else { // Jika >= 20,000,000
                ++$incomeCategories['> 20 juta'];
            }

            if ($scale == 1) {
                ++$houseScaleCategories['Sangat Sederhana (<20m²)'];
            } elseif ($scale == 2) {
                ++$houseScaleCategories['Sederhana (20m²-40m²)'];
            } elseif ($scale == 3) {
                ++$houseScaleCategories['Menengah (41m²-80m²)'];
            } elseif ($scale == 4) {
                ++$houseScaleCategories['Mewah (81m²-120m²)'];
            } elseif ($scale == 5) {
                ++$houseScaleCategories['Sangat Mewah (>120m²)'];
            }
        }

        $rtRanking = $this->kartu_keluarga->getTopRtByKK();

        $topRt = null;
        $totalKkInTopRt = 0;
        $top5Rts = array_slice($rtRanking, 0, 5);

        if (!empty($rtRanking)) {
            // Ambil RT yang berada di urutan pertama (jumlah terbanyak)
            $topRt = $rtRanking[0]->rt;
            $totalKkInTopRt = $rtRanking[0]->total_kk;
        }

        $total = $this->bansos->summary();

        // 4. Siapkan Array Data Final
        $data = [
            'labels_income_json' => json_encode(array_keys($incomeCategories)),
            'data_income_json' => json_encode(array_values($incomeCategories)),
            'data_gender_json' => json_encode(array_values($genderCategories)),

            'labels_scale_json' => json_encode(array_keys($houseScaleCategories)),
            'data_scale_json' => json_encode(array_values($houseScaleCategories)),

            'jumlah_penduduk' => $this->penduduk->countAllResults(),
            'jumlah_kk' => $this->kartu_keluarga->countAllResults(),
            'jumlah_user' => $this->pengguna->countAllResults(),
            'income_stats' => $incomeCategories, // Data statistik penghasilan yang baru
            'gender_stats' => $genderCategories, // Data statistik penghasilan yang baru
            'total_bansos' => $total,

            'top_5_rts' => $top5Rts,
            'top_rt' => $topRt,
            'total_kk_top_rt' => $totalKkInTopRt,
        ];

        return view('home', $data);
    }
}
