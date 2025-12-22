<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Order;
use App\Models\User;

class OrderCreationTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;
    public function test_example(): void
    {
        $user = User::factory()->create();

        $response = $this->post(route('orders.store'), [
            'user_id' => $user->id,
            'total_price' => 5000,
            'status' => 'created',
        ]);



        $response->assertStatus(302);
        $this->assertDatabaseHas('orders', [
            'total_price' => 5000,
            'status' => 'created'
        ]);
    }
}
