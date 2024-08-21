<?php

namespace App\Repositories\UserAdmin;

use App\Models\UserAdmin;
use App\Repositories\RepositoryInterface;

interface UserAdminRepositoryInterface extends RepositoryInterface
{
    public function getDataPaginate($search = '',  $perPage = 10);
    public function findByEmail($email);
}
