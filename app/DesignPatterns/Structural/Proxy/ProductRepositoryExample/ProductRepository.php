<?php

namespace App\DesignPatterns\Structural\Proxy\ProductRepositoryExample;

class ProductRepository
{
    public function find(int $productId): string
    {
        return "I'm a product {$productId} from ProductRepository";
    }
}
