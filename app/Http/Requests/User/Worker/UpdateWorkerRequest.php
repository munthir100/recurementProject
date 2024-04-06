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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'job' => ['required', 'string', 'max:255'],
            'month_salary' => ['required', 'numeric'],
            'contract_period' => ['required', 'string', 'max:255'],
            'languages' => ['required', 'array'],
            'languages.*.name' => ['required', 'string', 'max:255'],
            'languages.*.percentage' => ['required', 'numeric', 'between:0,100'],
            'practical_experience' => ['required', 'array'],
            'practical_experience.*.name' => ['required', 'string', 'max:255'],
            'languages.*.value' => ['required', 'string', 'max:255'],
            'nationality' => ['required', 'string', 'max:255'],
            'age' => ['required', 'numeric', 'min:18'],
            'type' => ['required', 'string', 'max:255'],
            'tall' => ['required', 'numeric'],
            'religion' => ['required', 'string', 'max:255'],
            'place_of_birth' => ['required', 'string', 'max:255'],
            'children' => ['required', 'numeric'],
            'education' => ['required', 'string', 'max:255'],
            'birth_date' => ['required', 'date'],
            'weight' => ['required', 'numeric'],
            'has_practical_experience' => ['nullable', 'boolean'],
            'work_experience_country' => ['required', 'string', 'max:255'],
            'years_of_experience' => ['required', 'numeric'],
            // 'main_image' => ['required', 'image', 'max:2048'],
            // 'related_images' => ['required', 'array'],
            'office_id' => ['required', 'exists:offices,id'],
            'status_id' => ['required', Rule::in(Status::ACTIVE, Status::NOT_ACTIVE)],
        ];
    }
}
