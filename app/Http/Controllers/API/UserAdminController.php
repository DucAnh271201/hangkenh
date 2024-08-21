<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\UserAdminCreateRequest;
use App\Http\Requests\API\UserAdminUpdateRequest;
use App\Services\UserAdmin\UserAdminService;
use Illuminate\Http\Request;

class UserAdminController extends Controller
{    public function __construct(
    private readonly UserAdminService $service
)
{
}

    public function getDatable(Request $request)
    {
        $response = $this->service->getDatable($request);

        return view("admin.pages.user_admins.table", [
            'users' => $response
        ]);
    }


    public function store(UserAdminCreateRequest $request)
    {

        $created = $this->service->create($request);
        if ($created) {

            return response_success([
                'redirect' => route('admin.manager-user-admin')
            ]);
        }
        return response_error();
    }

    public function update(UserAdminUpdateRequest $request)
    {

        $updated = $this->service->update($request);
        if ($updated) {
            return response_success([
                'redirect' => route('admin.manager-user-admin')
            ]);
        }
        return response_error();
    }

    public function destroy($id)
    {
        $this->service->destroy($id);
        return response_success();
    }
}
