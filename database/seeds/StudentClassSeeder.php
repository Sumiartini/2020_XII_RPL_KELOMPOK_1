<?php

use Illuminate\Database\Seeder;

class StudentClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student_classes')->insert([
        	'stc_student_id'  => '1',
        	'stc_class_id'   => '1',
        ]);

        DB::table('student_classes')->insert([
        	'stc_student_id'  => '1',
        	'stc_class_id'   => '1',
        ]);
    }
}
