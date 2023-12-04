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
}
