<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     */
    public function test_product_create(): void
    {
        $data = [
            'name' => 'Test Product',
            'price' => '150000.00',
            'barcode' => '1234560514112',
            'category_id' => 2
        ];

        $service = app(\App\Services\ProductService::class);

        $product = $service->create($data);

        $data['id'] = $product->id;

        $this->assertDatabaseHas('products', $data);
        $this->assertInstanceOf(\App\Models\Product::class, $product);
    }

    public function test_product_update(): void
    {
        $productId = 1;
        $price = '160000.00';

        $service = app(\App\Services\ProductService::class);

        $product = $service->update($productId, ['price' => $price]);

        $this->assertDatabaseHas('products', [
            'id' => $productId,
            'price' => $price
        ]);
        $this->assertInstanceOf(\App\Models\Product::class, $product);
    }
}
