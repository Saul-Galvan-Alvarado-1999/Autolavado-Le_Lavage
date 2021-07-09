<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->increments('id', 50);
            $table->date('Fecha', 50);
            $table->time('Hora');
            $table->string('Codigo_Trabajador', 10);
            $table->string('Codigo_Cajero', 10);
            $table->string('Codigo_Servicio', 10);
            $table->string('Codigo_Vehiculo', 10);
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
        Schema::dropIfExists('registros');
    }
}
