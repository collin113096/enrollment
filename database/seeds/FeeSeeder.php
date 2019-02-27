<?php

use Illuminate\Database\Seeder;
use App\Fee;

class FeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cashes = [
        	['grade_id' => 1 , 'payment_mode' => 'Cash', 'registration' => 1500, 'tuition' => 1000, 'misc' => 3000, 'computer' => 0, 'internet' => 0],
        	['grade_id' => 2 , 'payment_mode' => 'Cash', 'registration' => 1500, 'tuition' => 1000, 'misc' => 3000, 'computer' => 0, 'internet' => 0],
        	['grade_id' => 3 , 'payment_mode' => 'Cash', 'registration' => 1500, 'tuition' => 1000, 'misc' => 3000, 'computer' => 0, 'internet' => 0],

        	['grade_id' => 4 , 'payment_mode' => 'Cash', 'registration' => 1500, 'tuition' => 6000, 'misc' => 3000, 'computer' => 600, 'internet' => 0],
        	['grade_id' => 5 , 'payment_mode' => 'Cash', 'registration' => 1500, 'tuition' => 1000, 'misc' => 3000, 'computer' => 0, 'internet' => 0],
        	['grade_id' => 6 , 'payment_mode' => 'Cash', 'registration' => 1500, 'tuition' => 1000, 'misc' => 3000, 'computer' => 0, 'internet' => 0],
        	['grade_id' => 7 , 'payment_mode' => 'Cash', 'registration' => 1500, 'tuition' => 1000, 'misc' => 3000, 'computer' => 0, 'internet' => 0],
        	['grade_id' => 8 , 'payment_mode' => 'Cash', 'registration' => 1500, 'tuition' => 1000, 'misc' => 3000, 'computer' => 0, 'internet' => 0],
        	['grade_id' => 9 , 'payment_mode' => 'Cash', 'registration' => 1500, 'tuition' => 1000, 'misc' => 3000, 'computer' => 0, 'internet' => 0],

        	['grade_id' => 10 , 'payment_mode' => 'Cash', 'registration' => 1500, 'tuition' => 7700, 'misc' => 3500, 'computer' => 1300, 'internet' => 0],
        	['grade_id' => 11 , 'payment_mode' => 'Cash', 'registration' => 1500, 'tuition' => 7700, 'misc' => 3500, 'computer' => 1300, 'internet' => 600],
        	['grade_id' => 12 , 'payment_mode' => 'Cash', 'registration' => 1500, 'tuition' => 7700, 'misc' => 3500, 'computer' => 1300, 'internet' => 600],
        	['grade_id' => 13 , 'payment_mode' => 'Cash', 'registration' => 1500, 'tuition' => 7700, 'misc' => 3500, 'computer' => 1300, 'internet' => 600],
        ];

         $installments = [
            ['grade_id' => 1 , 'payment_mode' => 'Installment', 'registration' => 1500, 'tuition' => 100, 'misc' => 3000, 'computer' => 0, 'internet' => 0],
            ['grade_id' => 2 , 'payment_mode' => 'Installment', 'registration' => 1500, 'tuition' => 100, 'misc' => 3000, 'computer' => 0, 'internet' => 0],
            ['grade_id' => 3 , 'payment_mode' => 'Installment', 'registration' => 1500, 'tuition' => 600, 'misc' => 3000, 'computer' => 60, 'internet' => 0],

            ['grade_id' => 4 , 'payment_mode' => 'Installment', 'registration' => 1500, 'tuition' => 600, 'misc' => 3000, 'computer' => 60, 'internet' => 0],
            ['grade_id' => 5 , 'payment_mode' => 'Installment', 'registration' => 1500, 'tuition' => 600, 'misc' => 3000, 'computer' => 60, 'internet' => 0],
            ['grade_id' => 6 , 'payment_mode' => 'Installment', 'registration' => 1500, 'tuition' => 600, 'misc' => 3000, 'computer' => 60, 'internet' => 0],
            ['grade_id' => 7 , 'payment_mode' => 'Installment', 'registration' => 1500, 'tuition' => 600, 'misc' => 3000, 'computer' => 60, 'internet' => 0],
            ['grade_id' => 8 , 'payment_mode' => 'Installment', 'registration' => 1500, 'tuition' => 600, 'misc' => 3000, 'computer' => 60, 'internet' => 0],
            ['grade_id' => 9 , 'payment_mode' => 'Installment', 'registration' => 1500, 'tuition' => 770, 'misc' => 3500, 'computer' => 130, 'internet' => 0],

            ['grade_id' => 10 , 'payment_mode' => 'Installment', 'registration' => 1500, 'tuition' => 770, 'misc' => 3500, 'computer' => 130, 'internet' => 60],
            ['grade_id' => 11 , 'payment_mode' => 'Installment', 'registration' => 1500, 'tuition' => 770, 'misc' => 3500, 'computer' => 130, 'internet' => 60],
            ['grade_id' => 12 , 'payment_mode' => 'Installment', 'registration' => 1500, 'tuition' => 770, 'misc' => 3500, 'computer' => 130, 'internet' => 60],
            ['grade_id' => 13 , 'payment_mode' => 'Installment', 'registration' => 1500, 'tuition' => 770, 'misc' => 3500, 'computer' => 130, 'internet' => 60],
        ];

        foreach($cashes as $cash)
        {
        	Fee::create($cash);
        }

        foreach($installments as $installment)
        {
            Fee::create($installment);
        }


    }
}
