<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponsablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsables', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_padres')->unsigned();
            $table->string('nombre');
            $table->string('ap_mat');
            $table->string('ap_pat');
            $table->string('username');
            $table->string('password');
            $table->integer('edad');
            $table->string('parentesco');
            $table->char('sexo',1);
            $table->char('ine',10);
            $table->timestamps();
            $table->foreign('id_padres')->references('id')->on('padres')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('responsables');
    }
}
