<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'fullName'=> 'required | min:8 | max:50',
            'email'=>'required',
            'pass'=>'required',
            'address'=>'required',
            'phone'=>'required',
            
        ];
    }
    public function messages(){
        return [
            'fullName.required'  => 'Tên bắt buộc phải có',
            'fullName.min'  => 'Tên bắt buộc phải lớn hơn 8 ký tự',
            'fullName.max'  => 'Tên bắt buộc phải lớn hơn 50 ký tự',
            'email.required'=>'Email bắt buộc phải có',
            'pass.required'=>'Pass bắt buộc phải có',
            'address.required'=>'Address bắt buộc phải có',
            'phone.required'=>'Phone bắt buộc phải có',
        ];

    }
}
