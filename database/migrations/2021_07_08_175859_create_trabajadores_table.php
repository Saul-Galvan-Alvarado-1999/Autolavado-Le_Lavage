<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrabajadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajadores', function (Blueprint $table) {
            $table->increments('id', 50);
            $table->string('Nombre', 15);
            $table->string('Apellido_Paterno', 10);
            $table->string('Apellido_Materno',10);
            $table->string('Telefono', 10);
            $table->string('Direccion', 200);
            $table->string('Codigo_Trabajador', 10);
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
        Schema::dropIfExists('trabajadores');
    }
}
