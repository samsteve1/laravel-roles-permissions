<?php

namespace App\Models\Traits;
use App\Models\{Role, Permission};
trait HasPermissionTrait
{
  public function roles()
  {
    return $this->belongsTo(Role::class, 'users_roles');
  }
  public function permissions()
  {
    return $this->belongsTo(Permission::class, 'users_permissions');
  }
}
