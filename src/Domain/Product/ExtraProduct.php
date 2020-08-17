<?php

namespace App\Domain\Product;

class ExtraProduct
{
    /** @var ProductId */
    private $id;

    /** @var InternalAttributes */
    private $attributes;

    public function __construct(ProductId $id)
    {
        $this->id = $id;
        $this->attributes = new InternalAttributes([]);
    }
    public function id(): ProductId
    {
        return $this->id;
    }
}
