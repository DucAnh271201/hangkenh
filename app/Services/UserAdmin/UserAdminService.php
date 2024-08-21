<?php

namespace App\Services\UserAdmin;

use App\Exceptions\ServiceException;
use App\Http\Requests\Admin\LoginRequest;
use App\Http\Requests\Admin\RegisterRequest;
use App\Http\Requests\API\UserAdminCreateRequest;
use App\Http\Requests\API\UserAdminUpdateRequest;
use App\Repositories\UserAdmin\UserAdminRepositoryInterface;
use App\Utils\HttpResponseErrorCode;
use App\Utils\Util;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserAdminService
{
    public function __construct(
        private readonly UserAdminRepositoryInterface $repository
    )
    {
    }

    public function find($id)
    {
        return $this->repository->find($id);
    }

    public function getDatable(Request $request)
    {
        $type = $request->get('type');
        $search = $request->get('s');
        return $this->repository->getDataPaginate($type, $search);
    }


    public function login(LoginRequest $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');
        $userAdmin = $this->repository->findByEmail($email);

        if (!$userAdmin) {
            return Util::responseFail('Tài khoản không tồn tại');
        }
        if (!$userAdmin->status) {
            return Util::responseFail('Tài khoản ngừng hoạt động');
        }

        if (!Hash::check($password, $userAdmin->password)) {
            return Util::responseFail('Mật khẩu không trùng khớp');
        }

        \Auth::guard('admin')->login($userAdmin);

        return Util::responseSuccess();
    }

    public function create(UserAdminCreateRequest $request)
    {
        $email = $request->get('email');

        $userAdmin = $this->repository->findByEmail($email);

        if ($userAdmin) {
            throw new ServiceException(HttpResponseErrorCode::CODE_1011, 'Tài khoản đã tồn tại');
        }


        return $this->repository->create([
            'name' => $request->input('name'),
            'role_id' => $request->input('role_id'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

    }

    public function update(UserAdminUpdateRequest $request)
    {
        $id = $request->input('id');
        $password = $request->input('password');

        $userAdmin = $this->repository->find($id);

        if (!$userAdmin) {
            throw new ServiceException(HttpResponseErrorCode::CODE_1010, 'Tài khoản không tồn tại');

        }
        $data = [
            'name' => $request->get('name'),
            'username' => $request->get('username'),
            'email' => $request->get('email'),
            'role_id' => $request->get('role_id'),
        ];
        if (!empty($password)) {
            $data['password'] = Hash::make($request->get('password'));
        }


        return $this->repository->update($id, $data);

    }

    public function destroy($id)
    {
        $userAdmin = $this->repository->find($id);
        if (!$userAdmin) {
            throw new ServiceException(HttpResponseErrorCode::CODE_1010);
        }

        $userAdmin->delete();
        return true;
    }
}
