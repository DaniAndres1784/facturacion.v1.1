<?php

namespace Tests\Browser;

//use Illuminate\Foundation\Testing\DatabaseMigrations;
//use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
//use Illuminate\Foundation\Testing\WithoutMiddleware;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ListadoSuscriptoresTest extends DuskTestCase
{
     use RefreshDatabase;
    //use DatabaseMigrations;
    
    //use DatabaseTransactions;

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
    }


    public function testListado()
    {

        $suscriptor = factory(\App\Suscriptor::class)->create([
            'nombres'=>'Jose Daniel',
            'apellidos'=>'Jimenez Diaz',
            'cedula'=>'123'
        ]);
        $this->browse(function(Browser $browser){
            $browser->visit('admin/suscriptores/inicio')
                    ->assertSee('Usuarios Servicios Publicos El Tambo-N')
                    ->with('#tabla-suscriptores',function($tabla){
                        $tabla->assertSee('Jose Daniel')
                              ->assertSee('Jimenez Diaz')
                              ->assertSee('123');                             
                        
                    });

        });
    }
   
}
