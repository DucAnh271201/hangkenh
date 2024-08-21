<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Services\Post\PostService;
use App\Utils\Util;

class ProjectController extends Controller
{

    public function project()
    {
        $category = Category::query()->where('type', Post::TYPE_PROJECT)->first();
        if (!$category) {
            abort(404);
        }
        return redirect()->route('fe.project.category', $category->slug);
    }

    public function projectCate($slug)
    {
        $categories = Category::query()->where('type', Post::TYPE_PROJECT)->where('parent_id', 0)->get();

        $cateSelected = $categories->where('slug', $slug)->first();
        if (!$cateSelected) {
            abort(404);
        }

        $cateChildren = Util::getAllChildren($cateSelected);
        $cateIds[] = $cateSelected->id;
        if (!empty($cateChildren)) {
            $cateIds[] = $cateChildren->pluck('id')->toArray();
        }
        $cateIdsString = implode(',', $cateIds);

        $posts = get_posts(
            catId: $cateIdsString,
            paginate: true,
            perPage: 8,
            type: Post::TYPE_PROJECT
        );

        $postChucks = $posts->chunk(2);
        return view('frontend.pages.project', compact('categories', 'cateSelected', 'posts', 'postChucks'));
    }

    public function projectDetail($categorySlug, $postSlug)
    {
        $cateSelected = Category::query()->where('type', Post::TYPE_PROJECT)->where('slug', $categorySlug)->first();
        if (!$cateSelected) {
            abort(404);
        }

        $post = get_post_slug($postSlug, Post::TYPE_PROJECT);
        if (empty($post)) {
            abort(404);
        }
        $breadcrumbs = $cateSelected->getBreadcrumbs();
        $projectLibrary = get_meta_extra($post, 'project_library');

        if (!empty($projectLibrary)){
            $projectLibrary = collect($projectLibrary)->chunk(2);
        }
        $postService = app(PostService::class);
        $products = $postService->getProducts(perPage: 4);
        return view('frontend.pages.project_detail', compact('post', 'breadcrumbs', 'cateSelected', 'projectLibrary', 'products'));
    }
}
