<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('foods')->insert([
            [
                'name' => 'Krabby Patty',
                'category' => 'Makanan',
                'price' => 25000,
                'description' => 'Hidangan utama pelanggan',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Double Krabby Patty',
                'category' => 'Makanan',
                'price' => 40000,
                'description' => 'Krabby Patty dengan dua lapisan daging',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Triple Krabby Patty',
                'category' => 'Makanan',
                'price' => 55000,
                'description' => 'Krabby Patty dengan tiga lapisan daging',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Krabby Patty Deluxe',
                'category' => 'Makanan',
                'price' => 70000,
                'description' => 'Krabby Patty dengan tambahan keju, selada, dan tomat',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Krabby Meal',
                'category' => 'Makanan',
                'price' => 85000,
                'description' => 'Paket makanan lengkap dengan Krabby Patty',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ], 
            [
                'name' => 'Krusty Dog',
                'category' => 'Makanan',
                'price' => 45000,
                'description' => 'Sosis panggang dengan roti dan saus khas Krusty Krab',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ], 
            [
                'name' => 'Kiddie Meal',
                'category' => 'Makanan',
                'price' => 55000,
                'description' => 'Paket makanan untuk anak-anak dengan Krabby Patty dan es krim',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ], 
            [
                'name' => 'Kelp Shake',
                'category' => 'Minuman',
                'price' => 35000,
                'description' => 'Minuman khas Krusty Krab dengan alga laut',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Coral Bits',
                'category' => 'Cemilan',
                'price' => 15000,
                'description' => 'Cemilan khas Krusty Krab dengan alga laut',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ], 
            [
                'name' => 'Kelp Fries',
                'category' => 'Cemilan',
                'price' => 15000,
                'description' => 'Kentang goreng khas Krusty Krab dengan alga laut',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ], 
            [
                'name' => 'Kelp Rings',
                'category' => 'Cemilan',
                'price' => 15000,
                'description' => 'Cincin bawang goreng khas Krusty Krab dengan alga laut',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Chum Burger',
                'category' => 'Makanan',
                'price' => 30000,
                'description' => 'Burger khas chumbucket dengan daging ikan',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ], 
            [
                'name' => 'Chum Fries',
                'category' => 'Cemilan',
                'price' => 20000,
                'description' => 'Kentang goreng khas chumbucket dengan saus chum',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ], 
            [
                'name' => 'Chum Fricassee',
                'category' => 'Makanan',
                'price' => 500000,
                'description' => 'Hidangan mewah perpaduan rempah pilihan dan bumbu rahasia',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ], 
        ]);
    }
}