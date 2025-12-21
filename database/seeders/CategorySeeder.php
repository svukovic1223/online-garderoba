<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name' => 'Majice', 'description' => 'Razne majice']);
        Category::create(['name' => 'Pantalone', 'description' => 'Razne pantalone']);
        Category::create(['name' => 'Jakne', 'description' => 'Topla odeća']);
        Category::create(['name' => 'Obuća', 'description' => 'Cipele i patike']);
    }
}
