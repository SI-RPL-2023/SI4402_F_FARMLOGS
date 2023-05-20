<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'nama' => 'Admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('111'),
            'id_roles' => '1',
            'nomor' => '',
            'lahir' => '2023-09-13',
            'daerah' => '',
        ]);    
    }
}