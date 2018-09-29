<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoDevolucionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_devoluciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cliente_id')->unsigned();
            $table->string('direccion');
            $table->integer('almacen_id')->unsigned();
            $table->integer('motivo_id')->unsigned();
            $table->string('fecha_limite');
            $table->timestamps();

            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('almacen_id')->references('id')->on('almacenes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('motivo_id')->references('id')->on('motivos')->onDelete('cascade')->onUpdate('cascade');
        
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido_devoluciones');
    }
}
