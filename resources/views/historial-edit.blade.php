@extends('layouts.app')

@section('title', 'Editar')



@section('subtitle', 'Editar datos')

@section('content')
<form action="{{route('historial.store')}}" method="POST">
    @csrf
    <input type="hidden" name="medico" value="pancho">
    <div class="grid grid-cols-4">
        <div class="row-span-2">
           
            <input type="hidden" value="" name="numero_de_empleado" id="empleadoSeleccionado">
        </div>
        <div class="col-span-3">
            <label for="">Descripcion</label>
            <textarea placeholder="Escriba aqui..." class="w-full resize-none overflow-auto" name="descripcion" id="descripcion" rows="5">{{$consulta->descripcion}}</textarea>
        </div>
        <div class="col-start-2 col-span-3 mt-3">
            <label for="">Diagnostico</label>
            <textarea placeholder="Escriba aqui..." class="w-full resize-none overflow-auto" name="diagnostico" id="diagnostico" rows="5">{{$consulta->diagnostico}}</textarea>
        </div>
        <div>
            <label for="estado">estado</label>
            <select class="rounded-md" name="estado" id="estado" >
                <option value="pendiente">pendiente</option>
                <option value="realizado">realizado</option>
            </select>
        </div>
        <div>
            <label for="fechaConsulta">Fecha de consulta</label>
            <input class="rounded-md" type="date" value="{{$consulta->fecha_consulta}}" name="fecha_consulta" id="">
        </div>
        <div>
            <label for="fechaRevision">fecha de revision</label>
            <input class="rounded-md" type="date" value="{{$consulta->fecha_revision}}" name="fecha_revision" id="">
        </div>
        <div>
            <input class="border-black border bg-white py-2 px-10 cursor-pointer rounded-md" type="submit" value="Crear">
        </div>
    </div>
</form>
@endsection

