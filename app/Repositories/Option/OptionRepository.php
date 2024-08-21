<?php

namespace App\Repositories\Option;

use App\Models\Option;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Cache;

class OptionRepository extends BaseRepository implements OptionRepositoryInterface
{
    public function getModel()
    {
        return Option::class;
    }

}
