<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InquiryRequest extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'call_center_id'];

    public function callCenter()
    {
        return $this->belongsTo(CallCenter::class);
    }
}
