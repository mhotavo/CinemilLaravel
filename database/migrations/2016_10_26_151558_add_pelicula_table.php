<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPeliculaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('genero', function (Blueprint $table) {
            $table->increments('id_genero');
            $table->string('nom_genero');
            $table->timestamps();
        });

        Schema::create('calidad', function (Blueprint $table) {
            $table->increments('id_calidad');
            $table->string('nom_calidad');
            $table->timestamps();
        });

        Schema::create('fuente', function (Blueprint $table) {
            $table->increments('id_fuente');
            $table->string('nom_fuente');
            $table->timestamps();
        });

        Schema::create('idioma', function (Blueprint $table) {
            $table->increments('id_idioma');
            $table->string('nom_idioma');
            $table->timestamps();
        });

        Schema::create('pais', function (Blueprint $table) {
            $table->increments('id_pais');
            $table->string('nom_pais');
            $table->timestamps();
        });

        Schema::create('resolucion', function (Blueprint $table) {
            $table->increments('id_resolucion');
            $table->string('nom_resolucion');
            $table->timestamps();
        });

        Schema::create('servidor', function (Blueprint $table) {
            $table->increments('id_servidor');
            $table->string('nom_servidor');
            $table->timestamps();
        });

        Schema::create('productora', function (Blueprint $table) {
            $table->increments('id_productora');
            $table->string('nom_productora');
            $table->timestamps();
        });


        Schema::create('pelicula', function (Blueprint $table) {
            $table->increments('id_pelicula');
            $table->string('titulo_oficial');
            $table->string('titulo_latino');
            $table->string('director');
            $table->text('reparto');
            $table->text('sinopsis');
            $table->string('duracion');
            $table->date('fecha_estreno');
            $table->string('subtitulos');
            $table->string('peso');
            $table->text('trailer');
            $table->text('portada');
            $table->text('capturas');
            $table->string('clasificacion');
            $table->integer('valoracion');
            $table->integer('id_productora')->unsigned();
            $table->integer('id_calidad')->unsigned();
            $table->integer('id_idioma')->unsigned();
            $table->integer('id_genero')->unsigned();
            $table->integer('id_pais')->unsigned();
            $table->integer('id_resolucion')->unsigned();
            $table->timestamps();

            $table->foreign('id_productora')->references('id_productora')->on('productora');
            $table->foreign('id_calidad')->references('id_calidad')->on('calidad');
            $table->foreign('id_idioma')->references('id_idioma')->on('idioma');
            $table->foreign('id_genero')->references('id_genero')->on('genero');
            $table->foreign('id_pais')->references('id_pais')->on('pais');
            $table->foreign('id_resolucion')->references('id_resolucion')->on('resolucion');
        });

        Schema::create('enlace', function (Blueprint $table) {
            $table->increments('id_enlace');
            $table->string('tipo_enlace');
            $table->integer('id_pelicula')->unsigned();
            $table->integer('id_servidor')->unsigned();
            $table->integer('id_fuente')->unsigned();
            $table->integer('enlace');
            $table->timestamps();

            $table->foreign('id_pelicula')->references('id_pelicula')->on('pelicula');
            $table->foreign('id_servidor')->references('id_servidor')->on('servidor');
            $table->foreign('id_fuente')->references('id_fuente')->on('fuente');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genero');
        Schema::dropIfExists('enlace');
        Schema::dropIfExists('fuente');
        Schema::dropIfExists('pelicula');
        Schema::dropIfExists('calidad');
        Schema::dropIfExists('idioma');
        Schema::dropIfExists('pais');
        Schema::dropIfExists('productora');
        Schema::dropIfExists('resolucion');
        Schema::dropIfExists('servidor');
    }
}
