<?php

namespace App\Http\Controllers;

use app\models\User;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginApiController extends Controller
{
    //

    public function login(Request $request)
    {
        $request->validate([
            'numero_de_empleado' => 'required|numeric',
            'password' => 'required',
        ], [
            'numero_de_empleado.required' => 'El campo Numero de empleado NO puede estar vacio',
            'numero_de_empleado.numeric' => 'El Numero de empleado debe ser numerico',
            'password.required' => 'el campo Contraseña NO puede estar vacio',
        ]);

        $credenciales = [
            "numero_de_empleado" => $request->numero_de_empleado,
            "password" => $request->password,
        ];

        if (Auth::attempt($credenciales)) {
            // User successfully authenticated
            $user = Auth::user(); // Get authenticated user

            $response = [
                'success' => true,
                'user' => [
                    'name' => $user->name,
                    'numero_de_empleado' => $user->numero_de_empleado,
                    'password' => $user->password, // Replace with relevant user data
                    // ... Add other user details as needed
                ]
            ];

            return response()->json($response, 200); // Send JSON response
        } else {
            // Authentication failed
            $response = [
                'success' => false,
                'error' => 'Numero de empleado o Contraseña incorrecta. Por favor, inténtalo de nuevo.'
            ];

            return response()->json($response, 401); // Send JSON error response
        }
    }

}
