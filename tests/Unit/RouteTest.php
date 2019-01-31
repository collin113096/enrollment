<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RouteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
   public function test_times()
   {
   		$response = $this->get('/times');
   		$response->assertSuccessful();
   }

   public function test_subjects()
   {
   		$response = $this->get('/subjects');
   		$response->assertSuccessful();
   }

   public function test_rooms()
   {
   		$response = $this->get('/rooms');
   		$response->assertSuccessful();
   }

   public function test_teachers()
   {
   		$response = $this->get('/teachers');
   		$response->assertSuccessful();
   }

   public function test_sections()
   {
   		$response = $this->get('/sections');
   		$response->assertSuccessful();
   }
}
