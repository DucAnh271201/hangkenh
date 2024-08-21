<?php

namespace App\Http\Requests\API;

use App\Http\Requests\ApiRequest;

class UserAdminCreateRequest extends ApiRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'role_id' => 'required',
            'password' => 'required|min:6',
        ];
    }
}
