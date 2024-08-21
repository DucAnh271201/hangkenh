<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\Post\PostService;

class ProductController extends Controller
{
    public function category()
    {
        return view('frontend.pages.category');
    }

    public function product()
    {
        $postService = app(PostService::class);
        $products = $postService->getProducts();
        return view('frontend.pages.product', compact('products'));
    }

    public function magazine()
    {
        return view('frontend.pages.magazine-1');
    }

    public function magazineDetail()
    {
        return view('frontend.pages.magazine-detail-2');
    }

}
