<?php

namespace App\Models\Access;

use Spatie\Permission\Models\Permission as SpatiePermission;

class Permission extends SpatiePermission
{
  public $guard_name = 'web';
}
