<?php

namespace App\Domain\Product;

class Product
{
    /** @var ProductId */
    private $id;

    /** @var ProductName */
    private $name;

    public function __construct(ProductId $id, ProductName $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
    public function id(): ProductId
    {
        return $this->id;
    }
    public function name(): ProductName
    {
        return $this->name;
    }
}
