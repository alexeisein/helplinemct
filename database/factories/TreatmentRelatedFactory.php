<?php

use Faker\Generator as Faker;
use App\Hospital;

$factory->define(App\TreatmentRelated::class, function (Faker $faker) {
    return [
        'hospital_id' => function(){
    		return Hospital::all()->random();
    	},
        'name' => $faker->words(3, true)
    ];
});
