<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->increments('id', 50);
            $table->string('Matricula', 10);
            $table->string('Tipo', 50);
            $table->string('Marca', 10);
            $table->string('Modelo', 10);
            $table->string('Color', 10);
            $table->string('Codigo_Cliente', 10);
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
        Schema::dropIfExists('vehiculos');
    }
}
