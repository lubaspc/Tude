<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePadresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('padres', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('ap_Mat');
            $table->string('ap_Pat');
            $table->string('username')->unique();
            $table->string('password');
            $table->integer('edad');
            $table->string('parentesco');
            $table->char('sexo',1);
            $table->char('ine',10);
            $table->string('foto');
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
        Schema::dropIfExists('padres');
    }
}
