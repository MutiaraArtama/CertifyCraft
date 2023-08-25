<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name' => 'mutiara',
            'username' => 'mutiara@gmail.com',
            'password' => md5("secret"),
            'role' => '1',
        ];

        // Simple Queries
        $this->db->table('users')->insert($data);
        $data = [
            'name' => 'azzahrani',
            'username' => 'azzahrani@gmail.com',
            'password' => md5("secret"),
            'role' => '2',
        ];

        // Simple Queries
        $this->db->table('users')->insert($data);
    }
}