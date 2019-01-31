<?php

use Illuminate\Database\Seeder;
use App\Section;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sections = [
        	'Mercury','Venus',
        	'Earth','Mars',
        	'Jupiter','Saturn',
        	'Uranus','Neptune',
        	'Nobel','Copernicus',
        	'Aristotle','Linnaeus',
        	'Galileo','Einstein',
        	'Newton'
    	];

    	foreach($sections as $section){
    		Section::create([
    			'name' => $section
    		]);
    	}
    }
}
