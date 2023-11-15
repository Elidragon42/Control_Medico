@extends('layouts.app')

@section('title', 'Home')

@section('subtitle', 'index')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Empleados</th>
                <th>ID</th>
                <th>Descripción</th>
                <th>Médico</th>
                <th>Diagnóstico</th>
                <th>Fecha de Consulta</th>
                <th>Fecha de Revisión</th>
                <th>Estado</th>
            </tr>
        </thead>

        <tbody>
            @foreach($consultas as $consulta)
            <tr>
                <td><a href="#">{{ $consulta->empleado }}</a></td>
                <td>{{ $consulta->id }}</td>
                <td>{{ $consulta->descripcion }}</td>
                <td>{{ $consulta->medico }}</td>
                <td>{{ $consulta->diagnostico }}</td>
                <td>{{ $consulta->fecha_consulta}}</td>
                <td>{{ $consulta->fecha_revision}}</td>
                <td class="{{ $consulta->estado == 'Realizado' ? 'text-success' : 'text-danger' }}">{{ $consulta->estado }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
