<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\MenuItem;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    public function createNewMenu()
    {

        $menu = new Menu();
        $menu->name = request()->input("menuname");
        $menu->slug = Str::slug($menu->name);
        $menu->save();
        return json_encode(array("resp" => $menu->id));
    }

    public function deleteItemMenu()
    {
        $menuitem = MenuItem::find(request()->input("id"));

        $menuitem->delete();
    }

    public function deleteMenug()
    {
        $menus = new MenuItem();
        $getall = $menus->getall(request()->input("id"));
        if (count($getall) == 0) {
            $menudelete = Menu::find(request()->input("id"));
            $menudelete->delete();

            return json_encode(array("resp" => "you delete this item"));
        } else {
            return json_encode(array("resp" => "You have to delete all items first", "error" => 1));

        }
    }

    public function updateItem()
    {
        $arraydata = request()->input("arraydata");
        if (is_array($arraydata)) {
            foreach ($arraydata as $value) {
                $menuitem = MenuItem::find($value['id']);
                if ($menuitem){
                    $menuitem->label = $value['label'];
                    $menuitem->link = $value['link'];
                    $menuitem->class = $value['class'];
                    if (config('menu.use_roles')) {
                        $menuitem->role_id = $value['role_id'] ? $value['role_id'] : 0 ;
                    }
                    $menuitem->save();
                }
            }
        } else {
            $menuitem = MenuItem::find(request()->input("id"));
            if ($menuitem){
                $menuitem->label = request()->input("label");
                $menuitem->link = request()->input("url");
                $menuitem->class = request()->input("clases");
                if (config('menu.use_roles')) {
                    $menuitem->role_id = request()->input("role_id") ? request()->input("role_id") : 0 ;
                }
                $menuitem->save();
            }

        }
    }

    public function addCustomMenu()
    {

        $menuitem = new MenuItem();
        $menuitem->label = request()->input("labelmenu");
        $menuitem->link = request()->input("linkmenu");
        if (config('menu.use_roles')) {
            $menuitem->role_id = request()->input("rolemenu") ? request()->input("rolemenu")  : 0 ;
        }
        $menuitem->menu = request()->input("idmenu");
        $menuitem->sort = MenuItem::getNextSortRoot(request()->input("idmenu"));
        $menuitem->save();

    }

    public function generateMenuControl()
    {
        $menu = Menu::find(request()->input("idmenu"));
        if ($menu){
            $menu->name = request()->input("menuname");
            $menu->slug = Str::slug($menu->name);

            $menu->save();
        }

        if (is_array(request()->input("arraydata"))) {
            foreach (request()->input("arraydata") as $value) {

                $menuitem = MenuItem::find($value["id"]);
                if ($menuitem){
                    $menuitem->parent = $value["parent"];
                    $menuitem->sort = $value["sort"];
                    $menuitem->depth = $value["depth"];
                    if (config('menu.use_roles')) {
                        $menuitem->role_id = request()->input("role_id");
                    }
                    $menuitem->save();
                }
            }
        }
        echo json_encode(array("resp" => 1));

    }
}
