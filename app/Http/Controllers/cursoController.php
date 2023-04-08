<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;//Controller to use "StoreCurso"
use App\Models\Curso;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class cursoController extends Controller
{
    public function index(){

        return view('Make_proyects.index');
    }

   
}
