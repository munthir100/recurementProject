<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = ['name'];

    const ACTIVE = 1;
    const NOT_ACTIVE = 2;
    
    public function workers()
    {
        return $this->hasMany(Worker::class);
    }
}
