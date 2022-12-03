<?php

namespace App\Http\Requests\Food;

use Illuminate\Foundation\Http\FormRequest;

class StoreFoodRequest extends FormRequest
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
          'name'           => 'required',
          'sales_price'    => 'required|numeric',
          'description'    => 'nullable|string',
          'vat_rate'       => 'required|numeric',
          'status'         => 'sometimes|integer|min:0|digits_between: 0,1'
        ];
    }

    public function attributes()
    {
      return [
        'name'         => 'Ürün Adı',
        'sales_price'  => 'Satış Fiyatı',
        'description'  => 'Ürün Açıklaması',
        'vat_rate'     => 'KDV Değeri',
      ];
    }
}
