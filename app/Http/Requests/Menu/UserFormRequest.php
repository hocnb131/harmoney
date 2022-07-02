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
            'fullName'=>'required|max:50|min:5',
            'email' => 'required|max:40|min:10',
            'phoneNumber'=>'required|gt:0|max:11|min:10',
            'password'=>'required|min:8|max:32',
            'role'=>'required',
            'status'=>'required',
        ];
    }
    public function messages(){
        return [
            'fullName.required'=>'Vui lòng không để trống Tên',
            'fullName.max'=>'Vui lòng nhập Tên không quá 50 kí tự',
            'fullName.max'=>'Vui lòng nhập Tên ít nhất 5 kí tự',
            'email.required'=>'Vui lòng không để trống Email',
            'email.max'=>'Vui lòng nhập Email không quá 40 kí tự',
            'email.min'=>'Vui lòng nhập Email ít nhất 10 kí tự',
            'phoneNumber.required'=>'Vui lòng không để trống SĐT',
            'phoneNumber.max'=>'Vui lòng nhập SĐT không quá 11 kí tự',
            'phoneNumber.min'=>'Vui lòng nhập SĐT ít nhất 10 kí tự',
            'phoneNumber.gt'=>'Vui lòng không nhập số nhỏ hơn 0',
            'password.required'=>'Vui lòng không để trống Password',
            'password.min'=>'Vui lòng nhập ít nhất 8 kí tự',
            'password.max'=>'Vui lòng nhập Password không quá 32 kí tự',
            'role.required'=>'Vui lòng chọn Role',
            'status.required'=>'Vui lòng chọn Trạng thái',
        ];
    }
}
