<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductDetailRequest extends FormRequest
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
            'categoryID'=>'required',
            'name'=>'required',
            'cpu'=>'required',
            'menory'=>'required',
            'display'=>'required',
            'pin'=>'required',
            'sim'=>'required',
            'camera'=>'required',
            'price'=>'required|integer'
        ];
    }
    public function messages(){
        return[
           'categoryID.required'=>'**Vui lòng chọn thể loại',
           'name.required'=>'**Vui lòng nhập tên sản phẩm',
           'cpu.required'=>'**Vui lòng nhập CPU',
           'menory.required'=>'**Vui lòng nhập RAM',
           'display.required'=>'**Vui lòng nhập Màn hình',
           'pin.required'=>'**Vui lòng nhập Pin',
           'sim.required'=>'**Vui lòng nhập Sim',
           'camera.required'=>'**Vui lòng nhập Camera',
           'price.required'=>'**Vui lòng nhập giá',
           'price.integer'=>'Vui lòng nhập kiểu số',
           'price.max'=>'Vui lòng nhập lại không quá 10 chữ số'
       ];
   }
}
