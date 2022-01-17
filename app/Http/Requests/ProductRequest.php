<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required | min:10 | max:100',
            'price' => 'required | alpha_num | between:0,50000000',
            'discount' => 'required | alpha_num | between:1,100',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Tên không được trống!',
            'name.min' => 'Tên phải 10 chữ cái trở lên!',
            'name.max' => 'Tên tối đa 100 chữ cái!',
            'price.required' => 'Giá không được để trống!',
            'price.alpha_num' => 'Vui lòng nhập số!',
            'price.between' => 'Giá nằm trong khoảng 0 đến 50.000.000',
            'discount.required' => 'Vui lòng không để trống!',
            'discount.alpha_num' => 'Vui lòng nhập số!',
            'discount.between' => 'Giá nằm trong khoảng 1 đến 100',
        ];
    }
}
