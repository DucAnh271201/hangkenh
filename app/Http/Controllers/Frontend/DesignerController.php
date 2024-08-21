<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Designer;
use App\Models\Post;
use Illuminate\Http\Request;

class DesignerController extends Controller
{
    public function index()
    {
        $designers = Designer::query()->active()->paginate(9);
        return view('frontend.pages.designer', [
            'designers' => $designers
        ]);
    }

    public function detail($slug)
    {
        $designer = Designer::query()->where('slug', $slug)->active()->first();
        if (!$designer){
            abort(404);
        }

        $posts = Post::query()
            ->where('status', Post::STATUS_PUBLISH)
            ->where('type', Post::TYPE_DESIGNER)
            ->where('author_id', $designer->id)
            ->paginate(4);
        return view('frontend.pages.designer_detail', [
            'designer' => $designer,
            'posts' => $posts
        ]);
    }
}
