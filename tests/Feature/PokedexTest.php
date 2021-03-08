<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PokedexTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_home_pokedex()
    {
        $response = $this->get('/pokemon');

        $response->assertStatus(200)->assertSee('ok');
    }
}
