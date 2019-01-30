<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Student;
use App\Father;
use App\Mother;

class ApplicationTest extends TestCase
{
	use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */

    public function test_get_application_form(){
    	$response = $this->get('/application_form');
    	$response->assertSuccessful();
    }

    public function test_saveApplicationForm(){

    	$validatedDataOf = [
    		'student' => [
    			'first_name' => 'Jiyo Collin',
    			'middle_name' => 'Babaan',
    			'last_name' => 'Pagtananan',
    			'home_address' => 'Brgy.Cabanbanan Pagsanjan, Laguna',
    			'birth_date' => '1996-11-30',
    			'birth_place' => 'Pagsanjan, Laguna',
    			'religion' => 'Iglesia Ni Cristo',
    			'gender' => 'male',
    			'grade' => 'Grade 1',
    		],
    		'father' => [
    			'name' => 'Neil Pagtananan',
    			'contact' => '09508223452',
    			'occupation' => 'Farmer',
    		],
    		'mother' => [
    			'name' => 'Laarni Pagtananan',
    			'contact' => '09508223452',
    			'occupation' => 'Housewife',
    		],
    	];

    	$student = new Student;
    	$student->saveApplicationForm($validatedDataOf);
    	
    	//expected output these data are save on the 3 tables
    	$this->assertDatabaseHas('students',[
    			'first_name' => 'Jiyo Collin',
    			'middle_name' => 'Babaan',
    			'last_name' => 'Pagtananan',
    			'home_address' => 'Brgy.Cabanbanan Pagsanjan, Laguna',
    			'birth_date' => '1996-11-30',
    			'birth_place' => 'Pagsanjan, Laguna',
    			'religion' => 'Iglesia Ni Cristo',
    			'gender' => 'male',
    			'grade' => 'Grade 1',
    	]);

    	$this->assertDatabaseHas('fathers',[
    			'name' => 'Neil Pagtananan',
    			'contact' => '09508223452',
    			'occupation' => 'Farmer',
    	]);

    	$this->assertDatabaseHas('mothers',[
    			'name' => 'Laarni Pagtananan',
    			'contact' => '09508223452',
    			'occupation' => 'Housewife',
    		]);
    }
}
