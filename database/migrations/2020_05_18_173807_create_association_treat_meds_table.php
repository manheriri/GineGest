<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssociationTreatMedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('association_treat_meds', function (Blueprint $table) {
            //$table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
            $table->date('initialDate');
            $table->date('finalDate')->nullable();
            $table->string('instructions');
            $table->unsignedBigInteger('treatment_id');
            $table->unsignedBigInteger('medicament_id');
            $table->foreign('treatment_id')->references('id')->on('treatments')->onDelete('cascade');
            $table->foreign('medicament_id')->references('id')->on('medicaments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('association_treat_meds');
    }
}
