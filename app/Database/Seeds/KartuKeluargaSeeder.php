<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KartuKeluargaSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        $dusun_values = ['KRAJAN 1', 'KRAJAN 2', 'TAMELANG', 'CKM 4', 'CKM 5', 'CKM 6', 'CKM 7', 'CKM 8', 'CKM 9'];
        $desa_values = ['BENGLE', 'LUAR BENGLE'];

        $kartuKeluargaData = [];
        $totalRT = 59;

        for ($i = 0; $i < 1000; ++$i) {
            // 1. Tentukan RT urut 001 s/d 059
            $rt_raw = ($i % $totalRT) + 1;

            // 2. Logika Bagi Rata RT ke dalam 14 RW (Blok Berurutan)
            // RT 001-005 -> RW 001
            // RT 006-010 -> RW 002
            // ... dst
            if ($rt_raw <= 5) {
                $rw_raw = 1;
            }      // RW 1: RT 1-5
            elseif ($rt_raw <= 10) {
                $rw_raw = 2;
            } // RW 2: RT 6-10
            elseif ($rt_raw <= 15) {
                $rw_raw = 3;
            } // RW 3: RT 11-15
            elseif ($rt_raw <= 20) {
                $rw_raw = 4;
            } // RW 4: RT 16-20
            elseif ($rt_raw <= 25) {
                $rw_raw = 5;
            } // RW 5: RT 21-25
            elseif ($rt_raw <= 29) {
                $rw_raw = 6;
            } // RW 6: RT 26-29 (mulai bagi 4)
            elseif ($rt_raw <= 33) {
                $rw_raw = 7;
            } // RW 7: RT 30-33
            elseif ($rt_raw <= 37) {
                $rw_raw = 8;
            } // RW 8: RT 34-37
            elseif ($rt_raw <= 41) {
                $rw_raw = 9;
            } // RW 9: RT 38-41
            elseif ($rt_raw <= 45) {
                $rw_raw = 10;
            }// RW 10: RT 42-45
            elseif ($rt_raw <= 49) {
                $rw_raw = 11;
            }// RW 11: RT 46-49
            elseif ($rt_raw <= 53) {
                $rw_raw = 12;
            }// RW 12: RT 50-53
            elseif ($rt_raw <= 56) {
                $rw_raw = 13;
            }// RW 13: RT 54-56
            else {
                $rw_raw = 14;
            }                  // RW 14: RT 57-59

            $data = [
                'nomor_kk' => $faker->randomNumber(7, true),
                'alamat' => $faker->address(),
                'rt' => str_pad($rt_raw, 3, '0', STR_PAD_LEFT),
                'rw' => str_pad($rw_raw, 3, '0', STR_PAD_LEFT),
                'dusun' => $faker->randomElement($dusun_values),
                'desa' => $faker->randomElement($desa_values),
                'pendapatan' => ($i < 500)
                                  ? $faker->numberBetween(10000000, 30000000)
                                  : $faker->numberBetween(10000, 9999999),
                'skala_rumah' => $faker->numberBetween(1, 5),
                'status_verifikasi_rt' => 'BELUM DISETUJUI',
                'status_verifikasi_rw' => 'BELUM DISETUJUI',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];

            $kartuKeluargaData[] = $data;
        }

        $this->db->table('kartu_keluarga')->insertBatch($kartuKeluargaData);
    }
}
