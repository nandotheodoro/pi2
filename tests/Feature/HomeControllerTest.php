<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Model\Cliente;
use Str, Session;

class HomeControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /*public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }*/

    public function test_enviar_mensagem() {
        $email = Str::random(10) . '@' . Str::random(6) . '.' . Str::random(3);
        $nome = Str::random(10);
        $mensagem = Str::random(50);
        $response = $this->post('/', ['email-mensagem'=>$email, 'nome-mensagem'=>$nome, 'mensagem'=>$mensagem]);
        $response->assertStatus(201);
    }
}
