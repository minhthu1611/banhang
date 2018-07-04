<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HanghoaRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            //
            'tenhang'=>'required',
            'loaihang_id'=>'required',
            'donvitinh'=>'required',
            'dongia'=>'required|numeric',
            'soluong'=>'required|numeric|min:1',
            'hinhanh'=>'dimensions:ratio=3/2'
        ];
    }
    public function messages()
    {
    return[
        'tenhang.required'=>'Tên hàng trống!',
        'loaihang_id.required'=>'Chọn loại hàng!',
        'donvitinh.required'=>'Đơn vị tính trống!',
        'donvitinh.numeric'=>"Phải là kiểu số!",
        'dongia.required'=>'Đơn giá trống!',
        'dongia.numeric'=>'Phải là kiểu số!',
        'soluong.required'=>'Số lượng trống!',
        'soluong.numeric'=>'Phải là kiểu số!',
        // 'hinhanh.required'=>'Chọn hình ảnh!',
        'hinhanh.dimensions'=>'Kích cỡ không phù hợp!'
    ];
    }
}
