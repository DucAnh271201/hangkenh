<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\PostCreateRequest;
use App\Http\Requests\API\PostDatableRequest;
use App\Http\Requests\API\PostUpdateRequest;
use App\Models\Post;
use App\Services\Post\PostService;
use App\Utils\HttpResponseErrorCode;

class PostController extends Controller
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

        return view("admin.pages.$type.table", [
            'posts' => $response
        ]);
    }


    public function store(PostCreateRequest $request)
    {
        $type = $request->get('type');
        $typeMap = [
            Post::TYPE_POST => route('admin.manager-post'),
            Post::TYPE_PRODUCT => route('admin.manager-product'),
            Post::TYPE_PAGE => route('admin.manager-page'),
            Post::TYPE_DESIGNER => route('admin.manager-designer.design-list', $request->input('author_id', 0)),
            Post::TYPE_PROJECT => route('admin.manager-project'),
        ];
        if (!isset($typeMap[$type])) {
            return response_error(HttpResponseErrorCode::CODE_1010, 'Không tìm thấy loại');
        }
        $created = $this->postService->create($request);
        if ($created) {

            return response_success([
                'redirect' => $typeMap[$type]
            ]);
        }
        return response_error();
    }

    public function update(PostUpdateRequest $request)
    {
        $type = $request->get('type');
        $typeMap = [
            Post::TYPE_POST => route('admin.manager-post'),
            Post::TYPE_PRODUCT => route('admin.manager-product'),
            Post::TYPE_PAGE => route('admin.manager-page'),
            Post::TYPE_DESIGNER => route('admin.manager-designer.design-list', $request->input('author_id', 0)),
            Post::TYPE_PROJECT => route('admin.manager-project'),
        ];
        if (!isset($typeMap[$type])) {
            return response_error(HttpResponseErrorCode::CODE_1010, 'Không tìm thấy loại');
        }
        $updated = $this->postService->update($request);
        if ($updated) {
            return response_success([
                'redirect' => $typeMap[$type]
            ]);
        }
        return response_error();
    }

    public function destroy($id)
    {
        $this->postService->destroy($id);
        return response_success();
    }
}
