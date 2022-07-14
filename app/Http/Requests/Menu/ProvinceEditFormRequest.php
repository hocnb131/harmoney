<?php

namespace App\Http\Requests\Menu;

use Illuminate\Foundation\Http\FormRequest;

class ProvinceEditFormRequest extends FormRequest
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
            'name' => 'required|numeric|',
        ];
    }
// thong bao tieng viet
    public function messages()
    {
        return [
            'name.required' => 'Nhập tên theo số không được để trống',
            // 'name.regex' => 'Nhập tên chữ',
            'name.numeric' => 'Nhập tên số',

        ];
    }
}
