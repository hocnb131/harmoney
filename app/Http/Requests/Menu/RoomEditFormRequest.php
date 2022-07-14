<?php

namespace App\Http\Requests\Menu;

use Illuminate\Foundation\Http\FormRequest;

class RoomEditFormRequest extends FormRequest
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
            'name'=>'required|max:100|',
            'adults'=>'required|gt:0|max:10|',
            'children'=>'required|gt:0|max:10|',
            'calendar'=>'required',
            // 'thumbnail'=>'required',
            'price'=>'required',
            'bedType'=>'required',
            'area'=>'required|numeric|',
            'status'=>'required',
            'roomType'=>'required',
            'branch_id'=>'required',
        ];
    }
    public function messages(){
        return [
            'name.required'=>'Xin hãy nhập Tên',
            'name.max'=>'Tối đa là 100',
            'adults.required'=>'Xin hãy nhập số lượng người lớn',
            'adults.gt'=>'Tối thiểu là 1',
            'adults.max'=>'Tối da là 10',
            'children.required'=>'Xin hãy nhập số lượng trẻ em',
            'children.gt'=>'Tối thiểu là 1',
            'children.max'=>'Tối đa là 10',
            'calendar.required'=>'Xin hãy nhập ngày',
            'price.required'=>'Xin hãy nhập giá',
            'bedType.required'=>'Xin hãy nhập loại giường',
            'area.required'=>'Xin hãy nhập khu vực',
            'area.numeric'=>'Xin hãy nhập bằng số',
            'status.required'=>'Xin hãy nhập trạng thái',
            'roomType.required'=>'Xin hãy nhập loại phòng',
            'branch_id.required'=>'Xin hãy nhập chi nhánh',
        ];
    }
}
