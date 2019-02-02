<?php

use Faker\Generator as Faker;
use App\Teacher;

$factory->define(Teacher::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName(),
        'last_name' => $faker->lastName,
        'middle_name' => $faker->lastName,
        'classification' => 'Elementary Teacher',   
        'birth_date' => $faker->date('Y-m-d'),
        'home_address' => $faker->address,
     	'email' => $faker->email,
     	'contact' => $faker->phoneNumber
    ];
});
