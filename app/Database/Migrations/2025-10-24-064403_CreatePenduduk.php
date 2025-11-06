<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePenduduk extends Migration
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
                'constraint' => ['Laki-laki', 'Perempuan'],
                'null' => false,
            ],
            'tanggal_lahir' => [
                'type' => 'DATE',
                'null' => false,
            ],
            'status_keluarga' => [
                'type' => 'ENUM',
                'constraint' => [
                    'Kepala Keluarga',
                    'Suami',
                    'Istri',
                    'Anak',
                    'Menantu',
                    'Cucu',
                    'Orang Tua',
                    'Mertua',
                    'Famili Lain',
                    'Lainnya',
                ],
                'null' => true,
            ],
            'pendidikan_terakhir' => [
                'type' => 'ENUM',
                'constraint' => [
                    'Tidak / Belum Sekolah',
                    'Belum Tamat SD / Sederajat',
                    'Tamat SD / Sederajat',
                    'SLTP / Sederajat',
                    'SLTA / Sederajat',
                    'Diploma I',
                    'Diploma II',
                    'Diploma III',
                    'Diploma IV',
                    'Strata I',
                    'Strata II',
                    'Strata III',
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
                    'Belum Kawin',
                    'Kawin',
                    'Cerai Hidup',
                    'Cerai Mati',
                    'Kawin Belum Tercatat',
                ],
                'null' => true,
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
        $this->forge->createTable('data_penduduk', true);
    }

    public function down()
    {
        $this->forge->dropTable('data_penduduk', true);
    }
}
