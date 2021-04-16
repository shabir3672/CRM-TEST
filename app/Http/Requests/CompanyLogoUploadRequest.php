<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyLogoUploadRequest extends FormRequest
{
    
    public function authorize()
    {
        return auth()->user()->can('update', $this->route('company'));
    }

    
    public function rules()
    {
        return [
            'logo' => 'required|image|dimensions:min_width=100,min_height=100',
        ];
    }
}
