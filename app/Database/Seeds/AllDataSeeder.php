<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AllDataSeeder extends Seeder
{
    public function run()
    {
        $this->call('KartuKeluargaSeeder'); // Memanggil UserSeeder
        $this->call('PendudukSeeder'); // Memanggil PostSeeder
        $this->call('UserSeeder'); // Memanggil PostSeeder
        $this->call('MasterWilayahSeeder'); // Memanggil PostSeeder
    }
}
