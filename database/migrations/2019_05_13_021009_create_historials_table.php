<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historials', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_padres')->unsigned();
            $table->integer('id_alumno')->unsigned();
            $table->date('fecha');
            $table->dateTime('Hora_LLegada');
            $table->dateTime('Hora_Salida');
            $table->foreign('id_padres')->references('id')->on('padres')->onDelete('cascade');
            $table->foreign('id_alumno')->references('id')->on('alumnos')->onDelete('cascade');
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
        Schema::dropIfExists('historials');
    }
}
