<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    protected $fillable = ['first_name', 'last_name', 'job', 'month_salary', 'contract_period', 'languages', 'nationality', 'age', 'type', 'tall', 'religion', 'place_of_birth', 'children', 'education', 'birth_date', 'weight', 'has_practical_experience', 'practical_experience', 'passport_number', 'passport_release_date', 'passport_end_date', 'passport_place_of_issue', 'work_experience_country', 'years_of_experience', 'main_image', 'related_images', 'cv', 'office_id', 'status_id'];

    public function office()
    {
        return $this->belongsTo(Office::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
