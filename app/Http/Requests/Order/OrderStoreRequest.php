<?php

namespace App\Http\Requests\Order;

use Illuminate\Foundation\Http\FormRequest;

class OrderStoreRequest extends FormRequest
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
            'company_id'      => 'required|integer|exists:companies,id',
            'table_id'        => 'required|integer|exists:tables,id',
            'user_id'         => 'required|integer|exists:users,id',
            'note'            => 'nullable',
            'total_price'     => 'required|regex:/^\d{1,13}(\.\d{1,4})?$/',
            'foods'           => 'required|array|min:1',
            'foods.*.food_id' => 'required|integer|exists:foods,id',
            'foods.*.amount'  => 'required|integer|min:1',
        ];
    }
}
