<?php

use App\Location;
use Faker\Generator as Faker;

$factory->define(App\Hospital::class, function (Faker $faker) {
    return [
    	'location_id' => function(){
    		return Location::all()->random();
    	},
        'name' => $faker->sentence(2),
		'about' => $faker->sentence(100),
		'bed' => $faker->numberBetween(1,5000),
		'icu_bed' => $faker->numberBetween(1,5000),
		'established' => $faker->numberBetween(1900, 2018),
		'achievment' => $faker->sentence(50),
		'infrastructure' => $faker->sentence(100),
		'address' => $faker->address,
		'slug' => $faker->slug,
    ];
});
