<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacilityHospitalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facility_hospital', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hospital_id')->unsigned()->nullable();
            $table->integer('facility_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('hospital_id')->references('id')->on('hospitals');
            $table->foreign('facility_id')->references('id')->on('facilities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facility_hospital');
    }
}
