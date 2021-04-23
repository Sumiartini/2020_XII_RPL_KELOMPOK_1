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
        	'stp_student_id'  => '5',
        	'stp_payment_method' => 'Offline Ke Sekolah',
        	'stp_reason'		 => 'Diterima',
        	'stp_payment_status' => '2',
        	'stp_date'			 => '2021-03-03' ,
        	'stp_date_verification' => '2021-03-03' ,
        	'stp_type_payment'	 => '1',
            'stp_picture'       => 'assets/images/formulir.jpeg',

        ]);

        DB::table('student_payments')->insert([
         	'stp_student_id'  => '5',
        	'stp_payment_method' => 'Offline Ke Sekolah',
        	'stp_reason'		 => 'Diterima',
        	'stp_payment_status' => '2',
        	'stp_date'			 => '2021-03-03' ,
        	'stp_date_verification' => '2021-03-03' ,
        	'stp_nominal'		 => '2000000',
        	'stp_type_payment'	 => '2',
            'stp_picture'       => 'assets/images/ppdb.jpeg',

        ]);
    }
}
