<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = ['name'];

    public function workers()
    {
        return $this->hasMany(Worker::class);
    }
}
