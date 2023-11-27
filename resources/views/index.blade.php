@extends('layouts.app')

@section('title', 'Home')

@section('css')
<link rel="stylesheet" href="{{asset('css/estilos-index.css')}}">    
@endsection

@section('subtitle', 'index')

@section('boton1')
    <a href="{{route('historial.create')}}" class="text-xl font-bold tracking-tight text-gray-900 hover:underline">Nuevo registro</a>
@endsection

@section('content')

<form action="{{ route('consultas.index') }}" method="GET">
    <label for="filtro">Filtrar por:</label>
    <select name="filtro" id="filtro">
        <option value="todos">Todos</option>
        <option value="realizado">Realizado</option>
        <option value="pendiente">Pendiente</option>
    </select>


    <button type="submit">Filtrar</button>
</form>
    <table class="table">
        <thead>
            <tr>
                <th class="" >ID</th>
                <th class="" >No.Empleado</th>
                <th class="" >Descripción</th>
                <th class="" >Médico</th>
                <th class="" >Diagnóstico</th>
                <th class="" >Fecha de Consulta</th>
                <th class="" >Fecha de Revisión</th>
                <th class="" >Estado</th>
            </tr>
        </thead>

        <tbody>
            @if($consultas->isEmpty())
                <tr>
                    <td colspan="8" style="text-align: center; background-color: #f2ecec; color: red;">No información :v</td>
                </tr>
            @else
                @foreach($consultas as $consulta)
                    <tr>
                        <td class="">{{ $consulta->id }}</td>
                        <td class=""><a href="#" class="hover:underline">{{ $consulta->numero_de_empleado }}</a></td>
                        <td class="">{{ $consulta->descripcion }}</td>
                        <td class="">{{ $consulta->medico }}</td>
                        <td class="">{{ $consulta->diagnostico }}</td>
                        <td class="">{{ $consulta->fecha_consulta}}</td>
                        <td class="">{{ $consulta->fecha_revision}}</td>
                        <td class="" {{ $consulta->estado == 'Realizado' ? 'text-success' : 'text-danger' }}">{{ $consulta->estado }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    {{ $consultas->links()}}

@endsection
