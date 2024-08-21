<?php

namespace App\Services\PostProduct;

use App\Repositories\PostProduct\PostProductRepositoryInterface;

class PostProductService
{

    public function __construct(
        private readonly PostProductRepositoryInterface $repository
    )
    {
    }



}
