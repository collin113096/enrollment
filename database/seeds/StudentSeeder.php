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
        factory(App\User::class, 50)->create()->each(function ($user) {
        $user->student()->save(factory(Student::class)->make());
    });
    }
}
