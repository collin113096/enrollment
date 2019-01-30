<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ApplicantTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_applicants_route(){
    	$response = $this->get('/applicants');
    	$response->assertSuccessful();
    }
}
