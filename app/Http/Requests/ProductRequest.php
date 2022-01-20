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
            'price' => 'required | numeric | min:0 | max:50000000',
            'discount' => 'required | numeric | min:1 | max:100',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Tên không được trống!',
            'name.min' => 'Tên phải 10 chữ cái trở lên!',
            'name.max' => 'Tên tối đa 100 chữ cái!',
            'price.required' => 'Giá không được để trống!',
            'price.numeric' => 'Vui lòng nhập số!',
            'price.min' => 'Vui lòng nhập giá lớn hơn 0',
            'price.max' => 'Vui lòng nhập giá bé hơn 50.000.000',
            'discount.required' => 'Vui lòng không để trống!',
            'discount.numeric' => 'Vui lòng nhập số!',
            'discount.min' => 'Vui lòng nhập mã giảm giá lớn hơn 0',
            'discount.max' => 'Vui lòng nhập mã giảm giá bé hơn 100',
        ];
    }
}
