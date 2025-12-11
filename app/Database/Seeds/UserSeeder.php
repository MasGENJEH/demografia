<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Data untuk 3 Admin
        $adminUsers = [
            [
                'username' => 'Fachriibnufalah',
                'role' => 'admin',
                'email' => 'fachri@bansos.com',
                // Password: 'password123'
                'password' => password_hash('1234', PASSWORD_BCRYPT),
            ],
            [
                'username' => 'Witarlina',
                'role' => 'admin',
                'email' => 'witarlina@bansos.com',
                // Password: '1234'
                'password' => password_hash('1234', PASSWORD_BCRYPT),
            ],
            [
                'username' => 'Febipitriana',
                'role' => 'admin',
                'email' => 'febi@bansos.com',
                // Password: '1234'
                'password' => password_hash('1234', PASSWORD_BCRYPT),
            ],
        ];

        // Data untuk 3 User
        $regularUsers = [
            [
                'username' => 'Maman',
                'role' => 'rt',
                'email' => 'maman@bansos.com',
                // Password: 'user123'
                'password' => password_hash('1234', PASSWORD_BCRYPT),
            ],
            [
                'username' => 'Ujang',
                'role' => 'rw',
                'email' => 'ujang@bansos.com',
                // Password: '1234'
                'password' => password_hash('1234', PASSWORD_BCRYPT),
            ],
            [
                'username' => 'Ahmad',
                'role' => 'rt',
                'email' => 'ahmad@bansos.com',
                // Password: '1234'
                'password' => password_hash('1234', PASSWORD_BCRYPT),
            ],
        ];

        $data = array_merge($adminUsers, $regularUsers);

        // Masukkan data ke dalam tabel 'user'
        $this->db->table('user')->insertBatch($data);
    }
}
