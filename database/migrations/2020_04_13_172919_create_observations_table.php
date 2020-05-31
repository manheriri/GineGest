<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('observations',
            function (Blueprint $table) {
                //$table->engine = 'InnoDB';
                $table->increments('id');
                $table->timestamps();


                $table->string('comments')->nullable();

                $table->string('symptom');




                $table->unsignedBigInteger('paciente_id');
                $table->foreign('paciente_id')->references('id')->on('users')->onDelete('cascade');
                $table->unsignedBigInteger('personalSanitario_id');
                $table->foreign('personalSanitario_id')->references('id')->on('users')->onDelete('cascade');
            });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('observations');
    }
}

