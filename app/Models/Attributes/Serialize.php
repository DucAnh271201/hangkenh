<?php

namespace App\Models\Attributes;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class Serialize implements CastsAttributes
{
    public function get($model, $key, $value, $attributes)
    {
        return unserialize($value);
    }

    public function set($model, $key, $value, $attributes)
    {
        return serialize($value);
    }
}
