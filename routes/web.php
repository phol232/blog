<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfesorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Bienvenido al sistema de gestión académica";
});

Route::get('/cursos', [PostController::class, 'index']);

// Módulo de Cursos
Route::prefix('cursos')->group(function () {
    // Listar todos los cursos
    Route::get('/', [CursoController::class, 'index']);
    
    // Crear nuevo curso (formulario) 
    Route::get('/crear', [CursoController::class, 'create']);
    
    // Ver curso con categoría 
    Route::get('/{curso}/{categoria}', [CursoController::class, 'showWithCategory'])
        ->whereIn('curso', ['php', 'laravel', 'vue', 'javascript', 'python']);
    
    // Ver un curso específico
    Route::get('/{curso}', [CursoController::class, 'show'])
        ->whereIn('curso', ['php', 'laravel', 'vue', 'javascript', 'python']);
    
    // Guardar nuevo curso
    Route::post('/', [CursoController::class, 'store']);
    
    // Editar curso (formulario)
    Route::get('/{id}/editar', [CursoController::class, 'edit'])
        ->where('id', '[0-9]+');
    
    // Actualizar curso
    Route::put('/{id}', [CursoController::class, 'update'])
        ->where('id', '[0-9]+');
    
    // Eliminar curso
    Route::delete('/{id}', [CursoController::class, 'destroy'])
        ->where('id', '[0-9]+');
});

// Módulo de Profesores
Route::prefix('profesores')->group(function () {
    Route::get('/', [ProfesorController::class, 'index']);
    
    // Crear nuevo profesor (formulario)
    Route::get('/crear', [ProfesorController::class, 'create']);
    
    // Ver profesor específico
    Route::get('/{nombre}', [ProfesorController::class, 'showByName'])
        ->whereIn('nombre', ['juan', 'maria', 'pedro', 'ana', 'carlos']);
    
    // Guardar nuevo profesor
    Route::post('/', [ProfesorController::class, 'store']);
    
    // Editar profesor (formulario)
    Route::get('/{id}/editar', [ProfesorController::class, 'edit'])
        ->where('id', '[0-9]+');
    
    // Actualizar profesor
    Route::put('/{id}', [ProfesorController::class, 'update'])
        ->where('id', '[0-9]+');
    
    // Eliminar profesor
    Route::delete('/{id}', [ProfesorController::class, 'destroy'])
        ->where('id', '[0-9]+');
});