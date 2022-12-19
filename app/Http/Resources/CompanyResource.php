<?php

namespace App\Http\Resources;

use App\Models\Location\City;
use App\Models\Location\Country;
use App\Models\Location\District;
use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
      return [
        'id'           => $this->id,
        'description'  => $this->description,
        'image'        => $this->cover_image,
        'country'      => ($country = Country::find($this->country_id)) != null ? $country->name : null,
        'city'         => ($city = City::find($this->city_id)) != null ? $city->name : null,
        'district'     => ($district = District::find($this->district_id)) != null ? $district->name : null,
        'neighborhood' => $this->neighborhood_name,
        'street'       => $this->street_name,
        'menu'         => $this->when($this->menus, MenuResource::collection($this->menu()->active())->groupBy('category.name')),
      ];
    }
}
