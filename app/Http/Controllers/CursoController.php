<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use Illuminate\Http\Request;
use Psy\CodeCleaner\ReturnTypePass;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::orderBy('id', 'desc')->paginate();

        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(StoreCurso $request)
    {
        /* Se cambian a Request/StoreCurso.php */
        // $request->validate([
        //     // 'name' => ['required', 'min:3'],
        //     'name' => 'required|min:3',
        //     'descripcion' => 'required',
        //     'categoria' => 'required',
        // ]);

        /* Creación de curso asignando valores 1 por 1 */
        // $curso = new Curso();

        // $curso->name = $request->name;
        // $curso->descripcion = $request->descripcion;
        // $curso->categoria = $request->categoria;

        // $curso->save();

        /* Segunda manera de crear un registro */
        // $curso = Curso::create([
        //     'name' => $request->name,
        //     'descripcion' => $request->descripcion,
        //     'categoria' => $request->categoria,
        // ]);

        /* Creación de registro en una sola línea */
        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show', $curso);
    }

    public function show(Curso $curso)
    {
        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso)
    {
        // $curso = Curso::find($id);

        // return $curso;
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso)
    {
        $request->validate([
            // 'name' => ['required', 'min:3'],
            'name' => 'required|min:3',
            'descripcion' => 'required',
            'categoria' => 'required',
            'slug' => 'required|unique:cursos,slug,' . $curso->id,
        ], [
            'descripcion.required' => 'La descripcion es obligatoria',
        ], [
            'name' => 'nombre del curso',
        ]);

        // $curso->name = $request->name;
        // $curso->descripcion = $request->descripcion;
        // $curso->categoria = $request->categoria;

        // $curso->save();

        $curso->update($request->all());

        return redirect()->route('cursos.show', $curso);
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();

        return redirect()->route('cursos.index');
    }
}
