<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_padres')->unsigned();
            $table->string('nombre');
            $table->string('ap_mat');
            $table->string('ap_pat');
            $table->integer('id_grupo')->unsigned();
            $table->foreign('id_padres')->references('id')->on('padres')->onDelete('cascade');
            $table->foreign('id_grupo')->references('id')->on('grupos')->onDelete('cascade');
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
        Schema::dropIfExists('alumnos');
    }
}
