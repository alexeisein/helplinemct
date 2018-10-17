<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('location_id')->unsigned()->nullable();
            
            $table->string('name')->index();
            $table->text('about');
            $table->string('image')->nullable()->default('hospital.jpg');
            $table->integer('bed')->unsigned();
            $table->integer('icu_bed')->unsigned();
            $table->integer('established')->unsigned()->nullable();
            $table->text('achievment')->nullable();
            $table->text('infrastructure')->nullable();
            $table->text('address')->nullable();
            $table->string('slug', 191)->unique()->nullable();
            $table->timestamps();

            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospitals');
    }
}
