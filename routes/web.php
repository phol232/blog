<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Bienvenido al sistema de gestión académica";
});


Route::get('/cursos', [PostController::class, 'index']);

// Módulo de Cursos
Route::prefix('cursos')->group(function () {
    // Listar todos los cursos
    Route::get('/', function () {
        return "Listado de todos los cursos disponibles";
    });
    
    // Crear nuevo curso (formulario) 
    Route::get('/crear', function () {
        return "Formulario para crear un nuevo curso";
    });
    
    // Ver curso con categoría 
    Route::get('/{curso}/{categoria}', function ($curso, $categoria) {
        if (!in_array($curso, ['php', 'laravel', 'vue', 'javascript', 'python'])) {
            abort(404);
        }
        return "Curso: $curso de la categoría: $categoria";
    })->whereIn('curso', ['php', 'laravel', 'vue', 'javascript', 'python']);
    
    // Ver un curso específico
    Route::get('/{curso}', function ($curso) {
        if (!in_array($curso, ['php', 'laravel', 'vue', 'javascript', 'python'])) {
            abort(404);
        }
        return "Información del curso: $curso";
    })->whereIn('curso', ['php', 'laravel', 'vue', 'javascript', 'python']);
    
    // Guardar nuevo curso
    Route::post('/', function () {
        return "Curso creado exitosamente";
    });
    
    // Editar curso (formulario)
    Route::get('/{id}/editar', function ($id) {
        return "Formulario para editar el curso con ID: $id";
    })->where('id', '[0-9]+');
    
    // Actualizar curso
    Route::put('/{id}', function ($id) {
        return "Curso con ID: $id actualizado correctamente";
    })->where('id', '[0-9]+');
    
    // Eliminar curso
    Route::delete('/{id}', function ($id) {
        return "Curso con ID: $id eliminado correctamente";
    })->where('id', '[0-9]+');
});

// Módulo de Profesores
Route::prefix('profesores')->group(function () {
    Route::get('/', function () {
        return "Listado de todos los profesores";
    });
    
    // Crear nuevo profesor (formulario)
    Route::get('/crear', function () {
        return "Formulario para registrar un nuevo profesor";
    });
    
    // Ver profesor específico
    Route::get('/{nombre}', function ($nombre) {
        if (!in_array($nombre, ['juan', 'maria', 'pedro', 'ana', 'carlos'])) {
            abort(404);
        }
        return "Información del profesor: $nombre";
    })->whereIn('nombre', ['juan', 'maria', 'pedro', 'ana', 'carlos']);
    
    // Guardar nuevo profesor
    Route::post('/', function () {
        return "Profesor registrado exitosamente";
    });
    
    // Editar profesor (formulario)
    Route::get('/{id}/editar', function ($id) {
        return "Formulario para editar el profesor con ID: $id";
    })->where('id', '[0-9]+');
    
    // Actualizar profesor
    Route::put('/{id}', function ($id) {
        return "Profesor con ID: $id actualizado correctamente";
    })->where('id', '[0-9]+');
    
    // Eliminar profesor
    Route::delete('/{id}', function ($id) {
        return "Profesor con ID: $id eliminado correctamente";
    })->where('id', '[0-9]+');
});