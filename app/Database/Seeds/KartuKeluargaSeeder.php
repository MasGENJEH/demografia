<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KartuKeluargaSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        $dusun_values = [
            'KRAJAN 1',
            'KRAJAN 2',
            'TAMELANG',
            'CKM 4',
            'CKM 5',
            'CKM 6',
            'CKM 7',
            'CKM 8',
            'CKM 9',
        ];
        $desa_values = [
            'BENGLE',
            'LUAR BENGLE',
        ];

        for ($i = 1; $i < 500; ++$i) {
            $data = [
                'nomor_kk' => $faker->randomNumber(7, true),
                'alamat' => $faker->address(),
                'rt' => $faker->numberBetween(1, 59),
                'rw' => $faker->numberBetween(1, 14),
                'dusun' => $faker->randomElement($dusun_values),
                'desa' => $faker->randomElement($desa_values),
                'pendapatan' => $faker->numberBetween(10000000, 30000000),
                'skala_rumah' => $faker->numberBetween(1, 5),
            ];
            $kartuKeluargaData[] = $data;
        }

        for ($i = 1; $i < 500; ++$i) {
            $data = [
                'nomor_kk' => $faker->randomNumber(7, true),
                'alamat' => $faker->address(),
                'rt' => $faker->numberBetween(1, 59),
                'rw' => $faker->numberBetween(1, 14),
                'dusun' => $faker->randomElement($dusun_values),
                'desa' => $faker->randomElement($desa_values),
                'pendapatan' => $faker->numberBetween(10000, 9999999),
                'skala_rumah' => $faker->numberBetween(1, 5),
            ];
            $kartuKeluargaData[] = $data;
        }

        $this->db->table('kartu_keluarga')->insertBatch($kartuKeluargaData);
    }
}
