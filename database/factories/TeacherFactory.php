<?php

use Faker\Generator as Faker;
use App\Teacher;

$factory->define(Teacher::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName(),
        'last_name' => $faker->lastName,
        'middle_name' => $faker->lastName,
        'birth_date' => $faker->date('Y-m-d'),
        'home_address' => $faker->address,
     	'email' => $faker->email,
     	'contact' => '09'.$faker->numberBetween(1,9).'5822345'.$faker->numberBetween(1,9),
        'job_type' => 'Elementary Teacher',
        'date_registered' => $faker->date('Y-m-d'),
        'photo' => asset('storage/6pZfGipwbW7egLw44Vygm7AmCSqjduuLZljRvC8n.jpeg'),
    ];
});
