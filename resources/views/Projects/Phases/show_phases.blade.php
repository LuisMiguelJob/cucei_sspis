@extends('layouts.plantilla')

@section('title','Fases ')

    <h1>Fases {{$proyecto->Fases}}</h1>
    <a href="{{route('Projects.index')}}">Volver a los proyectos</a><br><br>
    <a href="{{route('Projects.show_project', $proyecto->id)}}">Volver a los detalles del proyecto</a>
    