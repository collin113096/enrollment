<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GradeSeeder::class);
        $this->call(SchoolSeeder::class);
        $this->call(SubjectSeeder::class);
        $this->call(SectionSeeder::class);
        $this->call(TeacherSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(FeeSeeder::class);

    }
}
