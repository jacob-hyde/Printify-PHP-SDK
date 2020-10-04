<?php

namespace Printify\Tests;

use Printify\PrintifyProducts;
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
    }

}
