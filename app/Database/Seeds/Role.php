<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Role extends Seeder
{
    public function run()
    {
        $data = [
            'role_name' => 'Admin',
            'created_at' => date('Y-m-d H:i:s'),
        ];

        // Using Query Builder
        $this->db->table('roles')->insert($data);
    }
}
