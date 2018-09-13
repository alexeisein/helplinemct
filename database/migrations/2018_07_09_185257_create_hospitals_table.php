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
            $table->longText('about');
            $table->string('image')->nullable()->default('hospital.jpg');
            $table->integer('beds')->unsigned();
            $table->integer('icu_beds')->unsigned();
            $table->integer('established')->unsigned()->nullable();
            $table->text('achievments')->nullable();
            $table->text('infrastructures')->nullable();
            $table->text('address')->nullable();
            $table->string('slug', 191)->unique()->nullable();
            $table->timestamps();

            $table->foreign('location_id')->references('id')->on('locations');
            
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
