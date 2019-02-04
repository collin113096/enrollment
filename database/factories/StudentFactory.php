<?php

use Faker\Generator as Faker;
use App\Student;
use App\Grade;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName(),
        'last_name' => $faker->lastName,
        'middle_name' => $faker->lastName,
        'home_address' => $faker->address,
        'birth_date' => $faker->date('Y-m-d'),
        'birth_place' => $faker->address,
        'gender' => $faker->numberBetween(1,2) == 1 ? 'male' : 'female',
        'religion' => $faker->lastName,
        'grade_id' => $faker->numberBetween(1,10),
    ];
});
