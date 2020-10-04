<?php

namespace Printify\Tests;

use Printify\Collection;
use Printify\PrintifyProducts;
use Printify\Structures\Product;
use Printify\Tests\TestCase;

class ProductsTest extends TestCase
{
    public $printify_products = null;

    protected function setUp()
    {
        parent::setUp();
        $this->printify_products = new PrintifyProducts($this->api, Credentials::$shop_id);
    }

    public function testProductsAll()
    {
        $products = $this->printify_products->all();
        $this->assertInstanceOf(Collection::class, $products);
        $this->assertTrue((count($products) > 0));
        $product = $products[0];
        $this->assertInstanceOf(Product::class, $product);
        $structure = [
            'id',
            'title',
            'description',
            'tags',
            'options',
            'variants',
            'images',
            'created_at',
            'updated_at',
            'visible',
            'is_locked',
            'blueprint_id',
            'user_id',
            'shop_id',
            'print_provider_id',
            'print_areas',
            'sales_channel_properties'
        ];
        $this->assertArrayStructure($structure, $product->toArray());
    }

}
