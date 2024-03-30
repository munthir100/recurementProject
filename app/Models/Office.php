<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $fillable = ['location', 'account_id'];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function workers()
    {
        return $this->hasMany(Worker::class);
    }
}
