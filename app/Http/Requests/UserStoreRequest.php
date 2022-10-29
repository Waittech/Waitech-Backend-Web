<?php

namespace App\Http\Requests;

use App\Http\Requests\FormRequest;

class UserStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {

      if ($this->input('is_company')) {
        return [
          'name' => ['required', 'min:3'],
          'company_name' => ['required', 'min:2'],
          'email' => ['required', 'email', 'unique:users'],
          'password' => ['required', 'min:6'],
        ];
      }

        return [
          'name' => ['required', 'min:3'],
          'email' => ['required', 'email', 'unique:users'],
          'password' => ['required', 'min:6'],
        ];
    }
}
