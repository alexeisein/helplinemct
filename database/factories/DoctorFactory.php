<?php

use Hmct\Hospital;
use Hmct\Department;
use Hmct\Location;
use Faker\Generator as Faker;

$factory->define(Hmct\Doctor::class, function (Faker $faker) {

    return [
    	'hospital_id' => function(){
    		return Hospital::all()->random();
    	},
    	'department_id' => function(){
    		return Department::all()->random();
    	},
    	'location_id' => function(){
    		return Location::all()->random();
    	},
        'name' => $faker->name,
        'descipline' => $faker->words(3, true),
        'years_experience' => $faker->numberBetween(1, 70),
		'about' => $faker->sentence(100),
        'gender' => function(){
            $gender = ['male', 'female'];
                $gen = rand(0, 1);
                if($gen == 0){
                  return "male";
                }
                if($gen == 1){
                  return "female";
                }
        },
		'experience' => $faker->sentence(50),
		'education' => $faker->sentences(6, true),
		'awards' => $faker->sentences(4, true),
		'slug' => $faker->slug,
    ];
});
