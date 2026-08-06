<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'customer_code' => 'required|string|max:20|unique:customers,customer_code',
            'full_name' => 'required|string|max:255',
            'nic' => 'required|string|max:20|unique:customers,nic',
            'phone' => 'required|string|max:15',
            'email' => 'nullable|email|max:255',
            'address' => 'nullable|string',
        ];
    }
}