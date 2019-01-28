<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Student;
use App\Father;
use App\Mother;
use App\Document;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ViewApplicantTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {

    	//create student
    	$student = factory(Student::class)->create();

    	//instantiate student father and mother
    	$student->each(function($student){
            $student->father()->save(factory(Father::class)->make());
            $student->mother()->save(factory(Mother::class)->make());
            $student->documents()->save(factory(Document::class)->make());
        });
    	
    	//test route 
        $response = $this->get("applicants/$student->id/show");
        $response->assertSuccessful();

        //test view
        $response->assertViewIs('applicant.show');

        //test view send the data
        $response->assertViewHas(['student']);

        //test view receive the data
        $response->assertSee($student->first_name);


        //test route of documents
        $url2 = $this->get("/documents/{$student->id}");
        $url2->assertSuccessful();

    }
}
