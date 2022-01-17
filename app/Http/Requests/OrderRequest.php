<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'txtname' => 'required|min: 5|max: 25',
            'txtnote' => 'required|max: 255'
        ];
    }

    public function message() {
        return [
            'txtname.required' => 'Tên người nhận không được đẻ trống!',
            'txtname.min' => 'Tên phải 5 chữ cái trở lên',
            'txtname.max' => 'Tên tối đa 25 chữ cái'
        ];
    }
}
