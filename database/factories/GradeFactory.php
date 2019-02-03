<?php

use Faker\Generator as Faker;
use App\Grade;

$factory->define(Grade::class, function (Faker $faker) {
    return [
        'name' => 'Grade '.$faker->numberBetween(1,10),
    ];
});
