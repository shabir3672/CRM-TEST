<?php

namespace App\Http\Requests;

use App\Employee;
use Illuminate\Foundation\Http\FormRequest;

class EmployeeCreateRequest extends FormRequest
{
    
    public function authorize()
    {
        return auth()->user()->can('create', new Employee);
    }

   
    public function rules()
    {
        return [
            'first_name' => 'required|max:60',
            'last_name'  => 'required|max:60',
            'company_id' => 'required|numeric|exists:companies,id',
            'email'      => 'nullable|email|max:255',
            'phone'      => 'nullable|max:255',
        ];
    }
}
