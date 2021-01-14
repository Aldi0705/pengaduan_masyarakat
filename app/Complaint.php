<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    protected $fillable = [
        'user_id', 'nik', 'isi_laporan', 'foto', 'status'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'user_id' => 'integer',
        'nik' => 'string',
        'isi_laporan' => 'string',
        'foto' => 'string',
        'status' => 'string'
    ];

    public function user ()
    {
        return $this->belongsto('App\User', 'user_id');
    }
}
