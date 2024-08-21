<?php

namespace App\Services\PostMeta;

use App\Repositories\PostMeta\PostMetaRepositoryInterface;

class PostMetaService
{

    public function __construct(
        private readonly PostMetaRepositoryInterface $repository
    )
    {
    }

}
