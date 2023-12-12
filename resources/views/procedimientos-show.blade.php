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
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div>
            <h1 class="text-2xl font-bold mb-4">Detalles del procedimiento</h1>
            <table class="min-w-full border-collapse bg-white shadow-md rounded">
                <tr class="border-b">
                    <td class="py-2 px-4 text-xl font-semibold">ID:</td>
                    <td class="py-2 px-4">{{ $consulta->id }}</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4 text-xl font-semibold">Procedimiento:</td>
                    <td class="py-2 px-4">{{ $consulta->procedimiento }}</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4 text-xl font-semibold">Descripción:</td>
                    <td class="py-2 px-4">{{ $consulta->descripcion }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
