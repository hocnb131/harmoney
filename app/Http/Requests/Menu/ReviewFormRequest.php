<?php

namespace App\Http\Requests\Menu;

use Illuminate\Foundation\Http\FormRequest;

class ReviewFormRequest extends FormRequest
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
            'user_id' => 'required',
            'room_id' => 'required',
            'comment' => 'required',
            'rate' => 'required|gt:0|max:5'
        ];
    }
// thong bao tieng viet
    public function messages()
    {
        return [
            'user_id.required' => 'Xin hãy chọn người dùng',
            'room_id.required' => 'Xin hãy chọn phòng',
            'comment.required' => 'Xin hãy nhập bình luận',
            'rate.required' => 'Xin hãy nhập đánh giá 1 dến 5 sao',
            'rate.gt' => 'Xin hãy nhập đánh giá khác 0',
            'rate.max' => 'Xin hãy nhập đánh giá nhỏ 6',
        ];
    }
}
