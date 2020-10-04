<?php

namespace Printify\Tests;

use Printify\PrintifyCatalog;
use Printify\Structures\Catalog\Blueprint;
use Printify\Tests\TestCase;

class CatalogTest extends TestCase
{
    public $printify_shop = null;

    protected function setUp()
    {
        parent::setUp();
        $this->printify_catalog = new PrintifyCatalog($this->api);
    }

    public function testCatalogAll()
    {
        $catalog = $this->printify_catalog->all();
        $this->assertTrue(is_array($catalog));
        $this->assertTrue((count($catalog) > 0));
        $blueprint = $catalog[0];
        $this->assertInstanceOf(Blueprint::class, $blueprint);
    }

    // public function testAllPrintProviders()
    // {
    //     $print_providers = $this->printify_catalog->all_print_providers();
    //     foreach ($print_providers as $provider) {
    //         var_dump($provider->toArray());
    //     }
    //     die();
    // }
}
