<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consulta;

class ConsultaController extends Controller
{
    public function index(Request $request)
    {
        $filtro = $request->input('filtro', 'todos');

        $query = Consulta::query();

        if ($filtro === 'realizado') {
            $query->where('estado', 'Realizado');
        } elseif ($filtro === 'pendiente') {
            $query->where('estado', 'Pendiente');
        } elseif ($filtro === 'mayor_fecha') {
            $query->orderBy('fecha_consulta', 'desc');
        } elseif ($filtro === 'menor_fecha') {
            $query->orderBy('fecha_consulta', 'asc');
        }
        
        $consultas = $query->paginate(10);

        return view('index', compact('consultas'));
    }
}
