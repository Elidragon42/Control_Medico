@extends('layouts.app')

@section('title', 'Home')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/estilos-historial-create.css') }}">
@endsection

@section('subtitle', 'crear nuevo')

@section('boton1')
    <a href="#" class="text-xl font-bold tracking-tight text-gray-900 hover:underline">Ahorita vemos</a>
@endsection


@section('content')
    <div class="text-center">
        <div class="mb-10 pb-2 pt-2 border-b-2">
            <h1 class="text-2xl font-bold tracking-wider">Nuevo registro medico</h1>
        </div>
        <div>
            <form action="{{route('historial.store')}}" method="POST">
                @csrf
                <input type="hidden" name="medico" value="pancho">
                <div class="grid grid-cols-4">
                    <div class="row-span-2">
                        <div class="wrapper">
                            <input type="hidden" name="numero_de_empleado">
                            <div class="select-btn">
                                <span>Empleado</span>
                                <i class="fa-solid fa-chevron-down" style="color: #000000;"></i>
                            </div>
                            <div class="content">
                                <div class="search">
                                    <i class="fa-solid fa-magnifying-glass" style="color: #999;"></i>
                                    <input type="text" placeholder="Buscar" name="" id="inputSearch">
                                </div>
                                <ul class="options">
                                    @foreach ($empleados as $empleado)
                                        <li onclick="updateName(this)" id="data-container" data-empleados="{{json_encode($empleados)}}">{{$empleado->numero_de_empleado}}-{{$empleado->name}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <input type="hidden" value="" name="numero_de_empleado" id="empleadoSeleccionado">
                    </div>
                    <div class="col-span-3">
                        <label for="">Descripcion</label>
                        <textarea placeholder="Escriba aqui..." class="w-full resize-none overflow-auto" name="descripcion" id="descripcion" rows="5"></textarea>
                    </div>
                    <div class="col-start-2 col-span-3 mt-3">
                        <label for="">Diagnostico</label>
                        <textarea placeholder="Escriba aqui..." class="w-full resize-none overflow-auto" name="diagnostico" id="diagnostico" rows="5"></textarea>
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
                        <input class="rounded-md" type="date" name="fecha_consulta" id="">
                    </div>
                    <div>
                        <label for="fechaRevision">fecha de revision</label>
                        <input class="rounded-md" type="date" name="fecha_revision" id="">
                    </div>
                    <div>
                        <input class="border-black border bg-white py-2 px-10 cursor-pointer rounded-md" type="submit" value="Crear">
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection

@section('script')
    <script src="{{asset('js/Chosen.js')}}"></script>
@endsection
