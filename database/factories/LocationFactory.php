<?php

use Faker\Generator as Faker;

$factory->define(FreeNation\Location::class, function (Faker $faker) {
    return [
        'city' => $faker->city,
		'state' => $faker->state,
		'slug' => $faker->slug,
    ];
});
