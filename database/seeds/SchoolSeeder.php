<?php

use Illuminate\Database\Seeder;
use App\School;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for($i=18;$i<30;$i++)
       {
	       	 School::create([
	        	'year' => '20'.$i.'-'.'20'.($i+1),
	        	'name' => 'Pagsanjan Academy',
	        	'address' => '632 Mabini St. Pagsanjan, Laguna',
	        	'contact' => '(049) 501 - 4533',
	        ]);
       }
    }
}
