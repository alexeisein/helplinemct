<?php

use Faker\Generator as Faker;
use FreeNation\Hospital;

$factory->define(FreeNation\Food::class, function (Faker $faker) {
    return [
        'hospital_id' => function(){
    		return Hospital::all()->random();
    	},
        'name' => $faker->words(3, true)
    ];
});
