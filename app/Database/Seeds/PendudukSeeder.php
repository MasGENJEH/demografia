<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PendudukSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');

        $jenis_kelamin_values = ['LAKI-LAKI', 'PEREMPUAN'];
        $status_keluarga_values = [
            'KEPALA KELUARGA', 'ISTRI', 'ANAK', 'CUCU', 'MENANTU',
            'ORANG TUA', 'MERTUA', 'FAMILI LAIN', 'LAINNYA',
        ];
        $pendidikan_values = [
            'TIDAK / BELUM SEKOLAH',
            'BELUM TAMAT SD / SEDERAJAT',
            'TAMAT SD / SEDERAJAT',
            'SLTP / SEDERAJAT',
            'SLTA / SEDERAJAT',
            'DIPLOMA I',
            'DIPLOMA II',
            'DIPLOMA III',
            'DIPLOMA IV',
            'STRATA I',
            'STRATA II',
            'STRATA III',
        ];
        $status_perkawinan_values = [
            'BELUM KAWIN', 'KAWIN', 'CERAI HIDUP', 'CERAI MATI', 'KAWIN BELUM TERCATAT',
        ];

        // 1. Ambil semua nomor KK yang sudah ada (Valid Foreign Keys)
        $db = \Config\Database::connect();
        $kartuKeluargaKeys = $db->table('kartu_keluarga')
                                ->select('nomor_kk')
                                ->get()
                                ->getResultArray();

        if (empty($kartuKeluargaKeys)) {
            echo "Error: Tabel 'kartu_keluarga' kosong. Jalankan KartuKeluargaSeeder terlebih dahulu.\n";

            return;
        }

        $validKkList = array_column($kartuKeluargaKeys, 'nomor_kk');
        $pendudukData = [];

        // Atur agar NIK yang dihasilkan unik
        $faker->unique(true);

        // 2. Generate 100 data penduduk
        for ($i = 0; $i < 100; ++$i) {
            $gender = $faker->randomElement(['male', 'female']);
            $jenis_kelamin_fk = ($gender == 'male') ? 'LAKI-LAKI' : 'PEREMPUAN';

            // Generate NIK unik 16 digit (dimulai 32 untuk kode provinsi Jawa Barat/Jawa Tengah)
            $nik = '32'.$faker->unique()->randomNumber(6, true);

            $pendudukData[] = [
                'nik' => $nik,

                // FOREIGN KEY: Pilih Nomor KK secara acak dari daftar yang VALID
                'nomor_kk' => $faker->randomElement($validKkList),

                'nama_lengkap' => strtoupper($faker->name($gender)),

                // Pilih nilai dari ENUM yang sudah didefinisikan
                'jenis_kelamin' => $jenis_kelamin_fk,

                'tanggal_lahir' => $faker->dateTimeBetween('-60 years', '-5 years')->format('Y-m-d'),

                'status_keluarga' => $faker->randomElement($status_keluarga_values),

                'pendidikan_terakhir' => $faker->randomElement($pendidikan_values),

                'pekerjaan' => strtoupper($faker->jobTitle()),

                'status_perkawinan' => $faker->randomElement($status_perkawinan_values),
            ];
        }

        // 3. Simpan semua data penduduk sekaligus ke tabel 'data_penduduk'
        // Gunakan nama tabel yang benar: 'data_penduduk'
        $this->db->table('penduduk')->insertBatch($pendudukData);
    }
}
