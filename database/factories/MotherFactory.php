<?php

use Faker\Generator as Faker;
use App\Mother;

$factory->define(Mother::class, function (Faker $faker) {
    return [
        'name' => $faker->name('female'),
        'occupation' => $faker->jobTitle,
        'contact' => '09508223452',
    ];
});
