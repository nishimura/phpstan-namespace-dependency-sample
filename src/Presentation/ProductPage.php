<?php

namespace App\Presentation;

use App\ApplicationService\GetProductService;
use App\Infrastructure\MockProductRepository;

class ProductPage
{
    /** @return array<string,mixed> response */
    public static function showProduct(int $id)
    {
        $repository = new MockProductRepository('Mock name');
        $service = new GetProductService($repository);

        $product = $service->findById($id);
        $product2 = $service->getProduct($id);

        return [
            'product' => $product,
            'product2' => $product2,
        ];
    }
}
