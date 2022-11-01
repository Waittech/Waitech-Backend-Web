<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $guarded = ['id'];

    public $timestamps = false;

    public function city()
    {
      return $this->belongsTo(City::class);
    }
}
