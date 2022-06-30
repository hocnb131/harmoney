<?php

namespace App\Http\Requests\Menu;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
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
            'fullName'=>'required|max:40|',
            'email' => 'required|max:40|',
            'phoneNumber'=>'required|max:10|',
            'password'=>'required|min:8|',
            'role'=>'required',
            'status'=>'required',
        ];
    }
    public function messages(){
        return [
            'fullName.required'=>'Xin hãy nhập Tên',
            'fullName.max'=>'nhập Tên không quá 40 ký tự',
            'email.required'=>'Xin hãy nhập email',
            'email.max'=>'Tối thiểu là 40 ký tự',
            'phoneNumber.required'=>'Xin hãy nhập số điện thoại',
            'phoneNumber.max'=>'Tối đa là 10 ký tự',
            'password.required'=>'Nhập password',
            'password.min'=>'Nhập ít nhất 8 ký tự',
            'role.required'=>'Xin hãy nhập',
            'status.required'=>'Xin hãy chọn',
        ];
    }
}
