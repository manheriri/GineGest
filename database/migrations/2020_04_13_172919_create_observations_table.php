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
                $table->double('motherWeigth')->nullable();
                $table->double('fetalWeigth')->nullable();
                $table->integer('gestationWeek')->nullable();
                $table->enum('fetalGender', ['boy', 'girl'])->nullable();
                $table->string('fundalHeight')->nullable();
                $table->boolean('streptococoAgalacitae');
                $table->string('allergy');
                $table->boolean('smoker');
                $table->boolean('drunker');
                $table->string('bloodType');
                $table->string('symptom');
                $table->date('menarquia');
                $table->enum('finalization', ['partoNatural', 'partoVaginalInstrumental', 'partoAbdominal', 'abortoEspontaneo',
                    'abortoInducido', 'abortoIndirecto'])->nullable();
                $table->string('background')->nullable();
                $table->string('amniocentesis');
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

