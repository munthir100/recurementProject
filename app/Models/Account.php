<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Account extends Authenticatable
{
    use HasFactory;
    
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
