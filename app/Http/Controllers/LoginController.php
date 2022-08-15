<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

// Clase para manejar autenticaciones 
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show(){
        if(Auth::check()){
            return redirect()->route('homeIndex')->with('success','Ya estas LOGEADO');
        }
        return view('auth.login');

    }

    public function login(LoginRequest $request){
        //
        $credenciales=$request->tipoDeDatoEmailOurUser();

        // El metodo Auth valida si las credenciales estan en la BDD
        // Si es dirente a true (significa que no esta en la Bdd) 
        if(!Auth::validate($credenciales)){
            return redirect()->route('loginShow')->withErrors('Hay un Error con las credenciales');
            // return redirect()->route('loginShow')->withErrors(['message1'=>'this is first message']);
        }

        // Creamos un usuario (con las credenciales) y nos logeamos
        $user=Auth::getProvider()->retrieveByCredentials($credenciales);
        Auth::login($user);

        return $this->authenticated($request, $user);
    }

    public function authenticated(Request $request, $user){
        return redirect()->route('homeIndex');
    }
}
