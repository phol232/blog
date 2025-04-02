<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProfesoresTest extends TestCase
{
    public function test_puede_ver_listado_de_profesores()
    {
        $response = $this->get('/profesores');
        $response->assertStatus(200);
        $response->assertSeeText('Listado de todos los profesores');
    }
    public function test_puede_ver_profesor_especifico()
    {
        $response = $this->get('/profesores/maria');
        $response->assertStatus(200);
        $response->assertSeeText('Información del profesor: maria');
    }
    public function test_rechaza_profesores_no_validos()
    {
        $response = $this->get('/profesores/profesor-inexistente');
        $response->assertStatus(404);
    }
    public function test_puede_ver_formulario_creacion()
    {
        $response = $this->get('/profesores/crear');
        $response->assertStatus(200);
        $response->assertSeeText('Formulario para registrar un nuevo profesor');
    }
}