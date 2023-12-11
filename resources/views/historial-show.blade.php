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
    <div class="pb-5">
        <h1 class="text-2xl font-bold">Datos del empleado</h1>
        <h1 class="text-xl font-semibold">Numero de empleado:</h1>
        <h1>{{ $consulta->numero_de_empleado }}</h1>

        @if ($consulta->user)
            <h1 class="text-xl font-semibold">nombre:</h1>
            <h1>{{ $consulta->user->name }}</h1>

            <h1 class="text-xl font-semibold">genero:</h1>
            <h1>{{ $consulta->user->genero }}</h1>

            <h1 class="text-xl font-semibold">fecha de nacimiento:</h1>
            <h1>{{ $consulta->user->fecha_de_nacimiento }}</h1>

            <h1 class="text-xl font-semibold">Numero de seguro social:</h1>
            <h1>{{ $consulta->user->imss }}</h1>

            <h1 class="text-xl font-semibold">Tipo de sangre:</h1>
            <h1>{{ $consulta->user->tipo_de_sangre }}</h1>

            <h1 class="text-xl font-semibold">Alergias:</h1>
            <h1>{{ $consulta->user->alergias }}</h1>

            <h1 class="text-xl font-semibold">Telefono:</h1>
            <h1>{{ $consulta->user->telefono }}</h1>

            <h1 class="text-xl font-semibold">direccion:</h1>
            <h1>{{ $consulta->user->direccion }}</h1>

            <h1 class="text-xl font-semibold">email:</h1>
            <h1>{{ $consulta->user->email }}</h1>
        @endif
    </div>

    <div>
        <h1 class="text-2xl font-bold">Datos generales</h1>
        <h1 class="text-xl font-semibold">ID:</h1>
        <h1>{{ $consulta->id }}</h1>

        <h1 class="text-xl font-semibold">Descripcion:</h1>
        <h1>{{ $consulta->descripcion }}</h1>

        <h1 class="text-xl font-semibold">Medico: </h1>
        <h1>{{ $consulta->medico }}</h1>

        <h1 class="text-xl font-semibold">Diagnostico:</h1>
        <h1>{{ $consulta->diagnostico }}</h1>

        <h1 class="text-xl font-semibold">Fecha de consulta:</h1>
        <h1>{{ $consulta->fecha_consulta }}</h1>

        <h1 class="text-xl font-semibold">Fecha de revision:</h1>
        <h1>{{ $consulta->fecha_revision }}</h1>

        <h1 class="text-xl font-semibold">Estado:</h1>
        <h1>{{ $consulta->estado }}</h1>
    </div>
@endsection
