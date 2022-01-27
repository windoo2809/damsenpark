<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required|min:6',
           ];
    }
    public function messages() {
        return [
             'name.required' => 'Vui lòng nhập tên',
             'email.required' => 'Vui lòng nhập email',
             'email.email' => 'Email không đúng định dạng',
             'password.required' => 'Vui lòng nhập mật khẩu',
             'password.min' => 'Mật khẩu không được dưới 6 ký tự',
           
        ];
    }
}
