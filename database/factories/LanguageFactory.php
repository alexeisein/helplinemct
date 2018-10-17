<?php

use Faker\Generator as Faker;
use App\Hospital;

$factory->define(App\Language::class, function (Faker $faker) {
    return [
        'hospital_id' => function(){
    		return Hospital::all()->random();
    	},
        'name' => $faker->words(2, true)
    ];
});
