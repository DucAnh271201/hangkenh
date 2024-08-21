<?php

namespace App\Repositories\PostCategory;

use App\Models\PostCategory;
use App\Repositories\BaseRepository;

class PostCategoryRepository extends BaseRepository implements PostCategoryRepositoryInterface
{
    public function getModel()
    {
        return PostCategory::class;
    }
}
