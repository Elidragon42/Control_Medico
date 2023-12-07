@extends('layouts.app')

@section('title', 'Ver registro')

@section('subtitle', 'Ver registro')

@section('boton1')
    <a href="{{route('procedimientos.edit', $consulta->id)}}" class="text-xl font-bold tracking-tight text-gray-900 hover:underline">Editar datos</a>
    <form action="{{route('procedimientos.destroy', $consulta)}}" method="post" class="inline pl-5">
        @csrf
        @method('delete')
        <button type="submit" class="text-xl font-bold tracking-tight text-red-500 hover:underline">Eliminar</button>
    </form>
@endsection

@section('content')
    <h1>{{$consulta->id}}</h1>
    <h1>{{$consulta->procedimiento}}</h1>
    <h1>{{$consulta->descripcion}}</h1>
@endsection