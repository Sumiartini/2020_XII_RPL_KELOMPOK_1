<?php

use Illuminate\Database\Seeder;

class TeacherPositionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teacher_positions')->insert([
        	'tcp_teacher_id' => '1',
        	'tcp_position_type_id' => '5',
        ]);

        DB::table('teacher_positions')->insert([
        	'tcp_teacher_id' => '2',
        	'tcp_position_type_id' => '6',
        ]);
        
        DB::table('teacher_positions')->insert([
        	'tcp_teacher_id' => '3',
        	'tcp_position_type_id' => '7',
        ]);
    }
}
