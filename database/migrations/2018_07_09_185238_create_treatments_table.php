<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->decimal('cost', 8, 2)->unsigned()->nullable();
            $table->integer('travellers')->unsigned();
            $table->integer('inpatient_duration')->unsigned();
            $table->integer('outpatient_duration')->unsigned();
            $table->integer('total_duration')->unsigned();
            $table->string('slug')->unique()->nullable();
            $table->timestamps();

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
