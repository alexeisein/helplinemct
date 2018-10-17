<?php

use App\Hospital;
use Faker\Generator as Faker;

$factory->define(App\MoneyMatter::class, function (Faker $faker) {
    return [
    	'hospital_id' => function(){
    		return Hospital::all()->random();
    	},
        'name' => $faker->words(3, true)
    ];
});
