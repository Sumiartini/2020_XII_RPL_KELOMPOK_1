<?php

use Illuminate\Database\Seeder;

class StudentRegistrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	     DB::table('student_registrations')->insert([
	        'str_student_id' => '1',
	        'str_school_year_id'	=> '5',
	        'str_status' => '0',
	        'str_reason'	=> 'Tidak memenuhi Kualifikasi'
	    ]);

	     DB::table('student_registrations')->insert([
	        'str_student_id' => '2',
	        'str_school_year_id'	=> '5',
	        'str_status' => '0',
	        'str_reason'	=> 'Tidak memenuhi Kualifikasi'
	    ]);
	      
	     DB::table('student_registrations')->insert([
	        'str_student_id' => '3',
	        'str_school_year_id'	=> '5',
	        'str_status' => '1',
	        'str_reason'	=> 'Memenuhi Kualifikasi'
	    ]);
	      
	     DB::table('student_registrations')->insert([
	        'str_student_id' => '4',
	        'str_school_year_id'	=> '5',
	        'str_status' => '1',
	        'str_reason'	=> 'Memenuhi Kualifikasi'
	    ]);
	      
	     DB::table('student_registrations')->insert([
	        'str_student_id' => '5',
	        'str_school_year_id'	=> '5',
	        'str_status' => '1',
	        'str_reason'	=> 'Memenuhi Kualifikasi'
	    ]);
	      
    }
}
