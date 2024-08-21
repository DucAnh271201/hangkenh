<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use App\Models\UserAdmin;
use App\Models\UserRole;
use App\Services\UserAdmin\UserAdminService;
use Illuminate\Http\Request;

class UserAdminController extends Controller
{

    public function __construct(private readonly UserAdminService $userAdminService)
    {
    }

    public function index(Request $request)
    {
        return view("admin.pages.user_admins.index");
    }

    public function create()
    {
        return view('admin.pages.user_admins.create', [
            'statuses' => UserAdmin::STATUSES,
            'roles' => UserRole::query()->get()
        ]);
    }

    public function edit($id)
    {
        $user = $this->userAdminService->find($id);
        if (!$user) {
            abort(404);
        }

        return view('admin.pages.user_admins.edit', [
            'user' => $user,
            'statuses' => UserAdmin::STATUSES,
            'roles' => UserRole::query()->get()
        ]);
    }

    public function getLogin()
    {
       return view('admin.pages.login.index');
    }

    public function postLogin(LoginRequest $request)
    {
       $login = $this->userAdminService->login($request);
       if (!$login->status){
           return redirect()->back()->with("error", $login->message);
       }

       return redirect(route('admin.dashboard'));
    }
}
