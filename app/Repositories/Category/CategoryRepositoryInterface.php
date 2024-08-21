<?php

namespace App\Repositories\Category;

use App\Repositories\RepositoryInterface;

interface CategoryRepositoryInterface extends RepositoryInterface
{

    public function getDataPaginate($type,$search = '',$parentId = null, $perPage = 10);

    public function getSameParentId($parentId);

}
