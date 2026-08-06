<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateServiceRequestRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $serviceId = $this->route('id');

        return [
            'service_code'       => 'sometimes|required|string|max:50|unique:services,service_code,' . $serviceId,
            'service_name'       => 'sometimes|required|string|max:255',
            'description'        => 'nullable|string',
            'price'              => 'sometimes|required|numeric|min:0',
            'estimated_duration' => 'nullable|integer|min:0',
        ];
    }
}