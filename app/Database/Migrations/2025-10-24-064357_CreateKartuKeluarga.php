<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKartuKeluarga extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'nomor_kk' => [
                'type' => 'VARCHAR',
                'constraint' => '16',
                'null' => false,
            ],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'rt' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
                'null' => true,
            ],
            'rw' => [
                'type' => 'VARCHAR',
                'constraint' => '3',
                'null' => true,
            ],
            'dusun' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],
        ]);

        // Menetapkan nomor_kk sebagai Primary Key
        $this->forge->addKey('nomor_kk', true);

        // Membuat tabel
        $this->forge->createTable('kartu_keluarga', true);
    }

    public function down()
    {
        $this->forge->dropTable('kartu_keluarga', true);
    }
}
