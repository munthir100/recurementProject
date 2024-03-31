<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Account extends Authenticatable
{
    protected $fillable = ['name', 'email', 'phone', 'password', 'account_type_id'];

    protected $casts = [
        'password' => 'hashed',
    ];

    public function office()
    {
        return $this->hasOne(Office::class);
    }

    public function callCenter()
    {
        return $this->hasOne(CallCenter::class);
    }
}
