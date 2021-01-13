<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use Notifiable;

    protected $guard = 'admin';

    protected $fillable = [
        'name', 'email', 'username', 'password','email_verfied_at'
    ];

    protected $hidden = ['password'];
}
