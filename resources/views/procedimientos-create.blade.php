@extends('layouts.app')

@section('title', 'Home')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/estilos-historial-create.css') }}">
@endsection

@section('subtitle', 'Añadir nuevo procedimiento')

@section('boton1')
    <a href="#" class="text-xl font-bold tracking-tight text-gray-900 hover:underline">Ahorita vemos</a>
@endsection

@section('content')
    <form action="">
        <label for="">nombre del procedimiento</label>
        <input type="text">

        <label for="">descripcion</label>
        <textarea name="" id="" ></textarea>
    </form>
@endsection