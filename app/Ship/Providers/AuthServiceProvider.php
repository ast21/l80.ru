<?php

namespace App\Ship\Providers;

use App\Ship\Abstracts\Providers\AbstractAuthServiceProvider;
use App\Ship\Policies\RolePolicy;
use Spatie\Permission\Models\Role;

class AuthServiceProvider extends AbstractAuthServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Role::class => RolePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
