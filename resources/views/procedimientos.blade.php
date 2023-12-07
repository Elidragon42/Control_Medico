@extends('layouts.app')

@section('title', 'Home')

@section('subtitle', 'Procedimientos')

@section('boton1')
    <a href="{{ route('procedimientos.create') }}" class="text-xl font-bold tracking-tight text-gray-900 hover:underline">Nuevo Procedimiento</a>
@endsection

@section('content')
    <div class="max-w-4xl mx-auto">
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
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('procedimientos.show', $campo->id) }}" class="hover:underline">{{ $campo->id }}</a>
                        </td>
                        <td class="py-2 px-4 border-b">{{ $campo->procedimiento }}</td>
                        <td class="py-2 px-4 border-b">{{ $campo->descripcion ?? 'Sin datos' }}</td>
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
