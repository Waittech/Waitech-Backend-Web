<?php

namespace App\Http\Controllers\Backend\Company;

use App\Http\Controllers\Controller;
use App\Http\Requests\Company\UpdateCompanyRequest;
use App\Models\Access\User;
use App\Models\Company\Company;
use App\Models\Location\City;
use App\Models\Location\Country;
use App\Models\Location\District;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class CompanyController extends Controller
{
    public function index(Request $request)
    {
      $company = Company::findOrFail(session()->get('company_id'));
      $countries = Country::all();
      $cities = City::all();
      $districts = District::all();
      return view('app.backend.company.index', compact('company', 'countries', 'cities', 'districts'));
    }

    public function update(UpdateCompanyRequest $request)
    {
      $data = $request->validated();
      $company_id = session()->get('company_id');
      $company = Company::find($company_id);

      if (isset($data['cover_image'])) {
        $image_name = 'cover_image.png';
        $request->cover_image->storeAs("public/company/$company_id", $image_name);
        $data = Arr::collapse([$data, ['cover_image' => $company->storage_url . '/' . $image_name]]);
      }

      $company = $company->update($data);

      return back()
        ->with('success', 'Firma bilgileri başarıyla güncellendi.');
    }
}
