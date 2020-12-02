<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestosTable extends Migration
{

    public function up()
    {
        Schema::create('prestos', function (Blueprint $table) {
            $table->bigIncrements('id_presto');
            $table->unsignedBigInteger('pr_cliente');
            $table->unsignedBigInteger('pr_pelicula');
            $table->string('fecha_prestada',45);
            $table->string('fecha_devolucion',60);
            $table->string('estadoPelicula',45);
            $table->foreign('pr_cliente')->references('id_cliente')->on('clientes');
            $table->foreign('pr_pelicula')->references('id_pelicula')->on('peliculas');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('prestos');
    }
}
