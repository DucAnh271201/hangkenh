<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Services\Category\CategoryService;
use Illuminate\Http\Request;

class PostCategoryController extends Controller
{
    private string $type = 'post';

    public function __construct(
        private readonly CategoryService $categoryService
    )
    {
        $this->type = \request('type', 'post');
    }

    public function index(Request $request)
    {
        $parentId = $request->get('parent_id');
        $breadcrumbs = null;
        if ($parentId) {
            $category = $this->categoryService->getById($parentId); // $id là ID của danh mục hiện tại
            $breadcrumbs = $category->getBreadcrumbs();
        }


        return view('admin.pages.categories.index', [
            'type' => $this->type,
            'breadcrumbs' => $breadcrumbs,
        ]);
    }

    public function create(Request $request)
    {
        $parentId = $request->get('parent_id');
        $type = $request->get('type');
        if (empty($parentId)){
            $parentId = 0;
        }
        $categoryWithParent = $this->categoryService->getSameParentId(0,$type, $parentId);

        return view('admin.pages.categories.create', [
            'type' => $this->type,
            'categories' => $categoryWithParent,
        ]);
    }

    public function edit($id, Request $request)
    {
        $category = $this->categoryService->getById($id);
        $type = $request->get('type');

        $categoryWithParent = $this->categoryService->getSameParentId($category->id,$type, $category->parent_id);
        return view('admin.pages.categories.edit', [
            'category' => $category,
            'type' => $this->type,
            'categories' => $categoryWithParent,
        ]);
    }

}
