<?php

namespace App\Domain\Product;

interface ProductRepository
{
    public function findById(int $id): ?Product;
}
