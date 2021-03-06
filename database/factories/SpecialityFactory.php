<?php

use Faker\Generator as Faker;

$factory->define(Hmct\Speciality::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(2),
		'description' => $faker->sentence(100),
		'slug' => $faker->slug,
    ];
});
