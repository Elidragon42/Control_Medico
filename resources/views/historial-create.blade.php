@extends('layouts.app')

@section('title', 'Home')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/estilos-historial-create.css') }}">
@endsection

@section('subtitle', 'crear nuevo')

@section('boton1')
    <a href="#" class="text-xl font-bold tracking-tight text-gray-900 hover:underline">Ahorita vemos</a>
@endsection


@section('content')
    <div class="text-center">
        <div class="mb-10 pb-2 pt-2 border-b-2">
            <h1 class="text-2xl font-bold tracking-wider">Nuevo registro medico</h1>
        </div>
        <div>
            <form action="">
                <div class="">
                    <div>
                        <label for="nEmpleado">No. empleado</label>
                        <select name="" id="">
                            @foreach ($empleados as $empleado)
                                <option value="{{$empleado->numero_de_empleado}}">{{$empleado->numero_de_empleado}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="otra">no se</label>
                        <input type="search" name="otra" id="">
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection
