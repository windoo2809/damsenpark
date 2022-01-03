<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'content' => 'required',
           ];
    }
    public function messages() {
        return [
             'name.required' => 'Vui lòng nhập tên',
             'email.required' => 'Vui lòng nhập email',
             'phone.required' => 'Vui lòng nhập số điện thoại',
             'address.required' => 'Vui lòng nhập địa chỉ',
             'content.required' => 'Vui lòng nhập lời nhắn',
        ];
    }
}
