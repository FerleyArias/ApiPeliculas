<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamoPeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamo_peliculas', function (Blueprint $table) {
            $table->id();
            $table->integer("id_cliente")->references("id")->on("clientes");
            $table->integer("id_pelicula")->references("id")->on("peliculas");
            $table->date("fecha");
            $table->date("fecha_devolucion");
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
        Schema::dropIfExists('prestamo_peliculas');
    }
}
