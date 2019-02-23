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
        	['name' => 'Nursery','grade_id' => 1],
            ['name' => 'Mercury','grade_id' => 2],
            ['name' => 'Venus','grade_id' => 3],
            ['name' => 'Earth','grade_id' => 4],
            ['name' => 'Mars','grade_id' => 5],
            ['name' => 'Jupiter','grade_id' => 6],
            ['name' => 'Saturn','grade_id' => 7],
            ['name' => 'Uranus','grade_id' => 8],
            ['name' => 'Neptune','grade_id' => 9],
            ['name' => 'Nobel','grade_id' => 10],
            ['name' => 'Copernicus','grade_id' => 10],
            ['name' => 'Aristotle','grade_id' => 11],
            ['name' => 'Linnaeus','grade_id' => 11],
            ['name' => 'Galileo','grade_id' => 12],
            ['name' => 'Einstein','grade_id' => 13],
            ['name' => 'Newton','grade_id' => 13],
    	];

    	foreach($sections as $section){
    		Section::create($section);
    	}
    }
}
