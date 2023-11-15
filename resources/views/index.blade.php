@extends('layouts.app')

@section('title', 'Home')

@section('subtitle', 'index')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th class="border border-gray-400 px-4 py-4" >Empleados</th>
                <th class="border border-gray-400 px-4 py-4" >ID</th>
                <th class="border border-gray-400 px-4 py-4" >Descripción</th>
                <th class="border border-gray-400 px-4 py-4" >Médico</th>
                <th class="border border-gray-400 px-4 py-4" >Diagnóstico</th>
                <th class="border border-gray-400 px-4 py-4" >Fecha de Consulta</th>
                <th class="border border-gray-400 px-4 py-4" >Fecha de Revisión</th>
                <th class="border border-gray-400 px-4 py-4" >Estado</th>
            </tr>
        </thead>

        <tbody>
            @foreach($consultas as $consulta)
            <tr>
                <td class="border border-gray-400 px-4 py-4"><a href="#">{{ $consulta->empleado }}</a></td>
                <td class="border border-gray-400 px-4 py-4">{{ $consulta->id }}</td>
                <td class="border border-gray-400 px-4 py-4">{{ $consulta->descripcion }}</td>
                <td class="border border-gray-400 px-4 py-4">{{ $consulta->medico }}</td>
                <td class="border border-gray-400 px-4 py-4">{{ $consulta->diagnostico }}</td>
                <td class="border border-gray-400 px-4 py-4">{{ $consulta->fecha_consulta}}</td>
                <td class="border border-gray-400 px-4 py-4">{{ $consulta->fecha_revision}}</td>
                <td class="border border-gray-400 px-4 py-4" {{ $consulta->estado == 'Realizado' ? 'text-success' : 'text-danger' }}">{{ $consulta->estado }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
