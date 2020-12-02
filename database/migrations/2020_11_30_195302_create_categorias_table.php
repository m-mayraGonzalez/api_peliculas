<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriasTable extends Migration
{
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->bigIncrements('id_categoria');
            $table->string('nombre',20);
            $table->string('recomendadas',20);
            $table->string('genero',20);
            $table->integer('año');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('categorias');
    }
}
