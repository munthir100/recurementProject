<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'password', 'account_type_id'];

    public function office()
    {
        return $this->hasOne(Office::class);
    }

    public function callCenter()
    {
        return $this->hasOne(CallCenter::class);
    }
}
