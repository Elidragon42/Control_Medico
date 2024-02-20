@extends('layouts.app')

@section('title', 'Home')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/estilos-historial-create.css') }}">
@endsection

@section('subtitle', 'Añadir nuevo procedimiento')

@section('content')
<h1 class="text-2xl font-bold tracking-wider text-center mb-10 pb-2 pt-2 border-b-2">Nuevo Procedimiento</h1>
    <form action="{{route('procedimientos.store')}}" method="POST">
        @csrf
        <div class="grid grid-cols-2">
            <div class="col-span-2 text-center">
                <label for="procedimiento">Nombre del procedimiento: </label> <br>
                <input type="text" name="procedimiento" class="w-2/4" >
            </div>
            <div class="col-span-2 text-center mt-5">
                <label for="descripcion">Descripcion: </label> <br>
                <textarea name="descripcion" class="resize-none w-2/4 overflow-auto" rows="5"></textarea>
            </div>
            <div class="col-span-2 text-center mt-5">
                <button type="submit" class="border border-black bg-white  w-1/4">Confirmar</button>
            </div>
        </div>
    </form>
@endsection
