<?php

namespace App\Repositories\Attribute;

use App\Models\Attribute;
use App\Repositories\BaseRepository;

class AttributeRepository extends BaseRepository implements AttributeRepositoryInterface
{
    public function getModel()
    {
        return Attribute::class;
    }

    public function getDataPaginate($search = '', $parentId = null, $perPage = 10)
    {
        $categories = $this->model::query();

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
