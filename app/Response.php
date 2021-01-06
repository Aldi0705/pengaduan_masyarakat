<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    protected $fillable = [
        'name', 'email', 'password', 'role', 'telp', 'address'
    ];
    
    protected $casts = [
        'email_verified_at' => 'datetime',
        'name' => 'string',
        'email' => 'string',
        'password' => 'string',
        'role' => 'string',
        'telp' => 'string',
        'address' => 'string'
    ];
}
