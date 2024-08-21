<?php

namespace App\Http\Requests\API\Designer;

use App\Http\Requests\ApiRequest;

class DesignCreateRequest  extends ApiRequest
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
            'short_name' => 'nullable',
            'name' => 'required',
            'slug' => 'required',
            'short_description' => 'nullable',
            'description' => 'nullable',
            'image' => 'nullable',
            'image_library' => 'nullable',
            'status' =>  'required',
            'meta_data' => 'nullable',
        ];
    }
}
