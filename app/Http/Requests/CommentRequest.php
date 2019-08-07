<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'title'=>'required',
            'content'=>'required',
        ];
    }
    public function messages(){
        return[

            'name.required'=>'** Vui lòng nhập tên',
            'email.required'=>'** Vui lòng nhập email',
            'title.required'=>'** Vui lòng nhập tiêu đề bình luận',
            'content.required'=>'** Vui lòng nhập nội dung'
        ];
    }
}
