<?php

namespace App\Http\Requests\API;

use App\Http\Requests\ApiRequest;

class AttrbuteDatableRequest extends ApiRequest
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
            'page' => 'nullable',
            'parent_id' => 'nullable',
            's' => 'nullable'
        ];
    }
}
