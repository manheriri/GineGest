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
            $table->enum('fetalGender', ['Niño', 'Niña'])->nullable();
            $table->double('fetalWeigth')->nullable();
            $table->enum('streptococoAgalacitae',['Si','No','No detectectado por el momento'])->nullable();
            $table->enum('finalization', ['Parto Natural', 'Parto Vaginal Instrumental', 'Parto Abdominal', 'Aborto Espontaneo',
                'Aborto Inducido', 'Aborto Indirecto','Aún desconocida'])->nullable();
            $table->string('fundalHeight')->nullable();
            $table->integer('gestationWeek')->nullable();
            $table->string('amniocentesis')->nullable();
            $table->unsignedBigInteger('paciente_id')->nullable();
            $table->foreign('paciente_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('personalSanitario_id')->nullable();
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
        Schema::dropIfExists('pregnancies');
    }
}
