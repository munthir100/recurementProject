<?php

namespace Database\Factories;

use App\Models\CallCenter;
use Illuminate\Database\Eloquent\Factories\Factory;

class CallCenterFactory extends Factory
{
    protected $model = CallCenter::class;

    public function definition()
    {
        return [
            'account_id' => null,
        ];
    }
}
