<?php

use Illuminate\Database\Seeder;
use App\Subject;

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
        
        foreach($subjects as $subject)
        {
        	Subject::create([
	        	'name' => $subject,
	        	'description' => 'Description..',
	        ]);
        }
    }
}