<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;//Controller to use "StoreCurso"
use App\Models\proyectos;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class cursoController extends Controller
{
    public function index(){
        $proyecto = proyectos::orderBy('id', 'desc')->paginate();
        return view('Projects.index', compact('proyecto'));
    }

    public function create_project(){
        return view('Projects.create_project');
    }

    public function show_project($id){
        $proyecto = proyectos::find($id);
        return view('Projects.show_project', ['proyecto'=>$proyecto]);
    }

    public function store(Request $request){
        $project = new proyectos();

        $project->Nombre_proyecto = $request->Nombre_proyecto;
        $project->Fases = $request->Fases;
        $project->Lider_proyecto = $request->Lider_proyecto;
        $project->Fecha_inicio = $request->Fecha_inicio;
        $project->Fecha_final = $request->Fecha_final;
        $project->Progreso = 0;

        $project->save();

        return redirect()->route('Projects.show_project', $project);
    }

    public function show_phases($id){
        $proyecto = proyectos::find($id);
        return view('Projects.Phases.show_phases', ['proyecto'=>$proyecto]);
    }
}
