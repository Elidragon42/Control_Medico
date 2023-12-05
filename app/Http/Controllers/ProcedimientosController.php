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
}
