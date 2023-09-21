<?php

use Faker\Generator as Faker;


$factory->define(App\Cuenta::class, function (Faker $faker) {
    
    $userIds = App\Cliente::all()->pluck('id')->toArray();

    return [
        'iban' => $faker->unique()->regexify('[A-Z]{2}\d{22}'),
        'cliente_id' => $faker->randomElement($userIds),
        'fechaAlta' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'saldo' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 200000),
        'fechaUMov' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'numMvtos' => $faker->numberBetween($min = 1, $max = 200),

    ];
});
