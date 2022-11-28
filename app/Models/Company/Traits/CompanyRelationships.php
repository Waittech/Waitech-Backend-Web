<?php

namespace App\Models\Company\Traits;

use App\Models\Access\User;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait CompanyRelationships
{
  public function users(): BelongsToMany
  {
    return $this->belongsToMany(
      User::class,
      'company_has_users'
    );
  }
}
