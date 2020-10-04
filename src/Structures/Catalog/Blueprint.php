<?php

namespace Printify\Structures\Catalog;

use Printify\Structures\BaseStructure;

class Blueprint extends BaseStructure
{
    public function fill(object $attribute): void
    {
        $this->attributes = [
            'id' => $attribute->id,
            'title' => $attribute->title,
            'description' => isset($attribute->description) ? $attribute->description : null,
            'brand' => $attribute->brand,
            'model' => $attribute->model,
            'images' => $attribute->images
        ];
    }
}
