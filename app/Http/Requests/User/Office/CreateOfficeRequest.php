<?php

namespace App\Http\Requests\User\Office;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\AccountType;

class CreateOfficeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:accounts,email'],
            'phone' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
            'location' => ['required', 'string', 'max:255'],
        ];
    }

    public function withValidator($validator)
    {
        // Add additional validation logic or modify validator instance
        $validator->after(function ($validator) {
            $this->addUserType($validator);
        });
    }

    protected function addUserType($validator)
    {
        $this->merge(['account_type_id' => AccountType::OFFICE]);
    }
}
