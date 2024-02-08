<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use illuminate\Support\Facades\Hash;
use illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function register( Request $request){
        //! Falta validar los datos

        $user = new User();

        $user->name = $request->name; 
        $user->numero_de_empleado = $request->numero_de_empleado;

        $user->save();

        Auth::login($user);

    }

    public function login( Request $request ){ 

    }

    public function logout( Request $request ){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

    }

}
