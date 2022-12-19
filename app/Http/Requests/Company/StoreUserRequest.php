<?php

namespace App\Http\Requests\Company;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
        return [
            'name'              => 'required|min:2|max:255',
            'email'             => 'required|email|unique:users,email' ,
            'role_id'           => 'required|exists:roles,id',
            'password'          => 'required|min:6',
        ];
    }

    public function attributes()
    {
      return [
        'name'              => 'Çalışan Adı',
        'email'             => 'Çalışan Email',
        'role_id'           => 'Çalışan Yetkisi',
        'password'          => 'Çalışanın Şifresi',
      ];
    }

}
