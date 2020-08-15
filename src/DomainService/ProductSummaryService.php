<?php

namespace App\DomainService;

use App\Domain\Product\Product;

class ProductSummaryService
{
    /** array<int,Product> */
    private $products;

    /**
     * @param array<int,Product> $products
     */
    public function __construct($products = [])
    {
        $this->products = $products;
    }

    public function add(Product $product): void
    {
        $this->products[] = $product;
    }

    public function count():int
    {
        return count($this->products);
    }
}
