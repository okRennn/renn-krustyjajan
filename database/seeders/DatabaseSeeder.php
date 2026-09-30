<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Buat User Admin Default
        User::create([
            'name' => 'Admin Renn',
            'email' => 'admin@jajan.com',
            'password' => Hash::make('jajan123'),
        ]);

        // 2. Panggil Seeder Makanan
        $this->call([
            FoodSeeder::class,
        ]);
    }
}