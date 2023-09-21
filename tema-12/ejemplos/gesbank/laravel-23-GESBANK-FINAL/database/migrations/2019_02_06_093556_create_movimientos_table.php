<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimientos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('numMovimiento');
            $table->unsignedInteger('cuenta_id');
            $table->timestamp('fechaHora')->useCurrent();
            $table->enum('tipo',['I ','R']);
            $table->text('concepto');
            $table->decimal('cantidad',10, 2);
            $table->decimal('saldo',10, 2);
            $table->timestamps();
            $table->foreign('cuenta_id')->references('id')->on('cuentas')->onDelete('restrict')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movimientos');
    }
}
