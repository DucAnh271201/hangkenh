<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index()
    {
        return view('frontend.pages.article');
    }

    public function detail()
    {
        return view('frontend.pages.article_detail');
    }

    public function magazine()
    {
        return view('frontend.pages.magazine-1');
    }

    public function magazineDetail()
    {
        return view('frontend.pages.magazine-detail');
    }

    public function collection()
    {
        return view('frontend.pages.collection');
    }

    public function collectionDetail()
    {
        return view('frontend.pages.collection_detail');
    }

    public function trendingDetail()
    {
        return view('frontend.pages.trending_detail');
    }

    public function introduce()
    {
        return view('frontend.pages.introduce');
    }
}
