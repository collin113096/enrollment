<?php

use Illuminate\Database\Seeder;
use App\Grade;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	   Grade::create(['name' => 'Nursery']);
       Grade::create(['name' => 'Kinder']);
       Grade::create(['name' => 'Prep']);

      for($i=1;$i<=10;$i++)
      {
             Grade::create(['name' => 'Grade '.$i]);
      }

    }
}
