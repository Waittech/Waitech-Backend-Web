<?php

namespace App\Models\Company\Traits;

use App\Models\Access\User;
use App\Models\Food\Menu;
use App\Models\Order\Order;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait CompanyRelationships
{
  public function users(): BelongsToMany
  {
    return $this->belongsToMany(
      User::class,
      'company_has_users'
    );
  }

  public function menu(): HasMany
  {
    return $this->hasMany(Menu::class);
  }

  public function orders(): HasMany
  {
    return $this->hasMany(Order::class);
  }

}
