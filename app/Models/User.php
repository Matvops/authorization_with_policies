<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as AuthUser;

class User extends AuthUser
{
    public function posts(): HasMany
    {
       return $this->hasMany(Post::class, 'user_id');
    }

    public function permissions(): HasMany
    {
        return $this->hasMany(UserPermission::class, 'user_id');
    }
}
