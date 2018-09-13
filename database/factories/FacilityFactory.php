<?php

use Faker\Generator as Faker;

$factory->define(App\Facility::class, function (Faker $faker) {
    return [
        'services' => $faker->sentence(10),
		'slug' => $faker->slug,
    ];
});
