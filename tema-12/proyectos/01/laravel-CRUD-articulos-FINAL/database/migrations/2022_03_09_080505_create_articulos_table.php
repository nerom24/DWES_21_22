<?php

/*
    Crear la tabla articulos en gesventas.
*/

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion','100');
            $table->string('modelo', '100');
            $table->unsignedInteger('categoria_id');
            $table->integer('unidades')->default('0');
            $table->char('codigo','10')->unique();
            $table->decimal('precio', 10, 2);
            $table->timestamps();

            $table->foreign('categoria_id')->
                references('id')->
                on('categorias')->
                onDelete('restrict')->
                onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulos');
    }
};
