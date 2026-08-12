<?php

namespace Tests\Feature;

use Tests\TestCase;

class ProductTest extends TestCase
{
    public function test_product_page_is_working(): void
    {
        $response = $this->get('/products');

        $response->assertStatus(500);

        $response->assertJson([
            'status' => true,
            'message' => 'Products API working'
        ]);
    }
}