<?php

namespace App\Repositories\PostTag;

use App\Models\PostTag;
use App\Repositories\BaseRepository;

class PostTagRepository extends BaseRepository implements PostTagRepositoryInterface
{
    public function getModel()
    {
        return PostTag::class;
    }
}
