<?php

use Illuminate\Database\Seeder;

class TeacherSubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teacher_subjects')->insert([
        	'tcs_teacher_id' => '1',
        	'tcs_subject_id' => '1',
        	'tcs_class_id' => '1',
        	'tcs_teaching_hours' => '12 Jam',
        ]);

        DB::table('teacher_subjects')->insert([
        	'tcs_teacher_id' => '2',
        	'tcs_subject_id' => '2',
        	'tcs_class_id' => '1',
        	'tcs_teaching_hours' => '4 Jam',	
        ]);

        DB::table('teacher_subjects')->insert([
        	'tcs_teacher_id' => '2',
        	'tcs_subject_id' => '1',
        	'tcs_class_id' => '2',
        	'tcs_teaching_hours' => '4 Jam',	
        ]);

        DB::table('teacher_subjects')->insert([
        	'tcs_teacher_id' => '3',
        	'tcs_subject_id' => '1',
        	'tcs_class_id' => '1',
        	'tcs_teaching_hours' => '8 Jam',	
        ]);
        
    }
}
