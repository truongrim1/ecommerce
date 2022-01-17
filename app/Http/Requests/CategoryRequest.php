<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => 'required|min:10|max:200',
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Name Cannot null',
            'name.min' => 'Name min 10 character',
            'name.max' => 'Name max 200 character',
        ];
    }
}
