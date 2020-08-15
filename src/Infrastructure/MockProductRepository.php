<?php

namespace App\Infrastructure;

use App\Domain\Product\Product;
use App\Domain\Product\ProductId;
use App\Domain\Product\ProductName;
use App\Domain\Product\ProductRepository;

class MockProductRepository implements ProductRepository
{
    /** @var string */
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function findById(int $id): ?Product
    {
        if ($id < 10)
            return null;

        return new Product(new ProductId($id), new ProductName($this->name));
    }
}
