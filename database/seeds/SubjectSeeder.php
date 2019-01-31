<?php

use Illuminate\Database\Seeder;
use App\Subject;
use Faker\Factory as Faker;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$subjects = [
    		'Filipino',
    		'English',
    		'Mathematics',
    		'Science',
    		'Araling Panlipunan',
    		'Technology and Livelihood Education',
    		'MAPEH',
    		'Edukasyon sa Pagpapakatao',
    		'Elective Computer'
    	];
        
        $faker = Faker::create();
        foreach($subjects as $subject)
        {
        	Subject::create([
	        	'name' => $subject,
                'unit' => $faker->numberBetween(1,4),
	        	'description' => 'Description..',
	        ]);
        }
    }
}
