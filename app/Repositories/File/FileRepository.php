<?php

namespace App\Repositories\File;

use App\Models\File;
use App\Repositories\BaseRepository;

class FileRepository extends BaseRepository implements FileRepositoryInterface
{
    public function getModel()
    {
        return File::class;
    }

}
