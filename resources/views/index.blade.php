@extends('layouts.app')

@section('title', 'Home')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/estilos-index.css') }}">
@endsection

@section('subtitle', 'index')

@section('boton1')
    <a href="{{ route('historial.create') }}" class="text-xl font-bold tracking-tight text-gray-900 hover:underline">Nuevo
        registro</a>
@endsection

@section('content')
    <div class="flex justify-between">
        <form action="{{ route('consultas.index') }}" method="GET" class="form-filtro" id="filtroForm">
            <label for="filtro" class="filtro-label">Filtrar por:</label>
            <select name="filtro" id="filtro" onchange="document.getElementById('filtroForm').submit()">
                <option value="todos" @if ($filtro == 'todos') selected @endif>Todos</option>
                <option value="realizado" @if ($filtro == 'realizado') selected @endif>Realizado</option>
                <option value="pendiente" @if ($filtro == 'pendiente') selected @endif>Pendiente</option>
            </select>
        </form>

    </div>
 
    <dialog id="ModalSesion" class="rounded-md border shadow-sm border-gray-500 h-2/3 w-2/3">
        <form action="" method="post" class=" pt-4 grid justify-items-center">
            <input type="number" class="appearance-none w-3/4 px-1 py-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" style="-webkit-appearance: none;"  name="" id="">
        </form>
        <h2>Esto es de mientras nomas </h2>
        <p>ya quedaron las flechitas jaja</p>
        <button onclick="window.ModalSesion.close();" class="bg-red-500">Cerrar</button>
     </dialog>

    <table class="table">
        <thead>
            <tr>
                <th class="">ID</th>
                <th class="">No.Empleado</th>
                <th class="">Descripción</th>
                <th class="">Médico</th>
                <th class="">Diagnóstico</th>
                <th class="">Fecha de Consulta</th>
                <th class="">Fecha de Revisión</th>
                <th class="">Estado</th>
            </tr>
        </thead>

        <tbody>
            @if ($consultas->isEmpty())
                <tr>
                    <td colspan="8" style="text-align: center; background-color: #f2ecec; color: red;">No información :v
                    </td>
                </tr>
            @else
                @foreach ($consultas as $consulta)
                    <tr>
                        <td class=""><a href="{{ route('historial.show', $consulta->id) }}"
                                class="hover:underline">{{ $consulta->id }}</a></td>
                        <td class=""><a href="#" class="hover:underline">{{ $consulta->numero_de_empleado }}</a>
                        </td>
                        <td class="">{{ $consulta->descripcion }}</td>
                        <td class="">{{ $consulta->medico }}</td>
                        <td class="">{{ $consulta->diagnostico }}</td>
                        <td class="">{{ $consulta->fecha_consulta }}</td>
                        <td class="">{{ $consulta->fecha_revision }}</td>
                        <td class="" {{ $consulta->estado == 'Realizado' ? 'text-success' : 'text-danger' }}">
                            {{ $consulta->estado }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>

    {{ $consultas->links() }}

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#filtro').change(function() {
                $('#filtroForm').submit();
            });
        });
    </script>

@endsection
