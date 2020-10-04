<?php

namespace Printify\Tests;

use Printify\PrintifyOrders;
use Printify\Tests\TestCase;

class OrdersTest extends TestCase
{
    public $printify_orders = null;

    protected function setUp()
    {
        parent::setUp();
        $this->printify_orders = new PrintifyOrders($this->api, Credentials::$shop_id);
    }

    public function testOrdersAll()
    {
        $orders = $this->printify_orders->all();
        var_dump($orders);
    }

}
