<?php

use Faker\Generator as Faker;

$factory->define(Hmct\Treatment::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3),
        'cost' => $faker->numberBetween(100, 100000),
		'travellers' => $faker->numberBetween(1, 10),
		'description' => $faker->sentence(200),
		'inpatient_duration' => $faker->numberBetween(1, 100),
		'outpatient_duration' => $faker->numberBetween(1, 100),
		'total_duration' => $faker->numberBetween(1, 100),
		'slug' => $faker->slug,
    ];
});
