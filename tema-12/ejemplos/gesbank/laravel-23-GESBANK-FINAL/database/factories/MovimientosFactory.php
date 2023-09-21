<?php

use Faker\Generator as Faker;

$factory->define(App\Movimiento::class, function (Faker $faker) {
    
    $idCuentas = App\Movimiento::all()->pluck('id')->toArray();

    return [
        'cuenta_id' => $faker->randomElement($idCuentas),
        'fechaHora' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'tipo' => $faker->randomElement($array = array ('I','R')),
        'cantidad' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10000),
        'concepto' => $faker->text($maxNbChars = 50),
        'numMovimiento' =>$faker->numberBetween($min = 1, $max = 9000),
        'saldo' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100000)

    ];
});
