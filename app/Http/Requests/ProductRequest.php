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
            'category_id'=>'required',
            'name'=>'required',
            'cpu'=>'required',
            'memory'=>'required',
            'display'=>'required',
            'pin'=>'required',
            'sim'=>'required',
            'camera'=>'required',
            'price'=>'required|integer',
            'image' => 'mimes:jpeg,jpg,png,gif',
            'quantity'=>'required'
        ];
    }
    public function messages(){
        return[
           'category_id.required'=>'**Vui lòng chọn thể loại',
           'name.required'=>'**Vui lòng nhập tên sản phẩm',
           'cpu.required'=>'**Vui lòng nhập CPU',
           'memory.required'=>'**Vui lòng nhập RAM',
           'display.required'=>'**Vui lòng nhập Màn hình',
           'pin.required'=>'**Vui lòng nhập Pin',
           'sim.required'=>'**Vui lòng nhập Sim',
           'camera.required'=>'**Vui lòng nhập Camera',
           'price.required'=>'**Vui lòng nhập giá',
           'price.integer'=>'Vui lòng nhập kiểu số',
           'image.mimes' => 'Vui lòng chọn hình có đuôi *jpg,jpeg,png',
           'quantity.required'=>'Vui long nhập'
       ];
   }
}
