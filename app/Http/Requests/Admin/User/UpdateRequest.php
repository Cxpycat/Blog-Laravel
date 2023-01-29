<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users,email'. $this->user_id,
            'user_id'=> 'required|integer|exists:users,id',
            'role' => 'integer'
        ];
    }
    public function messages()
    {
        return [
            'email.unique'=>'Пользователь с таким email уже существует',
            'email.email'=>'Ваша почта не соответствует формату',
            'email.required'=>'Это обязательное поле',
            'name.required'=>'Это обязательное поле'
        ];
    }
}
