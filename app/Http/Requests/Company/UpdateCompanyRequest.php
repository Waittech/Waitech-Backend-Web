<?php

namespace App\Http\Requests\Company;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequest extends FormRequest
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
            'phone_number'      => 'required|numeric|digits:10',
            'description'       => 'nullable|string',
            'cover_image'       => 'mimes:jpeg,jpg,png|sometimes|max:10000',
            'country_id'        => 'required|exists:countries,id',
            'city_id'           => 'required|exists:cities,id',
            'district_id'       => 'required|exists:districts,id',
            'neighborhood_name' => 'required|min:2|max:255',
            'street_name'       => 'required|min:2|max:255',
            'status'            => 'sometimes|integer|min:0|digits_between: 0,1',
        ];
    }

    public function attributes()
    {
      return [
        'name'              => 'Firma Adı',
        'description'       => 'Firma Açıklaması',
        'cover_image'       => 'Firma Resmi',
        'country_id'        => 'Ülke',
        'city_id'           => 'Şehir',
        'district_id'       => 'İlçe',
        'neighborhood_name' => 'Mahalle Bilgisi',
        'street_name'       => 'Sokak Bilgisi',
      ];
    }

}
