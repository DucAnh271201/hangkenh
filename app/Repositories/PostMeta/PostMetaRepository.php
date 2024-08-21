<?php

namespace App\Repositories\PostMeta;

use App\Models\PostMeta;
use App\Repositories\BaseRepository;

class PostMetaRepository extends BaseRepository implements PostMetaRepositoryInterface
{
    public function getModel()
    {
        return PostMeta::class;
    }
}
