<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistroRequest extends FormRequest
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
        // 'users' es el nombre de la tabla que esta en la Bdd
        // Todos estos datos vienen de un input 
        return [
            'email'=> 'required|unique:users,email',
            'username'=> 'required',
            'password'=> 'required|min:4',
            'password_confirmation_input'=> 'required|same:password'
        ];
    }
}
