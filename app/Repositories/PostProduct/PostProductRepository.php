<?php

namespace App\Repositories\PostProduct;

use App\Models\PostProduct;
use App\Repositories\BaseRepository;

class PostProductRepository extends BaseRepository implements PostProductRepositoryInterface
{
    public function getModel()
    {
        return PostProduct::class;
    }
}
