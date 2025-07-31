<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;

class ProductCreateTest extends TestCase
{
	use RefreshDatabase;
    /**
     * A basic unit test example.
     */
    public function test_product_create(): void
    {
    	$productRepository = app(\App\Repositories\Interfaces\ProductRepositoryInterface::class);

    	// $data = [
     //        'name' => 'Test Product',
     //        'price' => '150000.00',
     //        'barcode' => '1234560514112',
     //        'category_id' => 555
     //    ];

     //    $product = $productRepository->create($data);

     //    $this->assertDatabaseHas('products', [
     //        'name' => 'Test Product',
     //        'price' => '150000.00',
     //        'barcode' => '1234560514112',
     //        'category_id' => 555
     //    ]);

     //    $this->assertInstanceOf(\App\Models\Product::class, $product);
    }
}
