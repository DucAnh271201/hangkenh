<?php
/**
 * Created by PhpStorm.
 * User: tungnt
 * Date: 10/18/19
 * Time: 10:40
 */

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

/**
 * Class Request
 * @package App\Http\Requests
 */
class ApiRequest extends FormRequest
{

    /**
     * @param Validator $validator
     */
    protected function failedValidation(Validator $validator)
    {
        $errors = (new \Illuminate\Validation\ValidationException($validator))->errors();

        throw new HttpResponseException(
            response()->json([
                'message' => 'Tham số không hợp lệ',
                'errors' => $errors
            ], 400)
        );
    }


}
