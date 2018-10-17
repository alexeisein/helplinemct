<?php

use Faker\Generator as Faker;
use App\Hospital;

$factory->define(App\Facility::class, function (Faker $faker) {
	 
	// identifier();
	
    return [
        'hospital_id' => function(){
            return Hospital::all()->random();
        },
        'name' => $faker->words(3, true),
        // 'money_matters' => $faker->words(3, true),
        // 'travellers' => $faker->words(3, true),
        // 'food' => $faker->words(3, true),
        // 'treatment_related' => $faker->words(3, true),
        // 'language' => $faker->words(3, true),
        // 'transportation' => $faker->words(3, true),
        'identifier' =>  function ()
							{
							    $columns = ["comfort","money_matters", "travellers", "food", "treatment_related", "language", "transportation"];
							  	$counter = rand(0, count($columns)-1);
							    return $columns[$counter];
							},
		'slug' => $faker->slug,
    ];
});
