@extends('layouts.app')

@section('title', 'Ver registro')

@section('subtitle', 'Ver registro')

@section('boton1')
    <a href="{{route('procedimientos.edit', $consulta->id)}}" class="text-xl font-bold tracking-tight text-gray-900 hover:underline">Editar datos</a>
@endsection

@section('content')
    <h1>{{$consulta->id}}</h1>
    <h1>{{$consulta->procedimiento}}</h1>
    <h1>{{$consulta->descripcion}}</h1>
@endsection