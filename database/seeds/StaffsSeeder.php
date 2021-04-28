<?php

use Illuminate\Database\Seeder;

class StaffsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staffs')->insert([
        	'stf_id' => 1,
        	'stf_gtk_number_id' => 4,
            'stf_nuptk' => 12121212121,
        	'stf_user_id' => 10,
        	'stf_entry_year' => 'Juni 2016',
            'stf_registration_status' => 0,
            'stf_school_year_id'    => 1
        ]);
        DB::table('staffs')->insert([
        	'stf_id' => 2,
        	'stf_gtk_number_id' => 5,
            'stf_nuptk' => 131313313131,
        	'stf_user_id' => 11,
        	'stf_entry_year' => 'Juni 2016',
            'stf_registration_status' => 0,
            'stf_school_year_id'    => 1
        ]);
        DB::table('staffs')->insert([
        	'stf_id' => 3,
        	'stf_gtk_number_id' => 7,
            'stf_nuptk' => 1114144141414,
        	'stf_user_id' => 12,
        	'stf_entry_year' => 'Juni 2016',
            'stf_registration_status' => 1,
            'stf_school_year_id'    => 4
        ]);
    }
}
