<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attribute extends Model
{
    protected $table = 'p_attributes';
    use SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'parent_id',
        'dept',
        'description',
        'feature_image',
        'color',
        'template',
        'in_order'
    ];
    protected $casts = [
        'created_at' => 'custom_datetime:H:i d/m/Y'
    ];

    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    // Tạo mối quan hệ đến các phần tử con
    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }
    public function allChildren()
    {
        return $this->children()->with('allChildren');
    }


    public function getTitleDeptAttribute(): string
    {
        return str_pad($this->title, strlen($this->title) + $this->dept, "-", STR_PAD_LEFT);
    }


    public function getBreadcrumbs()
    {
        $breadcrumbs = collect([]);

        $self = $this; // Bắt đầu từ danh mục hiện tại
        while ($self) {
            $breadcrumbs->prepend($self);
            $self = $self->parent; // Di chuyển ngược lên danh mục cha
        }

        return $breadcrumbs;
    }
}
