<?php

namespace App\Repositories\Category;

use App\Models\Category;
use App\Repositories\BaseRepository;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    public function getModel()
    {
        return Category::class;
    }

    public function getDataPaginate($type, $search = '', $parentId = null, $perPage = 10)
    {
        $categories = $this->model::query()
            ->where('type', $type);

        if ($parentId) {
            $categories = $categories->where('parent_id', $parentId);
        }else{
            $categories = $categories->where('dept', 0);
        }
        if ($search) {
            $categories = $categories->where('slug', 'like', "%" . \Str::slug($search) . "%");
        }
        $categories = $categories->orderBy('id', 'DESC');

        return $categories->paginate($perPage);
    }

    public function getSameParentId($parentId)
    {
        return $this->model::query()->where('parent_id', $parentId)->get();
    }
}
