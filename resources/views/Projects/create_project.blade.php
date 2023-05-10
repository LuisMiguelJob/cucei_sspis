@extends('layouts.plantilla')

@section('title',' Crear proyecto')

@section('content')

<h1>Crear proyecto</h1>
<a href="{{route('Projects.index')}}">volver a los proyectos</a><br><br>

<button type="submit">Crear proyecto</button>

<form action="{{route('Projects.store')}}" method="POST">

    @csrf

    <label>Nombre del proyecto: 
        <input type="text" name="Nombre_proyecto" value="{{old('Nombre_proyecto')}}">
    </label>
    @error('Nombre_proyecto')
    <br><small>*{{$message}}</small>
    @enderror

    <label>Número de fases del proyecto:
        <input type="number" min="1" name="Fases" value=""> 
    </label>
    @error('Fases')
    <br><small>*{{$message}}</small>
    @enderror

<label>ID del lider del proyecto:
    <input type="text" name="Lider_proyecto" value="{{old('Lider_proyecto')}}">
</label>
@error('Lider_proyecto')
<br><small>*{{$message}}</small>
@enderror
<br><br>

    <button type="button" onclick="copyORG()">Agregar fase</button>
    <div id="Pfase" style="background-color: cornflowerblue; marging: 10px; position: relative; width:50%; display: none">
        <h2>Fase <span id="PnFase"></span></h2><br>
        <label>Nombre de la fase:<br>
        <input type="text" name="Nombre_fase" value=""><br>
        <label>Descripcion de la fase:<br>
        <textarea name="description" rows="5">{{old('description')}}</textarea><br>
        <button type="button" onclick="createWork()">Hacer tarea</button>
    </div><br> 

        <div id="Ptarea" style="background-color: rgb(16, 139, 65); marging: 10px; position: relative; width:50%; display: none">
            <h2><span id="PnTarea"></span></h2>   
            <label>Nombre de la tarea:<br>
                <input type="text" name="Nombre_fase" value=""><br>
            <label>Descripcion de la fase:<br>
                <textarea name="description" rows="5">{{old('description')}}</textarea><br>
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
        

    </div><br>
    
</form>

<script type="text/javascript">
    var i = 0;
    var x = 0;
    
    function copyORG() {
        x = 0;
        document.getElementById("PnTarea").innerHTML = x+1;
        var original = document.getElementById('Pfase');
        var clone = original.cloneNode(true);
        clone.id = "F" + ++i; // there can only be one element with an ID
        clone.style.display = "block";
        document.getElementById("PnFase").innerHTML = i+1;
        original.parentNode.appendChild(clone);
    }

    function createWork() {
        var original = document.getElementById('Ptarea');
        var clone = original.cloneNode(true);
        clone.id = "T" + ++x + "F" + i; // there can only be one element with an ID
        clone.style.display = "block";
        document.getElementById("PnTarea").innerHTML = x+1;
        original.parentNode.appendChild(clone);
    }

    function write() {
        document.getElementById("PnFase").innerHTML = i+1;
        document.getElementById("PnTarea").innerHTML = x+1;
    }
    window.onload = write;
</script>
@endsection
