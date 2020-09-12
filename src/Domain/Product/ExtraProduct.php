<?php

namespace App\Domain\Product;

class ExtraProduct
{
    /** @var ProductId */
    private $id;

    /** @var InternalAttributes */
    private $attributes;

    public function __construct(ProductId $id, InternalAttributes $attrs)
    {
        $this->id = $id;
        $this->attributes = $attrs;
    }
    public function id(): ProductId
    {
        return $this->id;
    }
}
