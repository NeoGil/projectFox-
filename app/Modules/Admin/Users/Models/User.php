<?php

namespace App\Modules\Admin\Users\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as AuthUser;
use Laravel\Passport\HasApiTokens;

class User extends AuthUser
{
    use HasFactory, HasApiTokens;

    protected $fillable = [
        'firstname',
        'email'

    ];

    protected $hidden = [
        'password'
    ];


    public function getFullnameAttribute() {
        return $this->name;
    }
}
