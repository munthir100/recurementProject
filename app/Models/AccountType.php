<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountType extends Model
{
    protected $fillable = ['name'];

    const OFFICE = 1;
    const CALL_CENTER = 2;

}
