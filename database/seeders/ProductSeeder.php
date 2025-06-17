<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
                            ['title' => 'Товар 1', 'price' => 1200],
                            ['title' => 'Товар 2', 'price' => 2500],
                            ['title' => 'Товар 3', 'price' => 990],
                        ]);
    }
}
