<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Option extends Model
{
    public const KEY_OPTION_CACHE = 'options';
    protected $fillable = [
        'option_name',
        'option_value'
    ];

    public static function booted()
    {
        static::created(function (Option $option) {
            $data = Option::all();
            Cache::forever(self::KEY_OPTION_CACHE, $data);
        });
        static::updated(function (Option $option) {
            $data = Option::all();
            Cache::forever(self::KEY_OPTION_CACHE, $data);
        });
    }
}
