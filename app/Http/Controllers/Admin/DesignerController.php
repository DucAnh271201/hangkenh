<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DesignListRequest;
use App\Models\Designer;
use App\Models\Post;
use App\Services\Post\PostService;

class DesignerController extends Controller
{


    public function index()
    {
        return view('admin.pages.designers.index');
    }


    public function create()
    {
        return view('admin.pages.designers.create', [
            'designer' => null,
            'statuses' => Designer::STATUSES
        ]);
    }

    public function edit($id)
    {
        $designer = Designer::query()->find($id);
        if (!$designer) {
            abort(404);
        }
        return view('admin.pages.designers.edit', [
            'designer' => $designer,
            'statuses' => Designer::STATUSES,
        ]);
    }

    public function designList($designerId)
    {
        $designer = Designer::query()->find($designerId);
        if (!$designer){
            abort(404);
        }

        return view('admin.pages.design_list.index', [
            'type' => 'designer',
            'designer' => $designer
        ]);
    }
    public function designCreate($designerId)
    {
        $designer = Designer::query()->find($designerId);
        if (!$designer){
            abort(404);
        }
        return view('admin.pages.design_list.create', [
            'post' => null,
            'view' => 'design_list',
            'type' => 'designer',
            'statuses' => Post::STATUSES,
            'designer' => $designer
        ]);

    }

    public function designEdit($designerId, $id, PostService $postService)
    {
        $designer = Designer::query()->find($designerId);
        if (!$designer){
            abort(404);
        }
        $post = $postService->find($id);
        if (!$post) {
            abort(404);
        }

        return view('admin.pages.design_list.edit', [
            'type' => 'designer',
            'view' => 'design_list',
            'post' => $post,
            'statuses' => Post::STATUSES,
            'designer' => $designer
        ]);
    }
}
