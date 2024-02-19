<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function registrarse(Request $request){
        return view("auth.register");
    }
    //
    public function register( Request $request){

        $request->validate([
            'name' => 'required|min:4',
            'numero_de_empleado' => 'required',
            'password' => 'required|min:6',
            'password_confirm' => 'required|min:6|same:password',
            'admin_password' => 'required',

//
        ]);

        $user = new User();

        $user->name = $request->name; 
        $user->numero_de_empleado = $request->numero_de_empleado;
        $user->password = Hash::make($request->password);

        $user->save();

        Auth::login($user);

        return redirect()->route('login.login');

    }

    public function iniciar_sesion( Request $request ){

        return view("auth.login");
    }
    public function login( Request $request ){ 
        

        $request->validate([
            'numero_de_empleado' => 'required|numeric',
            'password' => 'required'

        ]);
        

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
