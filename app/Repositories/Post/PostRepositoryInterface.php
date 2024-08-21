<?php

namespace App\Repositories\Post;

use App\Repositories\RepositoryInterface;

interface PostRepositoryInterface extends RepositoryInterface
{
    public function getDataPaginate($type, $search, $perPage = 10, $extraData = []);

}
