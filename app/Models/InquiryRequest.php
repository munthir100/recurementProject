<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InquiryRequest extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'email', 'phone', 'worker_id', 'call_center_id'];

    public function callCenter()
    {
        return $this->belongsTo(CallCenter::class);
    }

    public function worker()
    {
        return $this->belongsTo(Worker::class);
    }
}
