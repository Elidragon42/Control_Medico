@extends('layouts.app')

@section('title', 'Home')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/estilos-historial-create.css') }}">
@endsection

@section('subtitle', 'Crear nuevo')

@section('boton1')
    <a href="#" class="text-xl font-bold tracking-tight text-gray-900 hover:underline">Ahorita vemos</a>
@endsection

@section('content')
    <div class="max-w-lg mx-auto">
        <div class="text-center mb-8">
            <h1 class="text-2xl font-bold tracking-wider">Nuevo registro médico</h1>
        </div>
        <form action="{{ route('historial.store') }}" method="POST" class="grid grid-cols-2 gap-4">
            @csrf
            <div>
                <label for="numero_empleado" class="block mb-1">Empleado</label>
                <div class="wrapper">
                    <input type="hidden" name="numero_de_empleado">
                    <div class="select-btn">
                        <span>Seleccionar</span>
                        <i class="fa-solid fa-chevron-down" style="color: #000000;"></i>
                    </div>
                    <div class="content">
                        <div class="search">
                            <i class="fa-solid fa-magnifying-glass" style="color: #999;"></i>
                            <input type="text" placeholder="Buscar" name="" id="inputSearch">
                        </div>
                        <ul class="options">
                            @foreach ($empleados as $empleado)
                                <li onclick="updateName(this)" id="data-container" data-empleados="{{ json_encode($empleados) }}">{{ $empleado->numero_de_empleado }} - {{ $empleado->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <input type="hidden" value="" name="numero_de_empleado" id="empleadoSeleccionado">
            </div>
            <div class="col-span-2">
                <label for="descripcion" class="block mb-1">Descripción</label>
                <textarea placeholder="Escriba aquí..." class="w-full resize-none overflow-auto rounded-md" name="descripcion" id="descripcion" rows="5"></textarea>
            </div>
            <div class="col-span-2">
                <label for="diagnostico" class="block mb-1">Diagnóstico médico</label>
                <textarea placeholder="Ingrese el diagnóstico médico aquí..." class="w-full resize-none overflow-auto rounded-md" name="diagnostico" id="diagnostico" rows="5"></textarea>
            </div>
            <div>
                <label for="estado" class="block mb-1">Estado</label>
                <select class="rounded-md" name="estado" id="estado" >
                    <option value="pendiente">Pendiente</option>
                    <option value="realizado">Realizado</option>
                </select>
            </div>
            <div>
                <label for="fechaConsulta" class="block mb-1">Fecha de consulta</label>
                <input class="rounded-md" type="date" name="fecha_consulta" id="fechaConsulta">
            </div>
            <div>
                <label for="fechaRevision" class="block mb-1">Fecha de revisión</label>
                <input class="rounded-md" type="date" name="fecha_revision" id="fechaRevision">
            </div>
            <div>
                <label for="procedimiento" class="block mb-1">Procedimiento médico:</label>
                <select class="rounded-md w-full text-center" name="procedimiento" id="procedimiento" >
                    <option value="">Sin procedimiento</option>
                    @foreach ($procedimientos as $procedimiento)
                        <option value="{{ $procedimiento->id }}">{{ $procedimiento->procedimiento }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-span-2 text-center">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Crear</button>
            </div>
        </form>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/Chosen.js') }}"></script>
@endsection
