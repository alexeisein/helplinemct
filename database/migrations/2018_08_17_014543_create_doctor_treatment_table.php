<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorTreatmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_treatment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('doctor_id')->unsigned()->nullable();
            $table->integer('treatment_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('doctor_id')->references('id')->on('doctors');
            $table->foreign('treatment_id')->references('id')->on('treatments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor_treatment');
    }
}
