<?php

use Faker\Generator as Faker;
use Hmct\Hospital;

$factory->define(Hmct\Department::class, function (Faker $faker) {
    return [
    	'hospital_id' => function(){
    		return Hospital::all()->random();
    	},
        'name' => $faker->sentence(2),
		'description' => $faker->sentence(100),
		'slug' => $faker->slug,
    ];
});
