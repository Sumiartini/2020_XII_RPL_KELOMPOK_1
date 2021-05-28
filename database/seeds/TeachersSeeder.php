<?php

use Illuminate\Database\Seeder;

class TeachersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
        	'tcr_id' => 1,
        	'tcr_gtk_number_id' => 2,
            'tcr_nuptk' => 12121212121,
        	'tcr_user_id' => 8,
            'tcr_entry_year' => 'Juni 2016',
            'tcr_registration_status' => 0,
            'tcr_school_year_id'    => 1
        ]);
        DB::table('teachers')->insert([
        	'tcr_id' => 2,
        	'tcr_gtk_number_id' => 1,
            'tcr_nuptk' => 131313313131,
        	'tcr_user_id' => 9,
            'tcr_entry_year' => 'Juni 2016',
            'tcr_registration_status' => 1,
            'tcr_school_year_id'    => 1
        ]);
        DB::table('teachers')->insert([
        	'tcr_id' => 3,
        	'tcr_gtk_number_id' => 6,
            'tcr_nuptk' => 1114144141414,
        	'tcr_user_id' => 7,
            'tcr_entry_year' => 'Juni 2016',
            'tcr_registration_status' => 0,
            'tcr_school_year_id'    => 3
        ]);
        
    }
}
