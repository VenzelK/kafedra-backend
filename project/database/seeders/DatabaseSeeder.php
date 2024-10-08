<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'full_name' => 'Test User',
            'email' => 'admin@shop.ru',
            'password' => Hash::make('QWEasd123'),
            'role' => 'admin',
        ]);

        User::factory()->create([
            'full_name' => 'Test User',
            'email' => 'user@shop.ru',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

    }


}
