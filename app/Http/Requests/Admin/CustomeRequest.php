<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CustomeRequest extends FormRequest
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
            'name' => 'required',
            'sex' => 'required',
            'address' => 'required',
            'birthday' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'type' => 'required',
            'id_user_create' => ['required', 'numeric', Rule::exists('permission_groups', 'id')]
        ];
    }
}
