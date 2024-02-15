<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
//
use illuminate\Support\Facades\Hash;
use illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function registrarse(Request $request){
        return view("auth.register");
    }
    //
    public function register( Request $request){
        //! Falta validar los datos

        $request->validate([

        ]);

        $user = new User();

        $user->name = $request->name; 
        $user->numero_de_empleado = $request->numero_de_empleado;

        $user->save();

        Auth::login($user);

    }

    public function iniciar_sesion( Request $request ){

        return view("auth.login");
    }
    public function login( Request $request ){ 
        //! Falta validar los datos

        

        $credenciales = [
            "numero_de_empleado" => $request->numero_de_empleado,
            "password" => $request->password,
        ];
        
        if(Auth::attempt($credenciales)){
            return redirect()->route("consultas.index");
        }

    }

    public function logout( Request $request ){
        Auth::logout();

        $request->session()->invalidate();

        return redirect()->route("login.iniciar_sesion");
        

    }

}
