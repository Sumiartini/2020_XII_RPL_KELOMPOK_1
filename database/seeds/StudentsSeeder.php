<?php

use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
        	'stu_user_id' => '2',
        	'stu_entry_type_id' => '1',
        	'stu_school_year_id' => '1',
        	'stu_nisn' => '320',
        	'stu_registration_status' => '0',
        ]);

        DB::table('students')->insert([
        	'stu_user_id' => '3',
        	'stu_entry_type_id' => '1',
        	'stu_school_year_id' => '1',
        	'stu_nisn' => '322',
        	'stu_registration_status' => '0',
        ]);
        
        DB::table('students')->insert([
        	'stu_user_id' => '4',
        	'stu_entry_type_id' => '1',
        	'stu_school_year_id' => '1',
        	'stu_nisn' => '223',
        	'stu_registration_status' => '1',
        ]);
        
        DB::table('students')->insert([
            'stu_user_id' => '5',
            'stu_entry_type_id' => '1',
            'stu_school_year_id' => '1',
            'stu_nisn' => '2918',
            'stu_registration_status' => '1',
        ]);
    }
}
