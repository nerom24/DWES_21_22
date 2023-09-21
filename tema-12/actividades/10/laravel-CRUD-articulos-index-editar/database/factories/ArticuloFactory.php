<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Articulo>
 */
class ArticuloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'descripcion'=>$this->faker->text($maxNbChars = 100),
            'modelo'=>$this->faker->name(),
            'categoria_id'=>$this->faker->numberBetween($min = 1, $max = 5) ,
            'unidades'=>$this->faker->numberBetween($min = 0, $max = 600),
            'codigo' => $this->faker->unique()->text('10'),
            'precio'=> $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 2000000),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
