<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treatments', function (Blueprint $table) {
            //$table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->timestamps();
            $table->String('commonName')->nullable();
            $table->enum('tipoDeTratamiento',['FIV-ICSI','ROPA','Estimulación Ovárica', 'Inseminación Artificial','Otros'])->nullable();
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
        Schema::dropIfExists('treatments');
    }
}
