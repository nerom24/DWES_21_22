<?php

use Faker\Generator as Faker;

$factory->define(App\Cliente::class, function (Faker $faker) {
    return [
        		'apellidos' => $faker->firstName,
        		'nombre' => $faker->lastName,
        		'telefono' => $faker->e164PhoneNumber,
        		'ciudad' => $faker->city,
        		'dni' => $faker->regexify('\d{8}[trwagmyfpdxbnjzsqvhlcke]'),
        		'email' => $faker->unique()->safeEmail,
        		'fechaalt' => $faker->date($format = 'Y-m-d', $max = 'now'),


    ];
});
