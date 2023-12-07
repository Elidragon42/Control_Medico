@extends('layouts.app')

@section('title', 'Editar')

@section('subtitle', 'Editar datos')

@section('content')
    <form action="{{route('procedimientos.update', $consulta->id)}}" method="post">
        @csrf
        <input type="text" name="procedimiento" value="{{ $consulta->procedimiento }}" id="">
        <textarea name="descripcion" id="" cols="30" rows="10">{{ $consulta->descripcion }}</textarea>
        <button type="submit">Confirmar</button>
    </form>
@endsection
