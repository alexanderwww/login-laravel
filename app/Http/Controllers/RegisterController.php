<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistroRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{

    public function show(){
        if(Auth::check()){
            return redirect()->route('homeIndex')->with('success','Ya estas REGISTRADO');
        }
        return view('auth.register');
    }
    
    //Creamos un request (en la terminal), Estos request se crean en otro carpeta, Se
    // usan mayormente para las validaciones de los inputs (que son un request)
    public function register(RegistroRequest $request){

        $user = User::create($request->validated());

        // Metodo 2 
        // $userNew=new User();
        // $userNew->username=$request->username;
        // $userNew->email=$request->email;
        // $userNew->password=$request->password;
        // $userNew->save();

        return redirect()->route('registerShow')->with('success', 'Successfully registered user Kevin');
    }

}
