<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'phone' => 'required|digits:10',
            'email' => 'required|email',
            'confirm_password' => 'same:password',
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Tên không được để trống',
            'name.min' => 'Tên phải ít nhất có 2 ký tự',
            'phone.required' => 'Số điện thoại không được để trống',
            'phone.digits' => 'Số điện thoại phải có 10 số',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email phải có dạng abc@xyz',
            'confirm_password.same' => 'Confirm Password phải giống Password',
        ];
    }
}