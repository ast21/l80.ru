<?php

namespace App\Containers\AdminUser\Models;

use AdminKit\Core\Containers\UserSection\User\Models\AdminUser as Authenticatable;
use Filament\Models\Contracts\FilamentUser;

class AdminUser extends Authenticatable implements FilamentUser
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'permissions',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'permissions',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'permissions' => 'array',
        'email_verified_at' => 'datetime',
    ];

    public function canAccessFilament(): bool
    {
        return true;
    }
}
