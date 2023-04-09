@extends('layouts.plantilla')

@section('title',' Crear proyecto')

@section('content')
<h1>Crear proyecto</h1>
<a href="{{route('Projects.index')}}">volver a los proyectos</a><br><br>

<form action="{{route('Projects.store')}}" method="POST">

    @csrf

    <label>Nombre del proyecto: <br>
        <input type="text" name="Nombre_proyecto" value="{{old('Nombre_proyecto')}}">
    </label>
    @error('Nombre_proyecto')
    <br><small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>Número de fases del proyecto:<br> 
        <input type="number" min="1" name="Fases" value="{{old('Fases')}}">
    </label>
    @error('Fases')
    <br><small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>ID del lider del proyecto:<br> 
        <input type="text" name="Lider_proyecto" value="{{old('Lider_proyecto')}}">
    </label>
    @error('Lider_proyecto')
    <br><small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>Fecha inicio del proyecto:<br> 
        <input type="date" name="Fecha_inicio" value="{{old('Fecha_inicio')}}">
    </label>
    @error('Fecha_inicio')
    <br><small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>Fecha final del proyecto:<br> 
        <input type="date" name="Fecha_final" value="{{old('Fecha_final')}}">
    </label>
    @error('Fecha_final')
    <br><small>*{{$message}}</small>
    @enderror
    <br><br>
    <button type="submit">Crear proyecto</button>
</form>
@endsection
