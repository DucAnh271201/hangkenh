<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\PostCreateRequest;
use App\Models\Post;
use App\Services\Post\PostService;

class PostManagerController extends Controller
{
    private string $type = 'post';
    private string $view = 'posts';

    public function __construct(
        private readonly PostService $postService
    )
    {
    }

    public function index()
    {
        return view("admin.pages.posts.index", [
            'type' => $this->type,
            'view' => $this->view,
        ]);
    }

    public function create()
    {
        return view('admin.pages.posts.create', [
            'post' => null,
            'view' => $this->view,
            'type' => $this->type,
            'statuses' => Post::STATUSES
        ]);
    }

    public function edit($id)
    {
        $post = $this->postService->find($id);
        if (!$post) {
            abort(404);
        }

        $categoryIds = [];
        foreach ($post->categories as $category){
            $categoryIds[] = $category->id;
        }
        return view('admin.pages.posts.edit', [
            'type' => $this->type,
            'view' => $this->view,
            'post' => $post,
            'statuses' => Post::STATUSES,
            'categoryIds' => implode(',', $categoryIds)
        ]);
    }
}
