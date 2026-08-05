<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomerRequest extends FormRequest
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
        $customerId = $this->route('customer');

        return [
            'customer_code' => 'required|string|max:20|unique:customers,customer_code,' . $customerId,
            'full_name'     => 'required|string|max:255',
            'nic'           => 'required|string|max:20|unique:customers,nic,' . $customerId,
            'phone'         => 'required|string|max:15',
            'email'         => 'nullable|email|max:255',
            'address'       => 'nullable|string',
        ];
    }
}