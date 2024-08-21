<?php

namespace App\Services\Attribute;

use App\Exceptions\ServiceException;
use App\Http\Requests\API\AttrbuteDatableRequest;
use App\Http\Requests\API\AttributeStoreRequest;
use App\Http\Requests\API\AttributeUpdateRequest;
use App\Repositories\Attribute\AttributeRepositoryInterface;
use App\Utils\HttpResponseErrorCode;
use App\Utils\Util;
use Illuminate\Database\UniqueConstraintViolationException;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AttributeService
{

    public function __construct(
        private readonly AttributeRepositoryInterface $repository
    )
    {
    }

    public function getDatable(AttrbuteDatableRequest $request)
    {
        $parentId = $request->get('parent_id');
        $search = $request->get('s');
        return $this->repository->getDataPaginate($search, $parentId);
    }

    public function getById($id)
    {
        return $this->repository->find($id);
    }

    public function getSameParentId($currentId, $parentId)
    {
        $cate = $this->getById($parentId);
        $data = $this->repository->getSameParentId($cate->parent_id ?? 0);
        return $data->where('id', '!=', $currentId);
    }

    public function getAttributes(Request $request)
    {
        $parentId = $request->get('parent_id');

        $query = $this->repository->query();

        $data = collect();
        if ($parentId) {
            $category = $query->where('id', $parentId)->first();
            $data->push($category);
            $childs = $this->repository->query()->where('parent_id', $parentId)->get();
            foreach ($childs as $child) {
                $data->push($child);
            }
        } else {
            $categories = $query->get();
            $data = $data->merge($categories);
        }

        return $data;
    }

    public function getAllDataWithChild()
    {
        $attributes = $this->repository->query()
            ->with('allChildren')
            ->where('parent_id', 0)
            ->get();
        $collection = collect();

        foreach ($attributes as $item){
            $collection->push($item);
            $children = Util::getAllChildren($item);
            $collection = $collection->merge($children);

        }
        return $collection;
    }


    public function store(AttributeStoreRequest $request)
    {
        try {
            $title = $request->get('title');
            $slug = $request->get('slug');
            if (empty($slug)) {
                $slug = Str::slug($title);
            }
            $parentId = $request->get('parent_id', 0);
            if (empty($parentId)) {
                $dept = 0;
                $parentId = 0;
            } else {
                $cateParent = $this->repository->find($parentId);
                if (!$cateParent) {
                    return response_error(HttpResponseErrorCode::CODE_1010);
                }
                $dept = $cateParent->dept + 1;
            }
            $data = [
                'title' => $title,
                'slug' => $slug,
                'parent_id' => $parentId,
                'dept' => $dept,
                'description' => $request->get('description'),
                'color' => $request->get('color'),
                'template' => $request->get('template'),
                'in_order' => $request->get('in_order'),
            ];

            return $this->repository->create($data);
        }catch (\Throwable $exception){
            if ($exception instanceof UniqueConstraintViolationException){
                throw new ServiceException(HttpResponseErrorCode::CODE_1011, "Đường dẫn đã tồn tại");
            }
        }
        return false;
    }

    public function update(AttributeUpdateRequest $request)
    {
        $id = $request->get('id');
        $title = $request->get('title');
        $slug = $request->get('slug');
        if (empty($slug)) {
            $slug = Str::slug($title);
        }
        $parentId = $request->get('parent_id', 0);
        if (empty($parentId)) {
            $dept = 0;
            $parentId = 0;
        } else {
            $cateParent = $this->repository->find($parentId);
            if (!$cateParent) {
                throw new ServiceException(HttpResponseErrorCode::CODE_1010);
            }
            $dept = $cateParent->dept + 1;
        }
        $data = [
            'title' => $title,
            'slug' => $slug,
            'parent_id' => $parentId,
            'dept' => $dept,
            'description' => $request->get('description'),
            'color' => $request->get('color'),
            'template' => $request->get('template'),
            'in_order' => $request->get('in_order'),
        ];

        return $this->repository->update($id, $data);
    }

    public function destroy($id)
    {
        $category = $this->repository->find($id);
        if (!$category) {
            throw new ServiceException(HttpResponseErrorCode::CODE_1010);
        }
        $childrens = Util::getAllChildren($category);
        $categoryIds = [];
        foreach ($childrens as $child) {
            $categoryIds[] = $child->id;
        }

        try {
            \DB::beginTransaction();
            $this->repository->deleteByIds($categoryIds);
            $category->delete();

            \DB::commit();
            return true;

        } catch (\Exception $exception) {
            \DB::rollBack();
            \Log::error(make_prefix_log_message(__CLASS__, __FUNCTION__, __LINE__, $exception->getMessage()));
            throw new ServiceException(HttpResponseErrorCode::CODE_1000);
        }
    }
}
