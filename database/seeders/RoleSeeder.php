<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\Role::insert([
            ['name' => 'Super Admin'],
            ['name' => 'Admin'],
            ['name' => 'User'],
        ]);
    }
}
