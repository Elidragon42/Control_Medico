@extends('layouts.app')

@section('title', 'Home')

@section('subtitle', 'Procedimientos')

@section('boton1')
    <a href="{{ route('procedimientos.create') }}" class="text-xl font-bold tracking-tight text-gray-900 hover:underline">Nuevo Procedimiento</a>
@endsection

@section('content')
    <div class="max-w-4xl mx-auto">
        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-300">
                <thead>
                    <tr>
                        <th class="py-4 px-6 text-left border-b bg-blue-100">Id</th>
                        <th class="py-4 px-6 text-left border-b bg-blue-100">Procedimiento</th>
                        <th class="py-4 px-6 text-left border-b bg-blue-100">Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($procedimientos as $index => $campo)
                        <tr class="{{ $index % 2 == 0 ? 'bg-gray-100' : 'bg-white' }}">
                            <td class="py-2 px-4 border-b">{{ $campo->id }}</td>
                            <td class="py-2 px-4 border-b">{{ $campo->procedimiento }}</td>
                            <td class="py-2 px-4 border-b">{{ $campo->descripcion ?? 'Sin datos' }}</td>
                        </tr>
                    @endforeach
                    @if ($procedimientos->isEmpty())
                        <tr>
                            <td colspan="3" class="py-4 px-6 text-center text-red-600">Sin datos existentes</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
