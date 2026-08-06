<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVehicleRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'customer_id'     => 'required|exists:customers,id',
            'registration_no' => 'required|string|max:20|unique:vehicles,registration_no',
            'brand'           => 'required|string|max:100',
            'model'           => 'required|string|max:100',
            'year'            => 'required|digits:4|integer|min:1900|max:' . date('Y'),
            'color'           => 'nullable|string|max:50',
            'engine_no'       => 'required|string|max:100|unique:vehicles,engine_no',
            'chassis_no'      => 'required|string|max:100|unique:vehicles,chassis_no',
            'mileage'         => 'required|integer|min:0',
        ];
    }
}