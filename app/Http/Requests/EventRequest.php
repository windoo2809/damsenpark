<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'name' => 'required|unique:event',
            'image' => 'required',
            'price' => 'required',
            'summary' => 'required',
            'content' => 'required',
            'content1' => 'required',
            'titlecontent' => 'required',
            'daystar' => 'required',
            'dayend' => 'required',
           ];
    }
    public function messages() {
        return [
             'name.required' => 'Vui lòng nhập tên',
             'name.unique' => 'Tên đã tồn tại',
             'image.required' => 'Vui lòng nhập ảnh',
             'price.required' => 'Vui lòng nhập giá',
             'summary.required' => 'Vui lòng nhập tóm tắt',
             'content.required' => 'Vui lòng nhập nội dung',
             'content1.required' => 'Vui lòng nhập nội dung',
             'titlecontent.required' => 'Vui lòng nhập nội dung',
             'daystar.required' => 'Vui lòng nhập ngày bắt đầu',
             'dayend.required' => 'Vui lòng nhập ngày kết thúc',
        ];
    }
}
