<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class HistorialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filtro = $request->input('filtro', 'todos');

        $query = Consulta::query();

        if ($filtro === 'realizado') {
            $query->where('estado', 'Realizado');
        } elseif ($filtro === 'pendiente') {
            $query->where('estado', 'Pendiente');
        }

        $consultas = $query->orderBy('id', 'desc')->paginate(10);

        return view('index', compact('consultas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $empleados = User::all();
        return view('historial-create', compact('empleados'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
        $request->validate([
            'numero_de_empleado' => 'required',
            'descripcion' => 'required',
            'diagnostico' => 'required',
            'medico' => 'required',
            'estado' => 'required',
            'fecha_consulta' => 'required',
            'fecha_revision' => 'required'
        ]);

        Consulta::create($request->all());
        return redirect()->route('consultas.index'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $consulta = Consulta::with('user')->find($id);
        return view('historial-show', compact('consulta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $consulta = Consulta::find($id);
        $empleados = User::all();

        return view('historial-edit', compact('consulta'), compact('empleados'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $dato = Consulta::with('user')->find($id);
        $dato->update($request->all());

        return to_route('consultas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $dato = Consulta::find($id);
        $dato->delete();

        return to_route('consultas.index');
    }
}
