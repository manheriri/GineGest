<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            //$table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('dni')->unique();
            $table->string('surname1');
            $table->string('surname2')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->boolean('isValid')->nullable();
            $table->rememberToken();
            //$table->unsignedBigInteger('appointment_id');
            //$table->unsignedInteger('pregnancy_id');
            //$table->unsignedInteger('treatment_id');
            //$table->unsignedInteger('observation_id');
            $table->timestamps();
            $table->enum('userType',['personalSanitario','paciente','donante']);

            //$table->foreign('appointment_id')->references('id')->on('Citas')->onDelete('cascade');
            //$table->foreign('pregnancy_id')->references('id')->on('pregnancy')->onDelete('cascade');
            //$table->foreign('treatment_id')->references('id')->on('treatment')->onDelete('cascade');
            //$table->foreign('observation_id')->references('id')->on('observation')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
