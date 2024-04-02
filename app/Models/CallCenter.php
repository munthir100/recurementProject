<?php

namespace App\Models;

use App\Models\InquiryRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CallCenter extends Model
{
    use HasFactory;
    
    protected $fillable = ['account_id'];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function inquiryRequests()
    {
        return $this->hasMany(InquiryRequest::class);
    }
}
