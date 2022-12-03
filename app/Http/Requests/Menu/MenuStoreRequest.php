<?php

namespace App\Http\Requests\Menu;

use Illuminate\Foundation\Http\FormRequest;

class MenuStoreRequest extends FormRequest
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
          'category_id'  => 'required|exists:categories,id',
          'food_id'     => 'required|exists:foods,id',
        ];
    }

    public function attributes()
    {
      return [
        'category_id' => 'Kategori Alanı',
        'food_id'     => 'Ürün Alanı'
      ];
    }
}
