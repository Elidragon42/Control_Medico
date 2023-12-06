@extends('layouts.app')

@section('title', 'Home')

@section('subtitle', 'Procedimientos')

@section('boton1')
    <a href="{{ route('procedimientos.create') }}" class="text-xl font-bold tracking-tight text-gray-900 hover:underline">Nuevo Procedimiento</a>
@endsection

@section('content')
    <div class="flex justify-between mb-4">
        <form action="{{ route('procedimientos.index') }}" method="GET" class="form-filtro">
            <label for="filtro" class="filtro-label">Filtrar por:</label>
            <select name="filtro" id="filtro" onchange="document.getElementById('filtroForm').submit()" class="px-2 py-1 border border-gray-300 rounded">
                <option value="todos">Todos</option>
                <option value="realizado">Realizado</option>
                <option value="pendiente">Pendiente</option>
            </select>
        </form>
        <div>
            @if (isset($procedimiento))
                <a href="{{ route('procedimientos.edit', $procedimiento->id) }}" class="text-xl font-bold tracking-tight text-gray-900 hover:underline">Editar procedimiento</a>
            @endif
        </div>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Id</th>
                    <th class="py-2 px-4 border-b">Procedimiento</th>
                    <th class="py-2 px-4 border-b">Descripción</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($lista as $campo)
                    <tr>
                        <td class="py-2 px-4 border-b"><a href="{{ route('procedimientos.show', $campo->id) }}" class="hover:underline">{{ $campo->id }}</a></td>
                        <td class="py-2 px-4 border-b">{{ $campo->procedimiento }}</td>
                        <td class="py-2 px-4 border-b">{{ $campo->descripcion }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="py-2 px-4 border-b text-center">Sin datos.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
