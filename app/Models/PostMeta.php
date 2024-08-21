<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class PostMeta extends Model
{
    protected $fillable = [
        'post_id',
        'meta_key',
        'meta_value',
    ];

    public $timestamps = false;

    public function scopeMetaKey(Builder $query, $value)
    {
        $query->where('meta_key', $value);
    }

    public function findByMetaKey($metaKey): string
    {
        $find = $this->where('meta_key', $metaKey)->first();
        if ($find){
            return $find->meta_value;
        }

        return '';
    }
}
