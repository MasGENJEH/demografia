<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KartuKeluargaSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        $dusun_values = [
            'Krajan 2',
            'Krajan 1',
            'CKM 1',
            'CKM 2',
            'CKM 3',
            'CKM 4',
            'CKM 5',
            'CKM 6',
        ];

        for ($i = 1; $i < 500; ++$i) {
            $data = [
                'nomor_kk' => $faker->randomNumber(7, true),
                'alamat' => $faker->address(),
                'rt' => $faker->numberBetween(1, 60),
                'rw' => $faker->numberBetween(1, 20),
                'dusun' => $faker->randomElement($dusun_values),
                'pendapatan' => $faker->numberBetween(10000, 30000000),
                'skala_rumah' => $faker->numberBetween(1, 5),
            ];
            $kartuKeluargaData[] = $data;
        }

        for ($i = 1; $i < 500; ++$i) {
            $data = [
                'nomor_kk' => $faker->randomNumber(7, true),
                'alamat' => $faker->address(),
                'rt' => $faker->numberBetween(1, 60),
                'rw' => $faker->numberBetween(1, 20),
                'dusun' => $faker->randomElement($dusun_values),
                'pendapatan' => $faker->numberBetween(10000, 10000000),
                'skala_rumah' => $faker->numberBetween(1, 5),
            ];
            $kartuKeluargaData[] = $data;
        }

        $this->db->table('kartu_keluarga')->insertBatch($kartuKeluargaData);
    }
}
