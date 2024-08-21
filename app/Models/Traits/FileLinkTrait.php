<?php

namespace App\Models\Traits;

use App\Models\FileLink;

trait FileLinkTrait
{

    public function fromable()
    {
        return $this->morphTo(FileLink::class);
    }
}
