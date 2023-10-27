<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Psy\CodeCleaner\ReturnTypePass;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::paginate();

        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function show($id)
    {
        $curso = Curso::find($id);

        return view('cursos.show', compact('curso'));
    }
}
