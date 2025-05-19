<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */


    public function rules(): array
    {
        return [
            'username'=>'required|string|max:100|min:2',
            'email'=> 'required|email|unique:users,email',
            'password'=>'required|max:12|min:6'
        ];
    }


    public function messages(){
        return[
            'password.max'=>'the pass must be less than 12 caracters',
            'email.uinque'=> 'the email is alerdy been taken'
        ];
    }
    
}
