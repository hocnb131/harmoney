<?php

namespace App\Http\Requests\Menu;

use Illuminate\Foundation\Http\FormRequest;

class ServiceFormRequest extends FormRequest
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
            'icon'=>'required',
            'room_id'=>'required',
            'serviceType'=>'required'
        ];
    }
    public function messages(){
        return [
            'name.required' =>'Xin hãy nhập tên dịch vụ',
            'icon.required' => 'Xin hãy nhập icon',
            'room_id.required' => 'Xin hãy nhập số phòng',
            'serviceType.required'=>'Xin hãy nhập loại dịch vụ'
        ];
    }
}
