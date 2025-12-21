<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::create(['user_id' => 1, 'total_price' => 1200.50, 'status' => 'pending']);
        Order::create(['user_id' => 1, 'total_price' => 6000, 'status' => 'completed']);
    }
}
