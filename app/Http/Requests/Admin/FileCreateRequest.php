<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class FileCreateRequest extends FormRequest
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
            'file' => [
                'required',
                'image',
                'extensions:jpg,png,jpeg,svg,webp,gif',
                'mimes:jpg,png,jpeg,svg,webp,gif',
                'mimetypes:image/webp,image/gif,image/jpg,image/png,image/jpeg,image/svg+xml',
                'max:5120',
                'min:10'
            ],
        ];
    }
}
