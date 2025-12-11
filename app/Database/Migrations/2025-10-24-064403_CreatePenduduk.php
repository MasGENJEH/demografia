<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penduduk extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'nik' => [
                'type' => 'VARCHAR',
                'constraint' => '16',
                'null' => false,
            ],
            'nomor_kk' => [
                'type' => 'VARCHAR',
                'constraint' => '16',
                'null' => false,
            ],
            'nama_lengkap' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'jenis_kelamin' => [
                'type' => 'ENUM',
                'constraint' => ['LAKI-LAKI', 'PEREMPUAN'],
                'null' => false,
            ],
            'tanggal_lahir' => [
                'type' => 'DATE',
                'null' => false,
            ],
            'status_keluarga' => [
                'type' => 'ENUM',
                'constraint' => [
                    'KEPALA KELUARGA',
                    'ISTRI',
                    'ANAK',
                    'CUCU',
                    'MENANTU',
                    'ORANG TUA',
                    'MERTUA',
                    'FAMILI LAIN',
                    'LAINNYA',
                ],
                'null' => true,
            ],
            'pendidikan_terakhir' => [
                'type' => 'ENUM',
                'constraint' => [
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
                ],
                'null' => true,
            ],
            'pekerjaan' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],
            'status_perkawinan' => [
                'type' => 'ENUM',
                'constraint' => [
                    'BELUM KAWIN',
                    'KAWIN',
                    'CERAI HIDUP',
                    'CERAI MATI',
                    'KAWIN BELUM TERCATAT',
                ],
                'null' => true,
            ],
            'status_verifikasi_rt' => [
                'type' => 'ENUM',
                'constraint' => [
                    'DISETUJUI',
                    'BELUM DISETUJUI',
                    'TIDAK DISETUJUI',
                ],
                'null' => true,
                'default' => 'BELUM DISETUJUI',
            ],
            'status_verifikasi_rw' => [
                'type' => 'ENUM',
                'constraint' => [
                    'DISETUJUI',
                    'BELUM DISETUJUI',
                    'TIDAK DISETUJUI',
                ],
                'null' => true,
                'default' => 'BELUM DISETUJUI',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
            'updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
        ]);

        // Menetapkan nik sebagai Primary Key
        $this->forge->addKey('nik', true);

        // Menambahkan Foreign Key ke tabel kartu_keluarga
        $this->forge->addForeignKey('nomor_kk', 'kartu_keluarga', 'nomor_kk', 'CASCADE', 'CASCADE');

        // Membuat tabel
        $this->forge->createTable('penduduk', true);
    }

    public function down()
    {
        $this->forge->dropTable('penduduk', true);
    }
}
