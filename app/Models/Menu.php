<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public static function byName($name)
    {
        return self::where('name', '=', $name)->first();
    }
    public static function bySlug($name)
    {
        return self::where('slug', '=', $name)->first();
    }


    public function items()
    {
        return $this->hasMany(MenuItem::class, 'menu')->with('child')->where('parent', 0)->orderBy('sort', 'ASC');
    }
}
