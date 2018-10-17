<?php

use Faker\Generator as Faker;
use App\Hospital;

$factory->define(App\Food::class, function (Faker $faker) {
    return [
        'hospital_id' => function(){
    		return Hospital::all()->random();
    	},
        'name' => $faker->words(3, true)
    ];
});
