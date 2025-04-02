<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CursosTest extends TestCase
{
    public function test_puede_ver_listado_de_cursos()
    {
        $response = $this->get('/cursos');
        $response->assertStatus(200);
        $response->assertSeeText('Listado de todos los cursos disponibles');
    }
    public function test_puede_ver_curso_especifico()
    {
        $response = $this->get('/cursos/laravel');
        $response->assertStatus(200);
        $response->assertSeeText('Información del curso: laravel');
    }

    public function test_puede_ver_curso_con_categoria()
    {
        $response = $this->get('/cursos/laravel/backend');
        $response->assertStatus(200);
        $response->assertSeeText('Curso: laravel de la categoría: backend');
    }
    public function test_rechaza_cursos_no_validos()
    {
        $response = $this->get('/cursos/curso-inexistente');
        $response->assertStatus(404);
    }
    public function test_puede_ver_formulario_creacion()
    {
        $response = $this->get('/cursos/crear');
        $response->assertStatus(200);
        $response->assertSeeText('Formulario para crear un nuevo curso');
    }
}