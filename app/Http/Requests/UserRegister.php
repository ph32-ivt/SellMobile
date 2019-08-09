<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegister extends FormRequest
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
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'phone'=>'required|max:10',
            'address'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'**Vui lòng nhập tên của bạn',
            'email.required'=>'**Vui lòng nhập email',
            'password.required'=>'**Vui lòng nhập mật khẩu',
            'phone.required'=>'**Vui lòng nhập số điện thoại',
            'phone.max'=>'**Vui lòng nhập không quá 10 chữ số',
            'address.required'=>'**Vui lòng nhập địa chỉ'


        ];
    }
}
