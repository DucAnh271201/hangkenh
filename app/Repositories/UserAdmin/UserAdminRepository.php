<?php

namespace App\Repositories\UserAdmin;

use App\Models\UserAdmin;
use App\Repositories\BaseRepository;

class UserAdminRepository extends BaseRepository implements UserAdminRepositoryInterface
{
    public function getModel()
    {
        return UserAdmin::class;
    }

    public function getDataPaginate($search = '',  $perPage = 10)
    {
        $userAdmins = $this->model::query();

        if ($search) {
            $userAdmins = $userAdmins->where('name', 'like', "%" . \Str::slug($search) . "%");
        }
        $userAdmins = $userAdmins->with('role');
        $userAdmins = $userAdmins->orderBy('id', 'DESC');

        return $userAdmins->paginate($perPage);
    }
    public function findByEmail($email)
    {
        return $this->model::query()->where('email', $email)->first();
    }
}
