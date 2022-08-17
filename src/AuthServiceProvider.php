<?php

namespace Sorethea\FilakubeAdmin;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Sorethea\FilakubeAdmin\Policies\PermissionPolicy;
use Sorethea\FilakubeAdmin\Policies\RolePolicy;
use Sorethea\FilakubeAdmin\Policies\UserPolicy;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies =[
        User::class => UserPolicy::class,
        Role::class => RolePolicy::class,
        Permission::class => PermissionPolicy::class,
    ];
    public function register()
    {
        $this->registerPolicies();
    }

    public function boot()
    {
    }
}
