<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create();

        $user = App\User::create([
        	'email' => 'jiyocollin@gmail.com',
        	'password' => Hash::make('intelintel'),
        ]);

        $user->student()->save(
        	factory(App\Student::class)->make()
        )->each(function($student){
        	$student->father()->save(factory(App\Father::class)->make());
        	$student->mother()->save(factory(App\Mother::class)->make());
        });
    }
}
