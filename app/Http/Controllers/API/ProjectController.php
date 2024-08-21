<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\PostDatableRequest;
use App\Services\Post\PostService;

class ProjectController extends Controller
{
    public function __construct(
        private readonly PostService $postService
    )
    {
    }

    public function getDatable(PostDatableRequest $request)
    {
        $type = $request->get('type');
        $type = $type . 's';
        $response = $this->postService->getDatable($request);

        return view("admin.pages.projects.table", [
            'posts' => $response
        ]);
    }
}
