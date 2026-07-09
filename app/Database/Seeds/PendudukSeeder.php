<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PendudukSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        $faker->unique(true); // pastikan NIK unik

        // 1. Ambil semua nomor KK yang sudah ada
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

        // =====================================================================
        // HELPER: Tentukan pendidikan berdasarkan umur (realistis)
        // =====================================================================
        $getPendidikan = function (int $umur): string {
            if ($umur < 6)  return 'TIDAK / BELUM SEKOLAH';
            if ($umur < 12) return 'BELUM TAMAT SD / SEDERAJAT';
            if ($umur < 15) {
                $r = rand(0, 1);
                return $r ? 'TAMAT SD / SEDERAJAT' : 'BELUM TAMAT SD / SEDERAJAT';
            }
            if ($umur < 18) {
                // SMP atau masih SD
                return ['TAMAT SD / SEDERAJAT', 'SLTP / SEDERAJAT'][rand(0, 1)];
            }
            if ($umur < 22) {
                // SMA / SMK atau masih SMP
                return ['SLTP / SEDERAJAT', 'SLTA / SEDERAJAT'][rand(0, 3) > 0 ? 1 : 0];
            }
            if ($umur < 26) {
                // Bisa SMA, D3, atau S1
                $opts = ['SLTA / SEDERAJAT', 'SLTA / SEDERAJAT', 'DIPLOMA III', 'STRATA I'];
                return $opts[rand(0, 3)];
            }
            // 26+: distribusi realistis orang dewasa
            $r = rand(1, 100);
            if ($r <= 10) return 'TIDAK / BELUM SEKOLAH';
            if ($r <= 20) return 'BELUM TAMAT SD / SEDERAJAT';
            if ($r <= 35) return 'TAMAT SD / SEDERAJAT';
            if ($r <= 50) return 'SLTP / SEDERAJAT';
            if ($r <= 70) return 'SLTA / SEDERAJAT';
            if ($r <= 76) return 'DIPLOMA I';
            if ($r <= 80) return 'DIPLOMA II';
            if ($r <= 85) return 'DIPLOMA III';
            if ($r <= 87) return 'DIPLOMA IV';
            if ($r <= 95) return 'STRATA I';
            if ($r <= 98) return 'STRATA II';
            return 'STRATA III';
        };

        // =====================================================================
        // HELPER: Tentukan pekerjaan berdasarkan pendidikan dan umur
        // =====================================================================
        $getPekerjaan = function (string $pendidikan, int $umur, string $jenisKelamin): string {
            // Belum dewasa
            if ($umur < 15) return 'PELAJAR';
            if ($umur < 18) {
                return in_array($pendidikan, ['SLTP / SEDERAJAT', 'SLTA / SEDERAJAT']) ? 'PELAJAR' : 'PELAJAR';
            }
            if ($umur < 23 && in_array($pendidikan, ['STRATA I', 'DIPLOMA III', 'DIPLOMA IV'])) {
                return 'MAHASISWA';
            }

            // Lansia
            if ($umur >= 60) {
                return rand(0, 1) ? 'TIDAK BEKERJA' : 'PENSIUNAN';
            }

            // Berdasarkan pendidikan
            switch ($pendidikan) {
                case 'TIDAK / BELUM SEKOLAH':
                case 'BELUM TAMAT SD / SEDERAJAT':
                    $opts = [
                        'BURUH HARIAN', 'PETANI', 'NELAYAN', 'PEMBANTU RUMAH TANGGA',
                        'KULI BANGUNAN', 'PEMULUNG', 'TUKANG BECAK', 'TIDAK BEKERJA',
                        'TUKANG SAMPAH', 'SERABUTAN',
                    ];
                    if ($jenisKelamin === 'PEREMPUAN') {
                        $opts[] = 'IBU RUMAH TANGGA';
                        $opts[] = 'IBU RUMAH TANGGA';
                    }
                    return $opts[rand(0, count($opts) - 1)];

                case 'TAMAT SD / SEDERAJAT':
                    $opts = [
                        'PETANI', 'BURUH TANI', 'NELAYAN', 'PEDAGANG KAKI LIMA',
                        'KULI BANGUNAN', 'TUKANG OJEK', 'SOPIR ANGKOT', 'TUKANG CUCI',
                        'BURUH PABRIK', 'TIDAK BEKERJA', 'SERABUTAN',
                    ];
                    if ($jenisKelamin === 'PEREMPUAN') {
                        $opts[] = 'IBU RUMAH TANGGA';
                        $opts[] = 'IBU RUMAH TANGGA';
                    }
                    return $opts[rand(0, count($opts) - 1)];

                case 'SLTP / SEDERAJAT':
                    $opts = [
                        'BURUH PABRIK', 'PEDAGANG', 'TUKANG OJEK', 'SOPIR', 'PELAYAN TOKO',
                        'KASIR', 'SATPAM', 'CLEANING SERVICE', 'PETANI', 'NELAYAN',
                        'TUKANG BANGUNAN', 'KARYAWAN SWASTA', 'TIDAK BEKERJA',
                    ];
                    if ($jenisKelamin === 'PEREMPUAN') {
                        $opts[] = 'IBU RUMAH TANGGA';
                    }
                    return $opts[rand(0, count($opts) - 1)];

                case 'SLTA / SEDERAJAT':
                    $opts = [
                        'KARYAWAN SWASTA', 'PEDAGANG', 'WIRASWASTA', 'ADMIN TOKO',
                        'SOPIR', 'TEKNISI', 'SALES MARKETING', 'BURUH PABRIK',
                        'SATPAM', 'OPERATOR MESIN', 'STAF ADMINISTRASI',
                        'PERAWAT PEMBANTU', 'TUKANG LAS', 'MEKANIK', 'KURIR',
                    ];
                    if ($jenisKelamin === 'PEREMPUAN') {
                        $opts[] = 'PRAMUSAJI';
                        $opts[] = 'PENJAHIT';
                    }
                    return $opts[rand(0, count($opts) - 1)];

                case 'DIPLOMA I':
                case 'DIPLOMA II':
                    $opts = [
                        'KARYAWAN SWASTA', 'STAF ADMINISTRASI', 'TELLER BANK',
                        'ASISTEN APOTEKER', 'PERAWAT', 'BIDAN DESA', 'OPERATOR KOMPUTER',
                        'RESEPSIONIS', 'ADMIN KANTOR',
                    ];
                    return $opts[rand(0, count($opts) - 1)];

                case 'DIPLOMA III':
                    $opts = [
                        'PERAWAT', 'BIDAN', 'ANALIS LABORATORIUM', 'STAF AKUNTANSI',
                        'ADMINISTRASI RUMAH SAKIT', 'TEKNISI ELEKTRO', 'PROGRAMMER JUNIOR',
                        'DESAINER GRAFIS', 'SURVEYOR', 'DRAFTER',
                    ];
                    return $opts[rand(0, count($opts) - 1)];

                case 'DIPLOMA IV':
                case 'STRATA I':
                    $opts = [
                        'PNS', 'GURU', 'DOSEN', 'DOKTER UMUM', 'PERAWAT',
                        'BIDAN', 'AKUNTAN', 'PROGRAMMER', 'KONSULTAN',
                        'MANAJER', 'STAF AHLI', 'KARYAWAN BUMN', 'ANALIS KEUANGAN',
                        'ARSITEK', 'INSINYUR', 'WIRASWASTA',
                    ];
                    return $opts[rand(0, count($opts) - 1)];

                case 'STRATA II':
                    $opts = [
                        'PNS', 'DOSEN', 'PENELITI', 'KONSULTAN SENIOR',
                        'MANAJER', 'KEPALA DIVISI', 'DIREKTUR', 'DOKTER SPESIALIS',
                        'AUDITOR', 'PENGACARA', 'HAKIM',
                    ];
                    return $opts[rand(0, count($opts) - 1)];

                case 'STRATA III':
                    $opts = [
                        'DOSEN', 'PENELITI', 'PROFESOR', 'KEPALA LEMBAGA',
                        'DIREKTUR', 'DOKTER SPESIALIS', 'KONSULTAN AHLI',
                    ];
                    return $opts[rand(0, count($opts) - 1)];

                default:
                    return 'TIDAK BEKERJA';
            }
        };

        // =====================================================================
        // HELPER: Status perkawinan berdasarkan umur
        // =====================================================================
        $getStatusPerkawinan = function (int $umur): string {
            if ($umur < 17) return 'BELUM KAWIN';
            if ($umur < 22) return rand(0, 4) > 0 ? 'BELUM KAWIN' : 'KAWIN';
            if ($umur >= 50) {
                $r = rand(1, 10);
                if ($r <= 6) return 'KAWIN';
                if ($r <= 7) return 'CERAI HIDUP';
                if ($r <= 9) return 'CERAI MATI';
                return 'BELUM KAWIN';
            }
            $r = rand(1, 10);
            if ($r <= 7) return 'KAWIN';
            if ($r <= 8) return 'BELUM KAWIN';
            if ($r == 9) return 'CERAI HIDUP';
            return 'CERAI MATI';
        };

        // =====================================================================
        // GENERATE PENDUDUK PER KK — setiap KK dibangun koheren
        // =====================================================================
        foreach ($validKkList as $nomorKk) {

            // Jumlah anggota: 1 s/d 6 (dengan bobot realistis — maksimal 6 anggota)
            $weights    = [1, 2, 3, 4, 5, 6];
            $weightProb = [5, 12, 20, 30, 20, 13];
            $totalW = array_sum($weightProb);
            $rand   = (float)rand() / (float)getrandmax() * $totalW;
            $cumul  = 0;
            $jumlahAnggota = 1;
            foreach ($weights as $idx => $val) {
                $cumul += $weightProb[$idx];
                if ($rand <= $cumul) { $jumlahAnggota = $val; break; }
            }

            // ---- KEPALA KELUARGA ----
            $kkUmur  = rand(25, 60);
            $kkGender = 'LAKI-LAKI'; // Umumnya KK adalah laki-laki
            if (rand(1, 10) <= 2) $kkGender = 'PEREMPUAN'; // 20% kemungkinan KK perempuan

            $kkPendidikan = $getPendidikan($kkUmur);
            $kkPekerjaan  = $getPekerjaan($kkPendidikan, $kkUmur, $kkGender);
            $kkNik        = '32' . $faker->unique()->numerify('##############');
            $kkNama       = strtoupper($faker->name($kkGender === 'LAKI-LAKI' ? 'male' : 'female'));
            $kkTglLahir   = date('Y-m-d', strtotime("-{$kkUmur} years"));

            $pendudukData[] = [
                'nik'                  => $kkNik,
                'nomor_kk'             => $nomorKk,
                'nama_lengkap'         => $kkNama,
                'jenis_kelamin'        => $kkGender,
                'tanggal_lahir'        => $kkTglLahir,
                'status_keluarga'      => 'KEPALA KELUARGA',
                'pendidikan_terakhir'  => $kkPendidikan,
                'pekerjaan'            => $kkPekerjaan,
                'status_perkawinan'    => $jumlahAnggota > 1 ? 'KAWIN' : $getStatusPerkawinan($kkUmur),
                'status_verifikasi_rt' => 'BELUM DISETUJUI',
                'status_verifikasi_rw' => 'BELUM DISETUJUI',
                'created_at'           => date('Y-m-d H:i:s'),
                'updated_at'           => date('Y-m-d H:i:s'),
            ];

            if ($jumlahAnggota === 1) continue; // Hanya KK, tidak ada anggota lain

            // ---- ISTRI / PASANGAN ----
            // Jika KK laki-laki, biasanya ada istri; jika perempuan, ada suami atau tidak
            $hasSpouse = ($jumlahAnggota >= 2);
            if ($hasSpouse) {
                $spouseGender  = ($kkGender === 'LAKI-LAKI') ? 'PEREMPUAN' : 'LAKI-LAKI';
                $spouseUmur    = max(17, $kkUmur - rand(-5, 8)); // Usia pasangan berdekatan
                $spousePendidikan = $getPendidikan($spouseUmur);
                $spousePekerjaan  = $getPekerjaan($spousePendidikan, $spouseUmur, $spouseGender);
                $spouseNik        = '32' . $faker->unique()->numerify('##############');

                $pendudukData[] = [
                    'nik'                  => $spouseNik,
                    'nomor_kk'             => $nomorKk,
                    'nama_lengkap'         => strtoupper($faker->name($spouseGender === 'LAKI-LAKI' ? 'male' : 'female')),
                    'jenis_kelamin'        => $spouseGender,
                    'tanggal_lahir'        => date('Y-m-d', strtotime("-{$spouseUmur} years")),
                    'status_keluarga'      => ($kkGender === 'LAKI-LAKI') ? 'ISTRI' : 'FAMILI LAIN',
                    'pendidikan_terakhir'  => $spousePendidikan,
                    'pekerjaan'            => $spousePekerjaan,
                    'status_perkawinan'    => 'KAWIN',
                    'status_verifikasi_rt' => 'BELUM DISETUJUI',
                    'status_verifikasi_rw' => 'BELUM DISETUJUI',
                    'created_at'           => date('Y-m-d H:i:s'),
                    'updated_at'           => date('Y-m-d H:i:s'),
                ];
            }

            // ---- ANGGOTA LAIN (ANAK, ORANG TUA, CUCU, dll.) ----
            $sisaSlot = $jumlahAnggota - ($hasSpouse ? 2 : 1);

            // Estimasi usia anak termuda s/d tertua berdasarkan usia KK
            $minAgeAnak = 0;
            $maxAgeAnak = max(0, $kkUmur - 18);

            for ($j = 0; $j < $sisaSlot; $j++) {
                // Tentukan tipe anggota berdasarkan usia KK
                $tipeCandidates = ['ANAK'];
                if ($kkUmur >= 45) $tipeCandidates[] = 'CUCU';
                if ($kkUmur <= 55) $tipeCandidates[] = 'ORANG TUA';
                if (rand(1, 10) <= 2) $tipeCandidates[] = 'FAMILI LAIN';
                $tipe = $tipeCandidates[rand(0, count($tipeCandidates) - 1)];

                switch ($tipe) {
                    case 'ANAK':
                        $anggotaUmur   = rand($minAgeAnak, $maxAgeAnak);
                        $anggotaGender = rand(0, 1) ? 'LAKI-LAKI' : 'PEREMPUAN';
                        $statusKel     = 'ANAK';
                        break;
                    case 'CUCU':
                        $anggotaUmur   = rand(0, 15);
                        $anggotaGender = rand(0, 1) ? 'LAKI-LAKI' : 'PEREMPUAN';
                        $statusKel     = 'CUCU';
                        break;
                    case 'ORANG TUA':
                        $anggotaUmur   = rand($kkUmur + 18, min($kkUmur + 45, 90));
                        $anggotaGender = rand(0, 1) ? 'LAKI-LAKI' : 'PEREMPUAN';
                        $statusKel     = 'ORANG TUA';
                        break;
                    default: // FAMILI LAIN
                        $anggotaUmur   = rand(10, 60);
                        $anggotaGender = rand(0, 1) ? 'LAKI-LAKI' : 'PEREMPUAN';
                        $statusKel     = 'FAMILI LAIN';
                        break;
                }

                $anggotaPendidikan = $getPendidikan($anggotaUmur);
                $anggotaPekerjaan  = $getPekerjaan($anggotaPendidikan, $anggotaUmur, $anggotaGender);
                $anggotaNik        = '32' . $faker->unique()->numerify('##############');
                $anggotaGenderFaker = $anggotaGender === 'LAKI-LAKI' ? 'male' : 'female';

                $pendudukData[] = [
                    'nik'                  => $anggotaNik,
                    'nomor_kk'             => $nomorKk,
                    'nama_lengkap'         => strtoupper($faker->name($anggotaGenderFaker)),
                    'jenis_kelamin'        => $anggotaGender,
                    'tanggal_lahir'        => date('Y-m-d', strtotime("-{$anggotaUmur} years")),
                    'status_keluarga'      => $statusKel,
                    'pendidikan_terakhir'  => $anggotaPendidikan,
                    'pekerjaan'            => $anggotaPekerjaan,
                    'status_perkawinan'    => $getStatusPerkawinan($anggotaUmur),
                    'status_verifikasi_rt' => 'BELUM DISETUJUI',
                    'status_verifikasi_rw' => 'BELUM DISETUJUI',
                    'created_at'           => date('Y-m-d H:i:s'),
                    'updated_at'           => date('Y-m-d H:i:s'),
                ];
            }
        }

        // 3. Insert batch (chunk 500 agar tidak timeout)
        $chunks = array_chunk($pendudukData, 500);
        foreach ($chunks as $chunk) {
            $this->db->table('penduduk')->insertBatch($chunk);
        }

        echo "PendudukSeeder selesai: " . count($pendudukData) . " data penduduk berhasil di-seed.\n";
    }
}
