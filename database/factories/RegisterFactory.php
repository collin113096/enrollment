<?php

use Faker\Generator as Faker;
use App\Register;
use App\Student;
use App\Section;

$factory->define(Register::class, function (Faker $faker) {
    return [
    	'student_id' => function(){
    		return factory(Student::class)->create()->id;
    	},
        'student_lrn' => '113096123',
        'school_year' => '2019',
        'section_id' => function(){
        	return factory(Section::class)->create()->id;
        },
    ];
});
