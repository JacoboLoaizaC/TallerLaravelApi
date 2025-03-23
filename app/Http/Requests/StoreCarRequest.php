<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
{
    public function rules()
    {
        return [
            'car_make' => 'required|string|max:255',
            'car_model' => 'required|string|max:255',
            'car_year' => 'required|integer|min:1900|max:' . (date('Y') + 1),
            'car_price' => 'required|numeric|min:0',
            'car_status' => 'required|boolean',
        ];
    }
}
