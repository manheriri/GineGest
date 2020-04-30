<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePregnanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pregnancies', function (Blueprint $table) {
            //$table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
            $table->date('fechaPrevista')->nullable();
            $table->date('fechaInicio');
            $table->date('fechaFinal')->nullable();
            $table->unsignedBigInteger('paciente_id')->nullable();
            $table->foreign('paciente_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pregnancies');
    }
}
