<?php

namespace Printify\Structures\Catalog;

use Printify\Structures\BaseStructure;

class PrintProvider extends BaseStructure
{
    public function fill(object $attribute): void
    {
        $this->attributes = [
            'id' => $attribute->id,
            'title' => $attribute->title,
            'location' => $attribute->location
        ];
        if (isset($attribute->blueprints)) {
            $this->attributes['blueprints'] = $this->collectStructure($attribute->blueprints, Blueprint::class);
        }
    }
}
