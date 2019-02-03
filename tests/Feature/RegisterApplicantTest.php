<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Student;
use App\Section;

class RegisterApplicantTest extends TestCase
{
	// use RefreshDatabase;
    
    /** @test */
    public function applicant_is_now_officially_a_student_of_the_school()
    {
    	// $this->withoutExceptionHandling();
    	
        $student = factory(Student::class)->create();
        $section = factory(Section::class)->create();

        $this->post("/registers/{{ $student->id }}",[
       
            'student_lrn' => '113096',
            'school_year' => '2019',
            'section_id' => $section->id,
        ]);

        $this->assertDatabaseHas('registers',[
            
            'student_lrn' => '113096',
            'school_year' => '2019',
            'section_id' => $section->id,
        ]);
    }
}
