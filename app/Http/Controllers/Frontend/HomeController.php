<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.pages.home');
    }

    public function team() {
        return view('frontend.pages.team');
    }

    public function designer() {
        dd(123);
        return view('frontend.pages.designer');
    }

    public function project() {
        return view('frontend.pages.project');
    }

    public function projectDetail() {
        return view('frontend.pages.project-detail');
    }

    public function knowledge() {
        return view('frontend.pages.magazine-3');
    }

    public function contact() {
        return view('frontend.pages.contact');
    }

    public function template()
    {
        $page = get_page_single("Trang chủ");

        return view('frontend.template',compact('page'))->withShortcodes();
    }
}
