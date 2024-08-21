<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $fillable = ['label', 'link', 'parent', 'sort', 'class', 'menu', 'depth', 'role_id'];

    public function getsons($id)
    {
        return $this->where("parent", $id)->get();
    }
    public function getall($id)
    {
        return $this->where("menu", $id)->orderBy("sort", "asc")->get();
    }

    public static function getNextSortRoot($menu)
    {
        return self::where('menu', $menu)->max('sort') + 1;
    }

    public function parent_menu()
    {
        return $this->belongsTo(Menu::class, 'menu');
    }

    public function child()
    {
        return $this->hasMany(self::class, 'parent')->orderBy('sort', 'ASC');
    }
}
