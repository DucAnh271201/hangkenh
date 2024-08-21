<?php

namespace App\Repositories\Attribute;

use App\Repositories\RepositoryInterface;

interface AttributeRepositoryInterface extends RepositoryInterface
{

    public function getDataPaginate($search = '',$parentId = null, $perPage = 10);

    public function getSameParentId($parentId);

}
