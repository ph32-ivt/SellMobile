<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImageRequest extends FormRequest
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
            'image' => 'required|mimes:jpeg,jpg,png,gif'
        ];
    }
    public function messages(){
        return[
           'image.required'=>'**Vui lòng chọn hình ảnh',
           'image.mimes'=>'**Vui lòng chọn hình ảnh có đuôi *.jpeg,*.jpg,*.png,*.gif'
       ];
       
   }
}
