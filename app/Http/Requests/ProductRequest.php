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
            'categoryID'=>'required',
            'name'=>'required'
        ];
    }
        public function messages(){
        return[
            'categoryID.required'=>'**Vui lòng chọn thể loại',
            'name.required'=>'**Vui lòng nhập tên sản phẩm'
        ];
    }
}
