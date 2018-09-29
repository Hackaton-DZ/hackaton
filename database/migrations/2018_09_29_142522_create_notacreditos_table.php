<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotacreditosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notacreditos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('devolucion_id')->unsigned();
            $table->decimal('monto',5);
            $table->integer('venta_id')->unsigned();

            $table->foreign('venta_id')->references('id')->on('ventas')->onDelete('cascade');
            $table->foreign('devolucion_id')->references('id')->on('devoluciones')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notacreditos');
    }
}
