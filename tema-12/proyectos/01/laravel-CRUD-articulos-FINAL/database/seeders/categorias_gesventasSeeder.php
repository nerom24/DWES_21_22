<?php

namespace Database\Seeders;
use App\Models\Categoria;
use Illuminate\Support\Facades\DB; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class categorias_gesventasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'descripcion' => 'Informática',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categorias')->insert([
            'descripcion' => 'Telefonía',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categorias')->insert([
            'descripcion' => 'Televisión',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categorias')->insert([
            'descripcion' => 'Sonido',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categorias')->insert([
            'descripcion' => 'Almacenamiento',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Categoria::factory(10)->create();


    }
}
