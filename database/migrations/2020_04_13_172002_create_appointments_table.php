<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {

            $table->increments('id');
            $table->timestamps();
            $table->string('reason');
            $table->string('medicoName')->nullable();
            $table->string('pacienteName')->nullable();
            $table->date('fechaCita')->unique();
            $table->unsignedBigInteger('paciente_id')->nullable();
            $table->unsignedBigInteger('personalSanitario_id')->nullable();
            $table->foreign('paciente_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('Citas');
    }
}
