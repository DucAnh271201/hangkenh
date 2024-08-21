<?php

namespace App\Services\Category;

use App\Exceptions\ServiceException;
use App\Http\Requests\API\CategoryByTypeRequest;
use App\Http\Requests\API\CategoryDatableRequest;
use App\Http\Requests\API\CategoryStoreRequest;
use App\Http\Requests\API\CategoryUpdateRequest;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Utils\HttpResponseErrorCode;
use App\Utils\Util;
use Illuminate\Database\UniqueConstraintViolationException;
use Illuminate\Support\Str;

class CategoryService
{

    public function __construct(
        private readonly CategoryRepositoryInterface $repository
    )
    {
    }

    public function getDatable(CategoryDatableRequest $request)
    {
        $type = $request->get('type');
        $parentId = $request->get('parent_id');
        $search = $request->get('s');
        return $this->repository->getDataPaginate($type, $search, $parentId);
    }

    public function getById($id)
    {
        return $this->repository->find($id);
    }


    public function findBySlug($slug)
    {
        return $this->repository->query()
            ->where('slug', $slug)
            ->first();
    }

    public function getSameParentId($currentId, $type, $parentId)
    {
        $cate = $this->repository->query()
        ->where('id', $parentId)
        ->where('type', $type)
        ->first();
        $data = $this->repository->getSameParentId($cate->parent_id ?? 0);
        return $data->where('id', '!=', $currentId);
    }

    public function getCategoryByType(CategoryByTypeRequest $request)
    {
        $type = $request->get('type');
        $parentId = $request->get('parent_id');

        $query = $this->repository->query()->where('type', $type);

        $data = collect();
        if ($parentId) {
            $category = $query->where('id', $parentId)->first();
            $data->push($category);
            $childs = $this->repository->query()->where('parent_id', $parentId)->get();
            foreach ($childs as $child) {
                $data->push($child);
            }
        } else {
            $categories = $query->where('parent_id', 0)->get();
            foreach ($categories as $category){
                $data->push($category);
                $data = $data->merge(Util::getAllChildren($category));
            }

//            $data = $data->merge($categories);
        }
        return $data;
    }


    public function store(CategoryStoreRequest $request)
    {
        try {
            $type = $request->get('type');
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
                $cateParent = $this->repository->query()->find($parentId);
                if (!$cateParent) {
                    throw new ServiceException(HttpResponseErrorCode::CODE_1010);
                }
                $dept = $cateParent->dept + 1;
            }
            $data = [
                'short_title' => $request->input('short_title'),
                'title' => $title,
                'slug' => $slug,
                'type' => $type,
                'parent_id' => $parentId,
                'dept' => $dept,
                'description' => $request->get('description'),
            ];

            return $this->repository->create($data);
        }catch (\Throwable $exception){
            \Log::error(make_prefix_log_message(__CLASS__, __FUNCTION__, __LINE__, $exception->getMessage()));
            if ($exception instanceof UniqueConstraintViolationException){
                throw new ServiceException(HttpResponseErrorCode::CODE_1011, "Đường dẫn đã tồn tại");
            }
            throw new ServiceException(HttpResponseErrorCode::CODE_1000, $exception->getMessage());
        }
        return false;
    }

    public function update(CategoryUpdateRequest $request)
    {
        $id = $request->get('id');
        $type = $request->get('type');
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
            'short_title' => $request->input('short_title'),
            'title' => $title,
            'slug' => $slug,
            'type' => $type,
            'parent_id' => $parentId,
            'dept' => $dept,
            'description' => $request->get('description'),
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
