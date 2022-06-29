<?php

namespace App\Http\Requests\Menu;

use Illuminate\Foundation\Http\FormRequest;

class ProvinceFormRequest extends FormRequest
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
            'code' => 'required',
            'started_at' => 'required'
            
        ];
    }
// thong bao tieng viet
    public function messages()
    {
        return [
            'code.required' => 'Nhập tên theo số không được để trống',
            'started_at.required' => 'Xin vui lòng nhập ngày'

        ];
    }
}
