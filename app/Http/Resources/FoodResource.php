<?php

namespace App\Http\Resources;

use App\Models\Location\City;
use App\Models\Location\Country;
use App\Models\Location\District;
use Illuminate\Http\Resources\Json\JsonResource;

class FoodResource extends JsonResource
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
        'image'        => $this->image_url,
        'price'        => $this->sales_price,
        'name'         => $this->name,
      ];
    }
}
