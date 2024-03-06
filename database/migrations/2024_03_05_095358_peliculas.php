<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Peliculas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('peliculas', function(Blueprint $table){
            $table->increments('cod_pelicula');
            $table->string('titulo');
            $table->string('genero');
            $table->text('descripcion')->nullable();
            $table->string('imagen');
            $table->unsignedBigInteger('user_id')->default(1);
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('peliculas');
    }
}
