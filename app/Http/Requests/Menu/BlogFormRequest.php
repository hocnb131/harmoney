<?php

namespace App\Http\Requests\Menu;

use Illuminate\Foundation\Http\FormRequest;

class BlogFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'content'=>'required'

        ];
    }
    public function messages(){
        return [
            'name.required' => 'Xin hãy nhập tên blog',
            'content.required'=>'Xin hãy nhập nội dung'
        ];
    }
}
