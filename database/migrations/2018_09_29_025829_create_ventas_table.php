<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('trnTechKey');
            $table->datetime('dcompra');
            $table->integer('nterminal');
            $table->integer('nsecuencia');
            $table->integer('orgLvlNumber');
            $table->string('prdUpc');
            $table->string('prdLvlNumber');
            $table->string('prdFullName');
            $table->integer('qcantidad');
            $table->decimal('mventa',6);
            $table->string('documento');
            $table->string('apellidos')->nullable();
            $table->string('nombreCliente')->nullable();
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
        Schema::dropIfExists('ventas');
    }
}
