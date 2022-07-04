<?php

namespace App\Http\Requests\Menu;

use Illuminate\Foundation\Http\FormRequest;

class CouponFormRequest extends FormRequest
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
            'code' => 'required|min:11|max:11',
            'started_at' => 'required',
            'ended_at' => 'required',
            'percent'=>'required|max:2|gt:0',
            'amount'=>'required|max:5|gt:0',
        ];
    }
    public function messages(){
        return [
            'code.required'=>'Vui lòng không để trống Code',
            'code.max'=>'Vui lòng nhập Code không quá 11 kí tự',
            'code.min'=>'Vui lòng nhập Code ít nhất 11 kí tự',
            'started_at.required'=>'Vui lòng chọn ngày bắt đầu',
            'ended_at.required'=>'Vui lòng chọn ngày kết thúc',
            'percent.required'=>'Vui lòng không để trống %',
            'percent.max'=>'Vui lòng nhập % không quá 2 kí tự',
            'percent.gt'=>'Vui lòng không nhập số nhỏ hơn 0',
            'amount.required'=>'Vui lòng không để trống Giá trị',        
            'amount.max'=>'Vui lòng nhập không quá 5 kí tự',
            'amount.min'=>'Vui lòng nhập ít nhất 5 kí tự',
            'amount.gt'=>'Vui lòng không nhập số nhỏ hơn 0',      
        ];
    }
}
