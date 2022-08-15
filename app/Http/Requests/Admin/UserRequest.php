<?php

namespace App\Http\Requests\Admin;

use App\Rules\ValidateUserName;
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => [
                'required',
                'min:2',
                'not_regex:/^[@#$%&*]/',
                new ValidateUserName(),
            ],
            'email' => 'required|email|not_regex:/^[root]/',
            'password' => 'required|min:8|regex:/(?=.*?[@#$%&*])/|confirmed',
            'fb' => 'url',
            'ytb' => 'url',
        ];
    }
}
