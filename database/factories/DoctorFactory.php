<?php

use App\Hospital;
use App\Department;
use App\Location;
use Faker\Generator as Faker;

$factory->define(App\Doctor::class, function (Faker $faker) {

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
        'dicipline' => $faker->words(3, true),
        'years_experience' => $faker->numberBetween(5, 50),
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
