<?php

namespace App\Http\Requests;

use App\Enums\ResponseCode;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class FormRequest extends \Illuminate\Foundation\Http\FormRequest
{
  /**
   * Handle a failed validation attempt.
   *
   * @param  \Illuminate\Contracts\Validation\Validator  $validator
   *
   * @return void
   *
   * @throws \Illuminate\Validation\ValidationException
   */
  protected function failedValidation(Validator $validator)
  {
    throw new ValidationException($validator,
      response()->json([
        'success' => false,
        'code'    => ResponseCode::FAIL,
        'errors'  => $validator->errors(),
      ],
        Response::HTTP_UNPROCESSABLE_ENTITY));
  }
}
