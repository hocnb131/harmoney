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
            'code' => 'required|max:8|',
            'started_at' => 'required',
            'ended_at' => 'required',
            'percent'=>'required|max:2|',
            'amount'=>'required|max:5|',
        ];
    }
    public function messages(){
        return [
            'code.required'=>'Xin hãy nhập Code',
            'code.max'=>'Tối đa là 10',
            'started_at.required'=>'Xin hãy chọn ngày',
            'ended_at.required'=>'Xin hãy chọn ngày',
            'percent.required'=>'Xin hãy nhập số',
            'percent.max'=>'Tối đa là 2',
            'amount.required'=>'Xin hãy nhập số',
            'amount.max'=>'Tối đa là 5',        
        ];
    }
}
