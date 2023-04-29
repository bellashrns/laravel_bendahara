<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'role' => 1,
            'phone' => '12345678',
            'address' => 'Jl. Admin',
            'line' => 'admin',
            'birthdate' => '2000-01-01',
        ]);

        User::create([
            'name' => 'Bendahara',
            'email' => 'bendahara@admin.com',
            'password' => bcrypt('bendahara'),
            'role' => 3,
            'phone' => '1234',
            'address' => 'Jl. Bendahara',
            'line' => 'bendahara',
            'birthdate' => '2000-01-01',
        ]);

        User::create([
            'name' => 'HRD',
            'email' => 'hrd@admin.com',
            'password' => bcrypt('hrd'),
            'role' => 4,
            'phone' => '5678',
            'address' => 'Jl. HRD',
            'line' => 'hrd',
            'birthdate' => '2000-01-01',
        ]);
    }
}
