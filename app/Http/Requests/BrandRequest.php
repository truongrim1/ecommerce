<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required | min:5 | max:100',
            'desc' => 'required | min:5 | max:100'
        ];
    }

    public function messeges(){
        return[
            'name.required' => 'Ten khong duoc trong',
            'name.min' => 'ten toi thieu 5 chu cai',
            'name.max' => 'ten toi da 100 chu cai',
        ];
    }
}

