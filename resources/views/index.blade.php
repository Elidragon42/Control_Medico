@extends('layouts.app')

@section('title', 'Home')

@section('css')
<link rel="stylesheet" href="{{asset('css/estilos-index.css')}}">    
@endsection

@section('subtitle', 'index')

@section('boton1')
    <a href="#" class="text-xl font-bold tracking-tight text-gray-900 hover:underline">Nuevo registro</a>
@endsection


@section('content')
    <table class="table">
        <thead>
            <tr>
                <th class="" >Empleados</th>
                <th class="" >ID</th>
                <th class="" >Descripción</th>
                <th class="" >Médico</th>
                <th class="" >Diagnóstico</th>
                <th class="" >Fecha de Consulta</th>
                <th class="" >Fecha de Revisión</th>
                <th class="" >Estado</th>
            </tr>
        </thead>

        <tbody>
            @foreach($consultas as $consulta)
            <tr>
                <td class=""><a href="#">{{ $consulta->empleado }}</a></td>
                <td class="">{{ $consulta->id }}</td>
                <td class="">{{ $consulta->descripcion }}</td>
                <td class="">{{ $consulta->medico }}</td>
                <td class="">{{ $consulta->diagnostico }}</td>
                <td class="">{{ $consulta->fecha_consulta}}</td>
                <td class="">{{ $consulta->fecha_revision}}</td>
                <td class="" {{ $consulta->estado == 'Realizado' ? 'text-success' : 'text-danger' }}">{{ $consulta->estado }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
