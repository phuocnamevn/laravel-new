<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'username' => ['required|min:2'],
            'email' => ['required|'],
            'password' => ['required|min:8|']
        ];
    }
    public function messages()
	{
	   return [
		  'username.required' => __('Bạn chưa nhập Username.'),
		  'email.required' => __('Bạn chưa nhập Email.'),
		  'password.required' => __('Bạn chưa nhập Mật khẩu.'),
		  'username.min' => __('Username không được nhỏ hơn 2 ký tự.'),
		  'username.min' => __('Mật khẩu không được nhỏ hơn 8 ký tự.')
	   ];
	}
}
