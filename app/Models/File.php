<?php

namespace App\Models;

use App\Utils\Util;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'size',
        'mine',
        'ext',
        'path'
    ];

    public function getFileLinkAttribute()
    {
        return Util::getImageFullPath($this->path);
    }

    public function getSizeFormatAttribute()
    {
        return Util::formatSize($this->size);
    }
}
