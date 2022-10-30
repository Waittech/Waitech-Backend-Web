<?php

namespace App\Models\Access;

use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{
  public $guard_name = 'web';
}
