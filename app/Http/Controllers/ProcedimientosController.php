<?php

namespace App\Http\Controllers;

use App\Models\Procedimiento;
use Illuminate\Http\Request;

class ProcedimientosController extends Controller
{
    //
    public function index()
    {
        $lista = Procedimiento::all();

        return view('procedimientos', compact('lista'));
    }

    public function create()
    {
        return view('procedimientos-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'procedimiento' => 'required',
            'descripcion' => 'required',
        ]);

        Procedimiento::create($request->all());
        return redirect()->route('procedimientos.index');
    }

    public function show(string $id)
    {
        $consulta = Procedimiento::find($id);

        return view('procedimientos-show', compact('consulta'));
    }

    public function edit(string $id)
    {
        $consulta = Procedimiento::find($id);

        return view('procedimientos-edit', compact('consulta'));

    }


    public function update(Request $request, $id)
    {
        

        $dato = Procedimiento::find($id);
        $dato->update($request->all());

        return redirect()->route('procedimientos.index')
            ->with('success', 'Post updated successfully.');
    }

    public function destroy($id)
    {
        $dato = Procedimiento::find($id);
        $dato->delete();
        
        return to_route('procedimientos.index');
    
    }
}
