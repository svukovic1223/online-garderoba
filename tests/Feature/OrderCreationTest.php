<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

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
            'status' => 'created',
        ]);
    }
}
