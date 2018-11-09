<?php

use Faker\Generator as Faker;
use Hmct\Hospital;

$factory->define(Hmct\Food::class, function (Faker $faker) {
    return [
        'hospital_id' => function(){
    		return Hospital::all()->random();
    	},
        'name' => $faker->words(3, true)
    ];
});
