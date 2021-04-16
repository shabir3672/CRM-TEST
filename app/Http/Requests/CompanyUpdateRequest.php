<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyUpdateRequest extends FormRequest
{
    
    public function authorize()
    {
        return auth()->user()->can('update', $this->route('company'));
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
