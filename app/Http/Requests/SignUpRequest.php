<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
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
            'user_name' => 'bail|required|string|max:255|unique:user_table,user_name',
            'user_email' => 'bail|required|email|unique:user_table,user_email',
            'user_password' => 'bail|required|string|min:8|regex:/[A-Z]/|regex:/[0-9]/',    
        ];
    }

    public function messages()
    {
        return [
            'user_name.required' => 'Tên người dùng không được bỏ trống.',
            'user_name.string' => 'Tên người dùng phải là chuỗi ký tự.',
            'user_name.max' => 'Tên người dùng không được dài quá 255 ký tự.',
            'user_name.unique' => 'Tên người dùng này đã được sử dụng.',

            'user_email.required' => 'Email không được bỏ trống.',
            'user_email.email' => 'Email không hợp lệ.',
            'user_email.unique' => 'Email này đã được sử dụng.',

            'user_password.required' => 'Mật khẩu không được bỏ trống.',
            'user_password.string' => 'Mật khẩu phải là chuỗi ký tự.',
            'user_password.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',

            'user_password.regex' => [
            'regex:/[A-Z]/' => 'Mật khẩu phải bao gồm ít nhất một chữ hoa.',
            'regex:/[0-9]/' => 'Mật khẩu phải bao gồm ít nhất một chữ số.',
            ],
        ];
    }
}
