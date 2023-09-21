<?php

use Illuminate\Database\Seeder;
use App\Cliente;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	DB::table('clientes')->insert([
			'apellidos' => 'García Pérez',
			'nombre' => 'Antonio',
			'telefono' => '956789456',
			'ciudad' => 'Prado del Rey',
			'dni' => '12456789B',
			'email' => 'tamavex@gamil.com',
			'fechaalt' => '2019-12-12',
		]);

		DB::table('clientes')->insert([
			'apellidos' => 'Tamayo Velázquez',
			'nombre' => 'Pedro',
			'telefono' => '666555989',
			'ciudad' => 'Prado del Rey',
			'dni' => '74932387C',
			'email' => 'pedro@gamil.com',
			'fechaalt' => '2018-11-12',
		]);
        
        factory(Cliente::class, 20)->create();
    }
}

