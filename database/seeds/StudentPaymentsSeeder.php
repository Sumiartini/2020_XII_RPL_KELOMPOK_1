<?php

use Illuminate\Database\Seeder;

class StudentPaymentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student_payments')->insert([
        	'stp_student_id'  => '1',
        	'stp_school_year_id' => '5',
        	'stp_payment_method' => 'Transfer Bank',
        	'stp_reason'		 => 'Diterima',
        	'stp_payment_status' => '2',
        	'stp_date'			 => '' ,
        	'stp_date_verification' => '' ,
        	'stp_type_payment'	 => '1',

        ]);

        DB::table('student_payments')->insert([
         	'stp_student_id'  => '1',
        	'stp_school_year_id' => '5',
        	'stp_payment_method' => 'Transfer Bank',
        	'stp_reason'		 => 'Diterima',
        	'stp_payment_status' => '2',
        	'stp_date'			 => '' ,
        	'stp_date_verification' => '' ,
        	'stp_nominal'		 => '3000000',
        	'stp_type_payment'	 => '2',
        ]);
    }
}
