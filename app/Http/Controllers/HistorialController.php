<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use App\Models\Empleado;
use App\Models\Procedimiento;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class HistorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *///
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

        return view('index', compact('consultas', 'filtro'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $empleados = Empleado::all();
        $procedimientos = Procedimiento::all();
        return view('historial-create', compact('empleados', 'procedimientos'));
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
        ],
        [
            'numero_de_empleado.required' => 'Debes seleccionar un empleado',
            'descripcion.required' => 'El campo Descripcion NO puede estar vacia',
            'diagnostico.required' => 'El campo Diagnostico medico NO puede estar vacio',
            'estado.required' => 'Debes seleccionar un estado',
            'fecha_consulta.required' => 'Debes seleccionar la fecha de la consulta',
            'fecha_revision.required' => 'Debes seleccionar la fecha de la revision'
        ]
    );

        $consulta = new Consulta();
        $consulta->numero_de_empleado = $request->numero_de_empleado;
        $consulta->descripcion = $request->descripcion;
        $consulta->diagnostico = $request->diagnostico;
        $consulta->medico = $request->medico;
        $consulta->id_procedimiento = $request->procedimiento; // Asignar el valor de 'procedimiento' a 'id_procedimiento'
        $consulta->estado = $request->estado;
        $consulta->fecha_consulta = $request->fecha_consulta;
        $consulta->fecha_revision = $request->fecha_revision;

        $consulta->save();
        return redirect()->route('consultas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $consulta = Consulta::with('empleado')->find($id);
        $empleado = Empleado::find($id);
        return view('historial-show', compact('consulta','empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $consulta = Consulta::find($id);
        $empleados = Empleado::all();
        $procedimientos = Procedimiento::all();

        return view('historial-edit', compact('consulta', 'empleados' , 'procedimientos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'numero_de_empleado' => 'required',
            'descripcion' => 'required',
            'diagnostico' => 'required',
            'medico' => 'required',
            'estado' => 'required',
            'fecha_consulta' => 'required',
            'fecha_revision' => 'required'
        ],
        [
            'numero_de_empleado.required' => 'Error',
            'descripcion.required' => 'El campo Descripcion NO puede estar vacia',
            'diagnostico.required' => 'El campo Diagnostico medico NO puede estar vacio',
            'estado.required' => 'Debes seleccionar un estado',
            'medico'=> 'Error',
            'fecha_consulta.required' => 'Debes seleccionar la fecha de la consulta',
            'fecha_revision.required' => 'Debes seleccionar la fecha de la revision'
        ]
    );
        //
        $dato = Consulta::findOrFail($id); // Encuentra la consulta existente por su ID

$dato->numero_de_empleado = $request->numero_de_empleado;
$dato->descripcion = $request->descripcion;
$dato->diagnostico = $request->diagnostico;
$dato->medico = $request->medico;
$dato->id_procedimiento = $request->procedimiento; // Asigna el valor de 'procedimiento' a 'id_procedimiento'
$dato->estado = $request->estado;
$dato->fecha_consulta = $request->fecha_consulta;
$dato->fecha_revision = $request->fecha_revision;

$dato->save(); // Guarda los cambios en el registro existente

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
