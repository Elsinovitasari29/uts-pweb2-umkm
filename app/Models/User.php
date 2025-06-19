<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users'; // atau 'users' jika nama tabel kamu plural

    protected $fillable = [
        'name',
        'email',
    ];
}