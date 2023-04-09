@extends('layouts.plantilla')

@section('title','Proyecto '.$proyecto->Nombre_proyecto)

@section('content')
    <h1>Proyecto {{$proyecto->Nombre_proyecto}}</h1>
    <a href="{{route('Projects.index')}}">volver a los proyectos</a><br><br>
    
    <p><strong><a href="{{route('Projects.Phases.show_project', $proyecto->id)}}">Fases: {{$proyecto->Fases}}</a></strong></p>
    <p>Lider del proyecto: {{$proyecto->Lider_proyecto}}</p>
    <p>Progreso: {{$proyecto->Progreso}}</p>
    <p>Fechas: {{$proyecto->Fecha_inicio}} a {{$proyecto->Fecha_final}}</p>
@endsection