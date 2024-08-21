<?php

namespace App\Http\Requests\API;

use App\Http\Requests\ApiRequest;

class PostCreateRequest extends ApiRequest
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
            'title' => 'required',
            'type' => 'required',
            'status' => 'required',
            'category_ids' => 'nullable',
            'tags' => 'nullable',
            'regular_price' => 'nullable|numeric|min:0',
            'sale_price' => 'nullable|numeric|min:0',
            'stock_quantity' => 'nullable|numeric|min:0',
            'product_status' => 'nullable|in:available,out_of_stock,waiting',
            'attribute' => 'nullable|array',
            'meta_data' => 'nullable',
            'variant' => 'nullable|array',
            'in_order' => 'nullable',
        ];
    }

    public function messages()
    {
        return [
            'title' => [
                'required' => 'Tiêu đề không được để trống',
            ]
        ];
    }
}
