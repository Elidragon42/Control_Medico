@extends('layouts.app')

@section('title', 'Editar')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/estilos-historial-create.css') }}">
@endsection

@section('subtitle', 'Editar datos')

@section('content')
    <form action="{{ route('historial.update', $consulta->id) }}" method="POST">
        @csrf
        <input type="hidden" name="medico" value="{{ $consulta->medico }}">
        <div class="grid grid-cols-4">
            <div class="row-span-2">

                <input type="hidden" value="{{ $consulta->numero_de_empleado }}" name="numero_de_empleado"
                    id="empleadoSeleccionado">
            </div>
            <div class="col-span-3">
                <label for="">Descripcion</label>
                <textarea placeholder="Escriba aqui..." class="w-full resize-none overflow-auto" name="descripcion" id="descripcion"
                    rows="5">{{ $consulta->descripcion }}</textarea>
                @error('fecha_consulta')
                    <p class="text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-start-2 col-span-3 mt-3">
                <label for="">Diagnostico</label>
                <textarea placeholder="Escriba aqui..." class="w-full resize-none overflow-auto" name="diagnostico" id="diagnostico"
                    rows="5">{{ $consulta->diagnostico }}</textarea>
                @error('fecha_consulta')
                    <p class="text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="estado">estado</label>
                <select class="rounded-md" name="estado" id="estado">
                    <option value="pendiente">pendiente</option>
                    <option value="realizado">realizado</option>
                </select>
                @error('fecha_consulta')
                    <p class="text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="fechaConsulta">Fecha de consulta</label>
                <input class="rounded-md" type="date" value="{{ $consulta->fecha_consulta }}" name="fecha_consulta"
                    id="">
                @error('fecha_consulta')
                    <p class="text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="fechaRevision">fecha de revision</label>
                <input class="rounded-md" type="date" value="{{ $consulta->fecha_revision }}" name="fecha_revision"
                    id="">
                @error('fecha_consulta')
                    <p class="text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="procedimiento" class="block mb-1">Procedimiento médico:</label>
                <select class="rounded-md w-full text-center" name="procedimiento" id="procedimiento">
                    <option value="">Sin procedimiento</option>
                    @foreach ($procedimientos as $procedimiento)
                        <option value="{{ $procedimiento->id }}">{{ $procedimiento->procedimiento }}</option>
                    @endforeach
                </select>
                @error('fecha_consulta')
                    <p class="text-red-600">{{ $message }}</p>
                @enderror

            </div>
            <div>
                <input class="border-black border bg-white py-2 px-10 cursor-pointer rounded-md" type="submit"
                    value="Editar">
            </div>
        </div>
    </form>
@endsection

@section('script')
    <script src="{{ asset('js/Chosen.js') }}"></script>
@endsection
