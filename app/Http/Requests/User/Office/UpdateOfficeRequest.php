<?php

namespace App\Http\Requests\User\Office;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateOfficeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        $office = $this->route('office');

        return [
            'location' => ['required', 'string', 'max:255'],
            'name' => ['string', 'max:255'],
            'email' => [
                'string',
                'email',
                'max:255',
                Rule::unique('accounts', 'email')->ignore($office->account->id)
            ],
            'phone' => ['string', 'max:255'],
            'password' => ['string', 'min:8'],
        ];
    }
}
