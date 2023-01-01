<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MenuResource extends JsonResource
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
          'category'      => $this->category->name,
          'food_id'       => $this->food->id,
          'food'          => $this->food->name,
          'description'   => $this->food->description,
          'image'         => $this->food->image_url,
          'sales_price'   => $this->food->sales_price,
          'vat_rate'      => $this->food->vat_rate,
        ];
    }
}
