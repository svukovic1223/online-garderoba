<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductListTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;
    public function test_example(): void
    {
        Product::factory()->create([
            'name' => 'Test Farmerke',
            'price' => 3999
        ]);

        $response = $this->get('/products');

        $response->assertStatus(200);
        $response->assertSee('Test Farmerke');
    }
}
