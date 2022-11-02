<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Country extends Model
{
  use HasTranslations;

  protected $guarded = ['id'];

  public $translatable = ['name'];

  public $timestamps = false;
}
