<?php

use Illuminate\Database\Seeder;

class StaffPositionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff_positions')->insert([
        	'stp_staff_id' => '1',
        	'stp_position_type_id' => '1',
        ]);

        DB::table('staff_positions')->insert([
        	'stp_staff_id' => '2',
        	'stp_position_type_id' => '2',
        ]);
        
        DB::table('staff_positions')->insert([
        	'stp_staff_id' => '3',
        	'stp_position_type_id' => '3',
        ]);
    }
}
