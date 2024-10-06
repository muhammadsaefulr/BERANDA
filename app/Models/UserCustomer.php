<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class UserCustomer extends Authenticatable
{
    protected $fillable = [
        'username', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
