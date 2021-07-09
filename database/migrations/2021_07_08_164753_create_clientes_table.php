<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id', 50);
            $table->string('Nombre', 15);
            $table->string('Apellido_Paterno', 10);
            $table->string('Apellido_Materno',10);
            $table->string('Telefono', 10);
            $table->string('Tipo', 200);
            $table->string('Codigo_Cliente', 10);
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
        Schema::dropIfExists('clientes');
    }
}
