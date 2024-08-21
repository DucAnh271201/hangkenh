<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class OptionController extends Controller
{

    public function index()
    {
        return view('admin.pages.options.index');
    }
}
