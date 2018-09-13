<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentHospitalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department_hospital', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hospital_id')->unsigned()->nullable();
            $table->integer('department_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('hospital_id')->references('id')->on('hospitals');
            $table->foreign('department_id')->references('id')->on('departments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('department_hospital');
    }
}
