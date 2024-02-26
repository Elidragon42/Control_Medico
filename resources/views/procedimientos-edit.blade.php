@extends('layouts.app')

@section('title', 'Editar')

@section('subtitle', 'Editar datos')

@section('content')
    <form action="{{route('procedimientos.update', $consulta->id)}}" method="post">
        @csrf
        <div class="grid grid-cols-2">
            <div class="col-span-2 text-center">
                <label for="procedimiento">Nombre del procedimiento: </label> <br>
                <input type="text" name="procedimiento" class="w-2/4" >
                @error('procedimiento')
                    <p class="text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-span-2 text-center mt-5">
                <label for="descripcion">Descripcion: </label> <br>
                <textarea name="descripcion" class="resize-none w-2/4 overflow-auto" rows="5"></textarea>
                @error('descripcion')
                    <p class="text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-span-2 text-center mt-5">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar datos</button>
            </div>
        </div>
    </form>
@endsection
