<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

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
