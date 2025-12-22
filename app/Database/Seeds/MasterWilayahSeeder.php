<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MasterWilayahSeeder extends Seeder
{
    public function run()
    {
        $db = \Config\Database::connect();

        // --- 1. SEED DATA DUSUN (Sesuai List Anda) ---
        $dusunNames = [
            'KRAJAN 1', 'KRAJAN 2', 'TAMELANG',
            'CKM 4', 'CKM 5', 'CKM 6',
            'CKM 7', 'CKM 8', 'CKM 9',
        ];

        foreach ($dusunNames as $name) {
            $db->table('master_dusun')->insert(['nama_dusun' => $name]);
        }

        // Ambil ID Dusun yang baru saja diinsert
        $allDusun = $db->table('master_dusun')->get()->getResult();

        // --- 2. SEED DATA RW (Total 14) ---
        // Kita sebar 14 RW ke 9 Dusun
        $totalRw = 14;
        for ($i = 1; $i <= $totalRw; ++$i) {
            // Logika sederhana: Dusun 1-5 dapat 2 RW, sisanya dapat 1 RW
            $idDusun = ($i <= 5) ? $allDusun[floor(($i - 1) / 1)]->id_dusun : $allDusun[min($i - 6 + 5, 8)]->id_dusun;

            // Alternatif lebih merata:
            $indexDusun = ($i - 1) % count($allDusun);

            $db->table('master_rw')->insert([
                'nomor_rw' => str_pad($i, 3, '0', STR_PAD_LEFT),
                'id_dusun' => $allDusun[$indexDusun]->id_dusun,
            ]);
        }

        // Ambil ID RW yang baru saja diinsert
        $allRw = $db->table('master_rw')->get()->getResult();

        // --- 3. SEED DATA RT (Total 59) ---
        // Kita sebar 59 RT ke 14 RW
        $totalRt = 59;
        $idRwIndex = 0;
        for ($j = 1; $j <= $totalRt; ++$j) {
            // Penomoran RT di dalam RW (berulang misal RT 001, 002, dst)
            // Setiap RW rata-rata akan punya 4-5 RT
            $nomorRtUnit = ($j % 4 == 0) ? 4 : ($j % 4);

            $db->table('master_rt')->insert([
                'nomor_rt' => str_pad($nomorRtUnit, 3, '0', STR_PAD_LEFT),
                'id_rw' => $allRw[$idRwIndex]->id_rw,
            ]);

            // Pindah ke RW berikutnya setiap 4 RT agar total 59 tercover di 14 RW
            if ($j % 4 == 0 && $idRwIndex < 13) {
                ++$idRwIndex;
            }
        }

        echo "Seeder Berhasil: 9 Dusun Spesifik, 14 RW, dan 59 RT telah dimasukkan.\n";
    }
}
