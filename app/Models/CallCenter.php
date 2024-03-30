<?php

namespace App\Models;

use App\Models\InquiryRequest;
use Illuminate\Database\Eloquent\Model;

class CallCenter extends Model
{
    protected $fillable = ['account_id'];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
    
    public function inqueryRequests()
    {
        return $this->hasMany(InquiryRequest::class);
    }
}
