<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarRequest extends FormRequest
{
    public function rules()
    {
        return [
            'car_make' => 'sometimes|string|max:255',
            'car_model' => 'sometimes|string|max:255',
            'car_year' => 'sometimes|integer|min:1900|max:' . (date('Y') + 1),
            'car_price' => 'sometimes|numeric|min:0',
            'car_status' => 'sometimes|boolean',
        ];
    }
}
