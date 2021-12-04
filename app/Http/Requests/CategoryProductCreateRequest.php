<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryProductCreateRequest extends FormRequest
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
            'name' => 'required|min:2',
            'file' => 'required',
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Tên danh mục không được để trống',
            'name.min' => 'Tên danh mục phải ít nhất có 2 ký tự',
            'file.required' => 'Hình ảnh không được để trống',
        ];
    }
}