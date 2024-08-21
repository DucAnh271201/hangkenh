<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\PostCreateRequest;
use App\Models\Post;
use App\Models\PostProduct;
use App\Services\Attribute\AttributeService;
use App\Services\Post\PostService;

class PostProductController extends Controller
{
    private string $type = 'product';
    private string $view = 'products';

    public function __construct(
        private readonly PostService $postService,
        private readonly AttributeService $attributeService
    )
    {
    }

    public function index()
    {
        return view('admin.pages.products.index', [
            'type' => $this->type
        ]);
    }

    public function create()
    {
        $attributes = $this->attributeService->getAllDataWithChild();
        return view('admin.pages.products.create', [
            'post' => null,
            'type' => $this->type,
            'view' => $this->view,
            'statuses' => Post::STATUSES,
            'productStatuses' => PostProduct::buildStatuses(),
            'attributes' => $attributes
        ]);
    }

    public function edit($id)
    {
        $post = $this->postService->find($id);
        if (!$post) {
            abort(404);
        }
        $attributes = $this->attributeService->getAllDataWithChild();
        $post->load('product.attribute');
        $categoryIds = [];
        foreach ($post->categories as $category){
            $categoryIds[] = $category->id;
        }

        return view('admin.pages.products.edit', [
            'type' => $this->type,
            'view' => $this->view,
            'post' => $post,
            'statuses' => Post::STATUSES,
            'productStatuses' => PostProduct::buildStatuses(),
            'categoryIds' => implode(',', $categoryIds),
            'attributes' => $attributes
        ]);
    }
}
