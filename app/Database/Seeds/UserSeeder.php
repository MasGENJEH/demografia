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
                'username' => 'admin_satu',
                'role' => 'admin',
                'email' => 'admin1@bansos.com',
                // Password: 'password123'
                'password' => password_hash('1234', PASSWORD_BCRYPT),
            ],
            [
                'username' => 'admin_dua',
                'role' => 'admin',
                'email' => 'admin2@bansos.com',
                // Password: '1234'
                'password' => password_hash('1234', PASSWORD_BCRYPT),
            ],
            [
                'username' => 'admin_tiga',
                'role' => 'admin',
                'email' => 'admin3@bansos.com',
                // Password: '1234'
                'password' => password_hash('1234', PASSWORD_BCRYPT),
            ],
        ];

        // Data untuk 3 User
        $regularUsers = [
            [
                'username' => 'user_biasa_1',
                'role' => 'user',
                'email' => 'user1@bansos.com',
                // Password: 'user123'
                'password' => password_hash('1234', PASSWORD_BCRYPT),
            ],
            [
                'username' => 'user_biasa_2',
                'role' => 'user',
                'email' => 'user2@bansos.com',
                // Password: '1234'
                'password' => password_hash('1234', PASSWORD_BCRYPT),
            ],
            [
                'username' => 'user_biasa_3',
                'role' => 'user',
                'email' => 'user3@bansos.com',
                // Password: '1234'
                'password' => password_hash('1234', PASSWORD_BCRYPT),
            ],
        ];

        $data = array_merge($adminUsers, $regularUsers);

        // Masukkan data ke dalam tabel 'user'
        $this->db->table('user')->insertBatch($data);
    }
}