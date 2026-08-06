<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMechanicRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'employee_no'   => 'required|string|max:20',
            'full_name'     => 'required|string|max:255',
            'phone'         => 'required|string|max:15',
            'email'         => 'nullable|email',
            'specialization'=> 'required|string|max:255',
            'salary'        => 'required|numeric|min:0',
        ];
    }
}