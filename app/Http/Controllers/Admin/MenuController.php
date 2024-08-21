<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\MenuItem;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{

    public function index()
    {
        $menu = new Menu();
        $menuitems = new MenuItem();
        $menulist = $menu->select(['id', 'name'])->get();
        $menulist = $menulist->pluck('name', 'id')->prepend('Select menu', 0)->all();

        //$roles = Role::all();

        if ((request()->has("action") && empty(request()->input("menu"))) || request()->input("menu") == '0') {
            return view('admin.pages.menus.index')->with("menulist", $menulist);
        }

        $menu = Menu::find(request()->input("menu"));
        $menus = $menuitems->getall(request()->input("menu"));

        $data = ['menus' => $menus, 'indmenu' => $menu, 'menulist' => $menulist];
        if (config('menu.use_roles')) {
            $data['roles'] = DB::table(config('menu.roles_table'))->select([config('menu.roles_pk'), config('menu.roles_title_field')])->get();
            $data['role_pk'] = config('menu.roles_pk');
            $data['role_title_field'] = config('menu.roles_title_field');
        }
        return view('admin.pages.menus.index', $data);
    }
}
