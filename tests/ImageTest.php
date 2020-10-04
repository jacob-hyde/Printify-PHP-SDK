<?php

namespace Printify\Tests;

use Printify\PrintifyImage;
use Printify\Tests\TestCase;

class ImageTest extends TestCase
{
    public $printify_image = null;

    protected function setUp()
    {
        parent::setUp();
        $this->printify_image = new PrintifyImage($this->api);
    }

    public function testImagesAll()
    {
        $images = $this->printify_image->all();
    }

}
