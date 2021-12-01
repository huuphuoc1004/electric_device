<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required|min:6',
            'confirm_password' => 'required|min:6|same:password',
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Tên không được để trống',
            'name.min' => 'Tên phải ít nhất có 2 ký tự',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email phải có dạng abc@xyz',
            'password.required' => 'Password không được để trống',
            'password.min' => 'Password phải ít nhất có 6 ký tự',
            'confirm_password.required' => 'Confirm Password không được để trống',
            'confirm_password.min' => 'Confirm Password phải ít nhất có 6 ký tự',
            'confirm_password.same' => 'Confirm Password phải giống Password',
        ];
    }
}