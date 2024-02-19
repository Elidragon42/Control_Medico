@extends('layouts.app')

@section('title', 'Home')

@section('subtitle', 'Procedimientos')

@section('boton1')
    <a href="{{ route('procedimientos.create') }}" class="text-xl font-bold tracking-tight text-gray-900 hover:underline">Nuevo Procedimiento</a>
@endsection

@section('content')
    <div class="max-w-4xl mx-auto">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-blue-100">
                    <tr>
                        <th scope="col" class="py-3 px-6 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">Id</th>
                        <th scope="col" class="py-3 px-6 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">Procedimiento</th>
                        <th scope="col" class="py-3 px-6 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">Descripción</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($procedimientos as $index => $campo)
                        <tr class="{{ $index % 2 == 0 ? 'bg-gray-100' : 'bg-white' }}">
                            <td class="py-4 px-6 whitespace-nowrap">
                                <a href="{{ route('procedimientos.show', $campo->id) }}" class="text-black hover:text-black">{{ $campo->id }}</a>
                            </td>
                            <td class="py-4 px-6 whitespace-nowrap">{{ $campo->procedimiento }}</td>
                            <td class="py-4 px-6 whitespace-nowrap">{{ $campo->descripcion ?? 'Sin datos' }}</td>
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
