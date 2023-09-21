<?php

use Illuminate\Database\Seeder;
use App\Cuenta;

class CuentasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('cuentas')->insert([
			'iban' => '123456',
			'cliente_id' => '1',
			'fechaAlta' => '1981/02/06',
			'saldo' => '15000',
			'fechaUMov' => '2000-02-20',
			'numMvtos' => '12',
		]);

		DB::table('cuentas')->insert([
			'iban' => '323456',
			'cliente_id' => '2',
			'fechaAlta' => '1989-12-15',
			'saldo' => '3000',
			'fechaUMov' => '1999-02-10',
			'numMvtos' => '10',
		]);

        factory(Cuenta::class, 4)->create();
    }
}