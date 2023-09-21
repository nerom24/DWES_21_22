<?php

use Illuminate\Database\Seeder;
use App\Movimiento;

class MovimientosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('movimientos')->insert([
			'cuenta_id' => '1',
			'fechaHora' => now(),
			'tipo' => 'I',
			'cantidad' => '2000',
			'numMovimiento' => '1',
			'concepto' => 'compraVehiculo',
			'saldo' => '2000',
		]);

		DB::table('movimientos')->insert([
			'cuenta_id' => '1',
			'fechaHora' => now(),
			'tipo' => 'R',
			'cantidad' => '100',
			'numMovimiento' => '2',
			'concepto' => 'ventaVehiculo',
			'saldo' => '1900',
		]);

		DB::table('movimientos')->insert([
			'cuenta_id' => '2',
			'fechaHora' => now(),
			'tipo' => 'I',
			'cantidad' => '50',
			'numMovimiento' => '3',
			'concepto' => 'cobroFactura',
			'saldo' => '1950',
		]);

		DB::table('movimientos')->insert([
			'cuenta_id' => '2',
			'fechaHora' => now(),
			'tipo' => 'R',
			'cantidad' => '55',
			'numMovimiento' => '4',
			'concepto' => 'pagoMercadona',
			'saldo' => '1895',
		]);


        factory(Movimiento::class, 8)->create();
    }
}
