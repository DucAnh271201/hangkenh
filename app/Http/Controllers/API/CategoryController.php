<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\CategoryByTypeRequest;
use App\Http\Requests\API\CategoryDatableRequest;
use App\Http\Requests\API\CategoryStoreRequest;
use App\Http\Requests\API\CategoryUpdateRequest;
use App\Http\Resources\API\CategoryResource;
use App\Services\Category\CategoryService;

class CategoryController extends Controller
{

    public function __construct(
        private readonly CategoryService $categoryService
    )
    {
    }

    public function getDatable(CategoryDatableRequest $request)
    {

        $response = $this->categoryService->getDatable($request);

        return view('admin.pages.categories.table', [
            'categories' => $response
        ]);
    }

    public function getCategories(CategoryByTypeRequest $request)
    {
        $categories = $this->categoryService->getCategoryByType($request);

        return response_success(CategoryResource::collection($categories));
    }


    public function store(CategoryStoreRequest $request)
    {
        $category = $this->categoryService->store($request);
        return response_success(new CategoryResource($category));
    }



    public function update(CategoryUpdateRequest $request)
    {
        $this->categoryService->update($request);
        return response_success();
    }

    public function destroy($id)
    {
        $this->categoryService->destroy($id);
        return response_success();
    }
}
