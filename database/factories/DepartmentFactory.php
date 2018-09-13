<?php

use Faker\Generator as Faker;

$factory->define(App\Department::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(2),
		'description' => $faker->sentence(100),
		'slug' => $faker->slug,
    ];
});
