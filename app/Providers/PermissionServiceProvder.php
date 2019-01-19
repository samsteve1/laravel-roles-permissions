<?php

namespace App\Providers;

use Gate;
use App\Models\Permission;
use Illuminate\Support\ServiceProvider;

class PermissionServiceProvder extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
      Permission::get()->map(function ($permission) {
        Gate::define($permission->name, function ($user) use ($permission) {
          return $user->hasPermission($permission);
        });
      });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
