<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ExitController extends Controller
{
    public function exitUser(){
        // Nos permite actualizar todo el flugo de la sessiones, 
        // Nos libera todo lo de las sesiones anteriores
        Session::flush();
        Auth::logout();
        return redirect()->route('homeIndex');
    }
}
