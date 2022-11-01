<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
  protected $guarded = ['id'];

  public $timestamps = false;

  public function country()
  {
    return $this->belongsTo(Country::class);
  }
}
