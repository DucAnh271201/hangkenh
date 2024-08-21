<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\ApiRequest;

class CategoryCreateRequest extends ApiRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required',
            'slug' => 'nullable',
            'type' => 'required',
            'parent_id'=> 'nullable',
            'description' => 'nullable'
        ];
    }
}
