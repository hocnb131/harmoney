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
            'slug'=>'required',
            'name'=>'required',
            'nameEn'=>'required',
            'file_upload'=>'required'
        ];
    }
    public function messages(){
        return [
            'slug.required' =>'Nhap cai gi vao di',
            'name.required' => 'Nhap cai gi vao di',
            'nameEn.required' => 'Nhap cai gi vao di',
            'file_upload.required'=>'cai nay cung z'
        ];
    }
}
