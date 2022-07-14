<?php

namespace App\Http\Requests\Menu;

use Illuminate\Foundation\Http\FormRequest;

class BranchFormRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phoneNumber' => 'required',
            'province_id'=>'required',
            'slug'=>'required',
            'thumbnailDescription'=>'required',
        
        ];
    }
// thong bao tieng viet
    public function messages()
    {
        return [
            'name.required' => 'Nhập tên theo số không được để trống',
            'email.required' => 'Xin hãy nhập email',
            'address.required' => 'Xin hãy nhập địa chỉ',
            'phoneNumber.required' => 'Xin hãy nhập số điện thoại',
            'province_id.required' => 'Xin hãy chọn tỉnh thành',
            'slug.required' => 'Xin hãy nhập slug',
            'thumbnailDescription.required' => 'Xin hãy nhập mô tả hình ảnh',

   

        ];
    }
}
