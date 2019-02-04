<?php

use Illuminate\Database\Seeder;
use App\Student;
use App\Father;
use App\Mother;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     	$student = factory(Student::class,20)->create();

        $student->each(function($student){
            $student->father()->save(factory(Father::class)->make());
            $student->mother()->save(factory(Mother::class)->make());
        });
    }
}
