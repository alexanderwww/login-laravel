<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as vAlidationFactory;

class LoginRequest extends FormRequest
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
            'username'=>'required',
            'password'=>'required'
        ];
    }

    public function tipoDeDatoEmailOurUser(){
        // obtenemos el valor del input Login 
        $usuario=$this->get('username');

        // Verificamos si es un email o un nombre de usuario 
        if($this->verificarSiEsEmail($usuario)){
            //Si es un email, retornamos un array con los datos del login
            //que es el 'email' y el 'password' y en controlador nos logeamos
            return [
                'email'=>$usuario,
                'password'=>$this->get('password')
            ];
        }
        // Si el username no es un 'Email', retornamos los datos igual,
        // Solo que solo enviamos, los valores 'username' y 'password' y no enviamos las token ni el method
        return $this->only('username','password');
    }

    public function verificarSiEsEmail($email){
        $NewFactory=$this->container->make(vAlidationFactory::class);

        // La funcion make(arrayConLosDatos, ArrayDeLoQueSeQuiereValidar),
        // En este caso validamos si es un EMAIL, (Estos pasos lo podemos hacer manuel pero es mas codigo)

        // Si es diferente a fails() nos retorna true
        return !$NewFactory->make(['username1'=> $email],['username1'=>'email'])->fails();

    }
} 
 