<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMasterWilayah extends Migration
{
    public function up()
    {
        // --- TABEL MASTER DUSUN ---
        $this->forge->addField([
            'id_dusun' => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],
            'nama_dusun' => ['type' => 'VARCHAR', 'constraint' => 100],
        ]);
        $this->forge->addKey('id_dusun', true);
        $this->forge->createTable('master_dusun');

        // --- TABEL MASTER RW ---
        $this->forge->addField([
            'id_rw' => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],
            'nomor_rw' => ['type' => 'VARCHAR', 'constraint' => 3], // Contoh: 001, 002
            'id_dusun' => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true],
        ]);
        $this->forge->addKey('id_rw', true);
        $this->forge->addForeignKey('id_dusun', 'master_dusun', 'id_dusun', 'CASCADE', 'CASCADE');
        $this->forge->createTable('master_rw');

        // --- TABEL MASTER RT ---
        $this->forge->addField([
            'id_rt' => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],
            'nomor_rt' => ['type' => 'VARCHAR', 'constraint' => 3], // Contoh: 001, 002
            'id_rw' => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true],
        ]);
        $this->forge->addKey('id_rt', true);
        $this->forge->addForeignKey('id_rw', 'master_rw', 'id_rw', 'CASCADE', 'CASCADE');
        $this->forge->createTable('master_rt');
    }

    public function down()
    {
        $this->forge->dropTable('master_rt');
        $this->forge->dropTable('master_rw');
        $this->forge->dropTable('master_dusun');
    }
}
