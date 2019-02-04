<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Student;
use App\Section;
use App\Register;

class RegisterApplicantTest extends TestCase
{
	use RefreshDatabase;
    
    /** @test */
    public function can_register_applicant_and_update_info()
    {
        $student = factory(Student::class)->create();
        $section = factory(Section::class)->create();
        $payload = [
            'student_lrn' => '113096',
            'school_year' => '2019',
            'section_id' => $section->id,
        ];

        $response = $this->json('POST',"/registers/{$student->id}", $payload);
        $response->assertRedirect('/registers');

        $this->assertDatabaseHas('registers', $payload);
    }
}
