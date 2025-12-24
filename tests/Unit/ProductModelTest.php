<?php

namespace Tests\Unit;

use App\Models\Product;
use PHPUnit\Framework\TestCase;

class ProductModelTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $product = new Product;

        $this->assertTrue(
            method_exists($product, 'category'),
            'Product nema definisanu category relaciju'
        );
    }
}
