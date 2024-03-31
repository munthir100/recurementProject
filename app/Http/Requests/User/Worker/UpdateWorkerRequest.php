<?php

namespace App\Http\Requests\User\Worker;

use App\Models\Status;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateWorkerRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'first_name' => ['string', 'max:255'],
            'last_name' => ['string', 'max:255'],
            'job' => ['string', 'max:255'],
            'month_salary' => ['numeric'],
            'contract_period' => ['string', 'max:255'],
            'languages' => ['array'],
            'languages.*.name' => ['string', 'max:255'],
            'languages.*.percentage' => ['numeric', 'between:0,100'],
            'nationality' => ['string', 'max:255'],
            'age' => ['numeric', 'min:18'],
            'type' => ['string', 'max:255'],
            'tall' => ['numeric'],
            'religion' => ['string', 'max:255'],
            'place_of_birth' => ['string', 'max:255'],
            'children' => ['numeric'],
            'education' => ['string', 'max:255'],
            'birth_date' => ['date'],
            'weight' => ['numeric'],
            'has_practical_experience' => ['boolean'],
            'practical_experience' => ['json'],
            'passport_number' => ['string', 'max:255'],
            'passport_release_date' => ['date'],
            'passport_end_date' => ['date'],
            'passport_place_of_issue' => ['string', 'max:255'],
            'work_experience_country' => ['string', 'max:255'],
            'years_of_experience' => ['numeric'],
            'main_image' => ['image', 'max:2048'],
            'related_images' => ['array'],
            'cv' => ['file', 'mimes:pdf', 'max:2048'],
            'office_id' => ['exists:offices,id'],
            'status_id' => [Rule::in(Status::ACTIVE, Status::NOT_ACTIVE)],
        ];
    }
}
