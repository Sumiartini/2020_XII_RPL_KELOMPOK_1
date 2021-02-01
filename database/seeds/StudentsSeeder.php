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
            'stu_candidate_name' => 'Ahmad Suherman',
        	'stu_user_id' => '2',
        	'stu_entry_type_id' => '1',
        	'stu_school_year_id' => '1',
            'stu_school_origin' => 'SMP KARYA BHAKTI',
        	'stu_nisn' => '3204111233',
        	'stu_registration_status' => '1',

        ]);

        DB::table('students')->insert([
            'stu_candidate_name' => 'Rendi Josua Hutagaol',
        	'stu_user_id' => '3',
        	'stu_entry_type_id' => '1',
        	'stu_school_year_id' => '1',
            'stu_school_origin' => 'SMPN 2 KATAPANG',
        	'stu_nisn' => '32122121499',
        	'stu_registration_status' => '1',
        ]);
        
        DB::table('students')->insert([
            'stu_candidate_name' => 'Dede Suminar',
        	'stu_user_id' => '4',
        	'stu_entry_type_id' => '1',
        	'stu_school_year_id' => '1',
            'stu_school_origin' => 'SMPN 2 KATAPANG',
        	'stu_nisn' => '32231332433',
        	'stu_registration_status' => '1',
        ]);
        
        DB::table('students')->insert([
            'stu_candidate_name' => 'Elsa Susilawati',
            'stu_user_id' => '5',
            'stu_entry_type_id' => '1',
            'stu_school_year_id' => '1',
            'stu_school_origin' => 'SMPN 2 KATAPANG',
            'stu_nisn' => '33098867125',
            'stu_registration_status' => '1',
        ]);
    }
}
