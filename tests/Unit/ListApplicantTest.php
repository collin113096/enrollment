<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Student;

class ListApplicantTest extends TestCase
{
	use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testApplicants(){

    	//store record
    	$student = factory(Student::class)->create();

    	//test route
    	$response = $this->get('/applicants');
    	$response->assertSuccessful();

    	//test view
    	$response->assertViewIs('applicant.index');

    	//test view has data
    	$response->assertViewHas(['students']);

    	
    	//test database if the record exists
    	$this->assertDatabaseHas('students', [
	        'first_name' => $student->first_name
	    ]);

	    //test if view access the data
	    $response->assertSee($student->first_name);
    }

}
