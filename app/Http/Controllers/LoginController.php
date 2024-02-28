<?php

namespace App\Http\Controllers;

use app\Models\User;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function registrarse(Request $request)
    {
        return view("auth.register");
    }

    public function register(Request $request)
    {

        $request->validate(
            [
                'name' => 'required|min:4',
                'numero_de_empleado' => 'required|numeric',
                'password' => 'required|min:6',
                'password_confirm' => 'required|min:6|same:password',
                'admin_password' => 'required',

            ],
            [
                'name.required' => 'El campo Nombre NO puede estar vacio',
                'name.min:4' => 'El campo Nombre debe tener minimo 4 caracteres',
                'numero_de_empleado.required' => 'El campo Numero de empleado NO puede estar vacio',
                'numero_de_empleado.numeric' => 'El Campo numero de empleado debe estar conformado por NUMEROS',
                'password.required' => 'El campo Contraseña NO puede estar vacio',
                'pasword.min:6' => 'El campo contraseña debe tener minimo 6 caracteres',
                'password_confirm.required' => 'El campo Confirmar contraseña NO puede estar vacio',
                'password_confirm.min:6' => 'El campo Confirmar contraseña debe tener minimo 6 caracteres',
                'admin_password.required' => 'El campo Contraseña del administrador NO puede estar vacia',

            ]
        );


        if (Hash::check($request->admin_password, Auth::user()->password)) {
            $user = new User();

            $user->name = $request->name;
            $user->numero_de_empleado = $request->numero_de_empleado;
            $user->password = Hash::make($request->password);
            $user->save();



            return redirect()->route('login.login');
        } else {
            return back()->withErrors(['admin_password' => 'La contraseña del administrador no es correcta.']);
        }

    }

    public function iniciar_sesion(Request $request)
    {

        return view("auth.login");
    }
    public function login(Request $request)
    {


        $request->validate(
            [
                'numero_de_empleado' => 'required|numeric',
                'password' => 'required'
            ],
            [
                'numero_de_empleado.required' => 'El campo Numero de empleado NO puede estar vacio',
                'numero_de_empleado.numeric' => 'El Numero de empleado debe ser numerico',
                'password.required' => 'el campo Contraseña NO puede estar vacio',

            ]
        );


        $credenciales = [
            "numero_de_empleado" => $request->numero_de_empleado,
            "password" => $request->password,
        ];

        if (Auth::attempt($credenciales)) {
            return redirect()->route("consultas.index");
        } else {
            return redirect()->back()->with('error', 'Numero de empleado o Contraseña incorrecta. Por favor, inténtalo de nuevo.');
        }

    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        return redirect()->route("login.iniciar_sesion");


    }

}
