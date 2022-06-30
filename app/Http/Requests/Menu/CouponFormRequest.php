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
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [          
            'code' => 'required|max:10|',
            'started_at' => 'required',
            'ended_at' => 'required',
            'price'=>'required',
            'bedType'=>'required',
            'area'=>'required',
        ];
    }
    public function messages(){
        return [
            'name.required'=>'Xin hãy nhập Tên',
            'name.max'=>'Tối đa là 100',
            'adults.required'=>'Xin hãy nhập số lượng người lớn',
            'adults.min'=>'Tối thiểu là 1',
            'adults.max'=>'Tối thiểu là 10',
            'children.required'=>'Xin hãy nhập số lượng trẻ em',
        ];
    }
}
