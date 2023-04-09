@extends('layouts.plantilla')

@section('title','Proyectos')

    <h1>Proyectos</h1>
    <a href="{{route('Projects.create_project')}}">Crear proyecto</a>
    <ul>
         @foreach ($proyecto as $proyectos)
            <li> <a href="{{route('Projects.show_project', $proyectos->id)}}">{{$proyectos->Nombre_proyecto}}</a> </li>
         @endforeach
    </ul>
