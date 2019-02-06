<?php

use Faker\Generator as Faker;
use App\Father;

$factory->define(Father::class, function (Faker $faker) {
    return [
        'name' => $faker->name('male'),
        'occupation' => $faker->jobTitle,
        'contact' => '09506660888',
    ];
});
