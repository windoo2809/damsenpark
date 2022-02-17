<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DatveRequest extends FormRequest
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
            'category_id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'quantily' => 'required|min:0',
            'date' => 'required',
           ];
    }
    public function messages() {
        return [
            'category_id.required' => 'Vui lòng chọn gói',
             'name.required' => 'Vui lòng nhập tên',
             'email.required' => 'Vui lòng nhập email',
             'phone.required' => 'Vui lòng nhập số điện thoại',
             'quantily.required' => 'Nhập số lượng',
             'quantily.min' => 'Số lượng không được âm',
             'date.required' => 'Vui lòng chọn ngày',
        ];
    }
}
