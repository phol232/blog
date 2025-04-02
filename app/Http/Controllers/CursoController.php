<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return "Listado de todos los cursos disponibles";
    }
    public function create()
    {
        return "Formulario para crear un nuevo curso";
    }
    public function store(Request $request)
    {
        return "Curso creado exitosamente";
    }
    public function show($curso)
    {
        if (!in_array($curso, ['php', 'laravel', 'vue', 'javascript', 'python'])) {
            abort(404);
        }
        return "Información del curso: $curso";
    }
    public function edit($id)
    {
        return "Formulario para editar el curso con ID: $id";
    }
    public function update(Request $request, $id)
    {
        return "Curso con ID: $id actualizado correctamente";
    }
    public function destroy($id)
    {
        return "Curso con ID: $id eliminado correctamente";
    }
    public function showWithCategory($curso, $categoria)
    {
        if (!in_array($curso, ['php', 'laravel', 'vue', 'javascript', 'python'])) {
            abort(404);
        }
        return "Curso: $curso de la categoría: $categoria";
    }
}