<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('adminpassword'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Author User',
            'email' => 'author@example.com',
            'password' => Hash::make('authorpassword'),
            'role' => 'author',
        ]);

        User::create([
            'name' => 'Regular User',
            'email' => 'user@example.com',
            'password' => Hash::make('userpassword'),
            'role' => 'user',
        ]);

        // Create some additional users with random roles
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'name' => 'User ' . ($i + 1),
                'email' => 'user' . ($i + 1) . '@example.com',
                'password' => Hash::make('password'),
                'role' => ['admin', 'author', 'user'][rand(0, 2)],
            ]);
        }
    }
}