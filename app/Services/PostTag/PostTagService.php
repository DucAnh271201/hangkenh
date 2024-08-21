<?php

namespace App\Services\PostTag;

use App\Repositories\Post\PostTagRepositoryInterface;

class PostTagService
{

    public function __construct(
        private readonly PostTagRepositoryInterface $repository
    )
    {
    }

}
