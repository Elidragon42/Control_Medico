@extends('layouts.app')

@section('title', 'Ver registro')

@section('subtitle', 'Ver registro')

@section('boton1')
    <a href="{{route('historial.edit', $consulta->id)}}" class="text-xl font-bold tracking-tight text-gray-900 hover:underline">Editar datos</a>
    <form action="{{route('historial.destroy', $consulta)}}" method="post" class="inline pl-5">
        @csrf
        @method('delete')
        <button type="submit" class="text-xl font-bold tracking-tight text-red-500 hover:underline">Eliminar</button>
    </form>
@endsection

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div>
            <h1 class="text-2xl font-bold mb-4">Datos del empleado</h1>
            <table class="min-w-full border-collapse bg-white shadow-md rounded">
                @if ($consulta->user)
                    <tr class="border-b">
                        <td class="py-2 px-4 text-xl font-semibold">Nombre:</td>
                        <td class="py-2 px-4">{{ $consulta->user->name }}</td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 px-4 text-xl font-semibold">Genero:</td>
                        <td class="py-2 px-4">{{ $consulta->user->genero }}</td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 px-4 text-xl font-semibold">Fecha de nacimiento:</td>
                        <td class="py-2 px-4">{{ $consulta->user->fecha_de_nacimiento }}</td>
                    </tr>
                @endif
            </table>
        </div>

        <div>
            <h1 class="text-2xl font-bold mb-4">Datos generales</h1>
            <table class="min-w-full border-collapse bg-white shadow-md rounded">
                <tr class="border-b">
                    <td class="py-2 px-4 text-xl font-semibold">ID:</td>
                    <td class="py-2 px-4">{{ $consulta->id }}</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4 text-xl font-semibold">Descripcion:</td>
                    <td class="py-2 px-4">{{ $consulta->descripcion }}</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4 text-xl font-semibold">Medico:</td>
                    <td class="py-2 px-4">{{ $consulta->medico }}</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4 text-xl font-semibold">Diagnostico:</td>
                    <td class="py-2 px-4">{{ $consulta->diagnostico }}</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4 text-xl font-semibold">Fecha de consulta:</td>
                    <td class="py-2 px-4">{{ $consulta->fecha_consulta }}</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4 text-xl font-semibold">Fecha de revision:</td>
                    <td class="py-2 px-4">{{ $consulta->fecha_revision }}</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4 text-xl font-semibold">Estado:</td>
                    <td class="py-2 px-4">{{ $consulta->estado }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
