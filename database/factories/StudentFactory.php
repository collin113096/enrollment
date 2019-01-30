<?php

use Faker\Generator as Faker;
use App\Student;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName(),
        'last_name' => $faker->lastName,
        'middle_name' => $faker->lastName,
        'home_address' => $faker->address,
        'birth_date' => $faker->date('Y-m-d'),
        'birth_place' => $faker->address,
        'gender' => $faker->numberBetween(1,2) == 1 ? 'Male' : 'Female',
        'religion' => $faker->lastName,
        'grade' => 'Grade '.$faker->numberBetween(1,2),
    ];
});
