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
        Schema::create('observations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->double('motherWeigth')->nullable();
            $table->double('fetalWeigth')->nullable();
            $table->integer('gestationWeek')->nullable();
            $table->enum('fetalGender',['boy','girl'])->nullable();
            $table->string('fundalHeight')->nullable();
            $table->boolean('streptococoAgalacitae')->nullable();
            $table->string('allergy');
            $table->boolean('smoker');
            $table->boolean('drunker');
            $table->string('previousIllness')->nullable();
            $table->boolean('previousAbortion')->nullable();
            $table->string('bloodType');
            $table->boolean('breastfeed')->nullable();
            $table->boolean('menopause')->nullable();
            $table->string('symptom');
            $table->date('menarquia');
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
