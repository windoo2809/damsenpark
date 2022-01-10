<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryVeRequest extends FormRequest
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
                'price' => 'required',
               ];
        }
        public function messages() {
            return [
                 'name.required' => 'Vui lòng nhập tên',
                 'name.unique' => 'Tên đã tồn tại',         
                 'price.required' => 'Vui lòng nhập giá',
            ];
        }
}
