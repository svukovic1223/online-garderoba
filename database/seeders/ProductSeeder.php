<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['name' => 'Crvena majica', 'description' => 'Pamuk 100%', 'price' => 1200.50, 'stock' => 10, 'category_id' => 1]);
        Product::create(['name' => 'Plave pantalone', 'description' => 'Traper', 'price' => 2500, 'stock' => 5, 'category_id' => 2]);
        Product::create(['name' => 'Zelena jakna', 'description' => 'Vodootporna', 'price' => 4500, 'stock' => 2, 'category_id' => 3]);
        Product::create(['name' => 'Crne patike', 'description' => 'Sportske', 'price' => 3500, 'stock' => 7, 'category_id' => 4]);
    }
}
