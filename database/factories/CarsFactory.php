<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'Make' => $faker->randomElement($array = array ('ford','honda','toyota')),
        'Model' => $faker->name,
        'year' => $faker->numberBetween($min = 1885, $max = 2018),
    ];
});
