<?php

namespace Printify\Structures;

class Webhook extends BaseStructure
{
    public function fill(object $attribute): void
    {
        $this->attributes = [
            'id' => $attribute->id,
            'topic' => $attribute->topic,
            'url' => $attribute->url,
            'shop_id' => $attribute->shop_id,
            'secret' => $attribute->secret
        ];
    }
}
