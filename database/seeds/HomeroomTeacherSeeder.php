<?php

use Illuminate\Database\Seeder;

class HomeroomTeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('homeroom_teachers')->insert([
        	'hrt_teacher_id' => 1,
        	'hrt_class_id' => 1 ,
            'hrt_is_active' => 1
        ]);

        DB::table('homeroom_teachers')->insert([
        	'hrt_teacher_id' => 2,
        	'hrt_class_id' => 2,
            'hrt_is_active' => 1
        ]);
    }
}
