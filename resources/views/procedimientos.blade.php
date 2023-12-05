@extends('layouts.app')

@section('title', 'Home')

@section('subtitle', 'Procedimientos')

@section('boton1')
    <a href="{{route('procedimientos.create')}}" class="text-xl font-bold tracking-tight text-gray-900 hover:underline">Nuevo Procedimiento</a>
@endsection

@section('content')
    
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Procedimiento</th>
            <th>Descripcion</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($lista as $campo)
            <tr>
                <th><a href="{{route('procedimientos.show', $campo->id)}}" class="hover:underline">{{$campo->id}}</a></th>
                <th>{{$campo->procedimiento}} </th>
            </tr>
        @empty
            <tr>
                <th>Sin datos.</th>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection