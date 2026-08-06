<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVehicleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'customer_id' => 'required|exists:customers,id',
            'reg_no'      => 'required|string|max:50|unique:vehicles,reg_no',
            'make'        => 'required|string|max:100',
            'model'       => 'required|string|max:100',
            'year'        => 'required|integer|min:1900|max:' . (date('Y') + 1),
            'vin'         => 'nullable|string|max:100|unique:vehicles,vin',
            'mileage'     => 'required|integer|min:0',
        ];
    }
}