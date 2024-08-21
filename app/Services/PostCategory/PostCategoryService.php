<?php

namespace App\Services\PostCategory;

use App\Repositories\Post\PostCategoryRepositoryInterface;

class PostCategoryService
{

    public function __construct(
        private readonly PostCategoryRepositoryInterface $repository
    )
    {
    }

}
