<?php

use Faker\Generator as Faker;
use App\Section;
use App\Grade;

$factory->define(Section::class, function (Faker $faker) {
    return [
        'name' => $faker->lastName,
        'grade_id' => factory(Grade::class)->create(),
    ];
});
