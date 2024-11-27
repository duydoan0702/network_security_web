<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LogInRequest extends FormRequest
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
            'user_nameOrEmail' => 'required|string',
            'user_password_login' => 'required|string|min:8',
        ];
    }

    public function messages()
    {
        return [
            'user_nameOrEmail.required' => 'Tên người dùng hoặc email là bắt buộc.',
            'user_nameOrEmail.string' => 'Tên người dùng hoặc email phải là một chuỗi ký tự.',
            'user_password_login.required' => 'Mật khẩu là bắt buộc.',
            'user_password_login.string' => 'Mật khẩu phải là một chuỗi ký tự.',
            'user_password_login.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',
        ];
    }
}
