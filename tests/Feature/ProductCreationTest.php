<?php

namespace Tests\Feature;

use App\Entities\Product;
use Tests\TestCase;

class ProductCreationTest extends TestCase
{
    use \Illuminate\Foundation\Testing\DatabaseTransactions;

    /**
     * @test
     */
    public function it_should_create_a_product()
    {
        // Arrange
        $data = factory(Product::class, 'formData')->make()->toArray();

        // Act
        $this->post(route('product.store'), $data);

        // Assert
        $this->assertDatabaseHas((new Product())->getTable(), $data);
    }

    /**
     * @test
     */
    public function it_should_create_a_product_with_different_size()
    {
        // Arrange
        $product = factory(Product::class)->create([
            'size'      => 'XL',
            'size_code' => '03',
        ]);
        $data = [
            "name"             => $product->name,
            "combination_code" => $product->combination_code,
            "color"            => $product->color,
            "color_code"       => $product->color_code,
            "size"             => "XXL",
            "size_code"        => "04",
        ];

        // Act
        $this->post(route('product.store'), $data);

        // Assert
        $this->assertDatabaseHas((new Product())->getTable(), $product->toArray());
        $this->assertDatabaseHas((new Product())->getTable(), $data);
    }

    
}
