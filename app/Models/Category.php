<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'short_title',
        'title',
        'slug',
        'type',
        'parent_id',
        'dept',
        'description',
    ];
    protected $casts = [
        'created_at' => 'custom_datetime:H:i d/m/Y'
    ];

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
    // Tạo mối quan hệ đến các phần tử con
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function allChildren()
    {
        return $this->children()->with('allChildren');
    }


    public function getBreadcrumbs($isShowCurrent = false)
    {
        $breadcrumbs = collect([]);
        $category = $this; // Bắt đầu từ danh mục hiện tại
        while ($category) {
            if ($isShowCurrent){
                $breadcrumbs->prepend($category);
            }
            $category = $category->parent; // Di chuyển ngược lên danh mục cha
        }

        return $breadcrumbs;
    }

    public function getTitleDeptAttribute()
    {
        return str_pad($this->title,strlen($this->title) +  $this->dept, "-", STR_PAD_LEFT);
    }

}
