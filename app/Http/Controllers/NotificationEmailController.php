<?php

namespace App\Http\Controllers;

use App\Mail\PruebaMail;
use App\Models\Consulta;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;

class NotificationEmailController extends Controller
{
    //
    public function enviarCorreosPendientes()
    {
        // Obtener las fechas almacenadas con estado "pendiente" desde tu base de datos
        $fechasPendientes = Consulta::where('estado', 'pendiente')->get();

        foreach ($fechasPendientes as $registro) {
            // Convertir la fecha almacenada a un objeto Carbon
            $fechaAlmacenada = Carbon::parse($registro->fecha_Consulta);

            // Calcular la fecha actual y la fecha 3 días antes
            $fechaActual = Carbon::now();
            $fechaLimite = $fechaAlmacenada->subDays(3);

            // Verificar si la fecha actual está dentro del límite de 3 días antes de la fecha almacenada
            if ($fechaActual->greaterThanOrEqualTo($fechaLimite)) {
                // La fecha actual está dentro del límite de 3 días antes

                $destinatario = $registro->empleado->email;

                // Puedes enviar el correo electrónico aquí
                Mail::to($destinatario)->send(new PruebaMail());


                echo "Correo electrónico enviado correctamente para la fecha $fechaAlmacenada.<br>";
            } else {
                // La fecha actual no está dentro del límite de 3 días antes
                echo "No es necesario enviar el correo electrónico en este momento para la fecha $fechaAlmacenada.<br>";
            }
        }
    }
}
