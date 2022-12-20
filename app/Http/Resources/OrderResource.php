<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
          'company'      => new CompanyResource($this->company),
          'table_name'   => $this->table->name,
          'note'         => $this->note,
          'status'       => $this->status_text,
          'foods'        => FoodResource::collection($this->foods),
          'created_date' => $this->created_date,
          'created_time' => $this->created_time,
        ];
    }
}
