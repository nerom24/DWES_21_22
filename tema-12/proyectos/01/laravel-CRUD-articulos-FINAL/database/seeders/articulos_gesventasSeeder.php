<?php

namespace Database\Seeders;
use App\Models\Articulo;
use Illuminate\Support\Facades\DB; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class articulos_gesventasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

        DB::table('articulos')->insert([
            'descripcion'=>'Portátil HP MD12345',
            'modelo'=>'HP 15-1234-20',
            'categoria_id'=> 1,
            'unidades'=> 12,
            'codigo' => '1111111111',
            'precio'=> 550.50,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('articulos')->insert([
            'descripcion'=>'Tablet - Samsung Galaxy Tab A (2019)',
            'modelo'=>'Exynos',
            'categoria_id'=> 5,
            'unidades'=> 200,
            'codigo' => '2111111111',
            'precio'=> 300,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('articulos')->insert([
            'descripcion'=>'Impresora multifunción - HP',
            'modelo'=>'DeskJet 3762',
            'categoria_id'=> 4,
            'unidades'=> 2000,
            'codigo' => '3111111111',
            'precio'=> 69,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('articulos')->insert([
            'descripcion'=>'TV LED 40" - Thomson 40FE5606 - Full HD',
            'modelo'=>'Thomson 40FE5606',
            'categoria_id'=> 3,
            'unidades'=> 300,
            'codigo' => '4111111111',
            'precio'=> 259,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('articulos')->insert([
            'descripcion'=>'PC Sobremesa - Acer Aspire XC-830',
            'modelo'=>'Acer Aspire XC-830',
            'categoria_id'=> 1,
            'unidades'=> 20,
            'codigo' => '5111111111',
            'precio'=> 329,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Articulo::factory(100)->create();


    }
}
