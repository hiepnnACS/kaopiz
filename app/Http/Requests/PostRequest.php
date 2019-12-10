<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required|unique:posts,title|min:2|max:200',
            'content' => 'required|min:2',
            'url' => 'required,unique:posts,url'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute không được đẻ trống',
            'unique' => ':attribute đã tồn tại trong csdl ',
            'min' => 'Kí tự phải dlowsn hơn 2 kí tự',       
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'Tên tiêu đề',
            'url' => 'đường dẫn',
        ];  
    }
}
