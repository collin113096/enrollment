<?php

use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=10;$i++){
        	\App\Grade::create([
        		'name' => 'Grade '.$i,
       		 ]);
        }
    }
}
