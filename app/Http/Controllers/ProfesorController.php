<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function index()
    {
        return "Listado de todos los profesores";
    }
    public function create()
    {
        return "Formulario para registrar un nuevo profesor";
    }
    public function store(Request $request)
    {
        return "Profesor registrado exitosamente";
    }
    public function showByName($nombre)
    {
        if (!in_array($nombre, ['juan', 'maria', 'pedro', 'ana', 'carlos'])) {
            abort(404);
        }
        return "Información del profesor: $nombre";
    }
    public function edit($id)
    {
        return "Formulario para editar el profesor con ID: $id";
    }
    public function update(Request $request, $id)
    {
        return "Profesor con ID: $id actualizado correctamente";
    }
    public function destroy($id)
    {
        return "Profesor con ID: $id eliminado correctamente";
    }
}