<?php

namespace App\Http\Requests;

use App\Company;
use Illuminate\Foundation\Http\FormRequest;

class CompanyCreateRequest extends FormRequest
{
    
    public function authorize()
    {
        return auth()->user()->can('create', new Company);
    }

    
    public function rules()
    {
        return [
            'name'    => 'required|max:60',
            'email'   => 'required|email|max:255',
            'website' => 'nullable|url|max:255',
            'address' => 'nullable|max:255',
        ];
    }
}
