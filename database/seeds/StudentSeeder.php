<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     	$student = Student::create([
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

        $student->father()->create([
                'name' => 'Neil Pagtananan',
                'contact' => '09508223452',
                'occupation' => 'Farmer',
            ]);

        $student->mother()->create([
                'name' => 'Laarni Pagtananan',
                'contact' => '09508223452',
                'occupation' => 'Housewife',
            ]);
    }
}
