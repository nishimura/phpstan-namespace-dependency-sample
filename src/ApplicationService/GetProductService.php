<?php

namespace App\ApplicationService;

use App\Domain\Product\ProductRepository;
use App\Domain\Product\Product;

class GetProductService
{
    /** @var ProductRepository */
    private $repository;

    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    public function findById(int $productId): ?Product
    {
        return $this->repository->findById($productId);
    }

    public function getProduct(int $productId): ?ProductResultDto
    {
        $domain = $this->repository->findById($productId);
        if (!$domain)
            return null;

        return new ProductResultDto(
            $domain->id()->value(),
            $domain->name()->value()
        );
    }
}
