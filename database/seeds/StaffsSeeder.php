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
        	'stf_gtk' => 1617003,
            'stf_nuptk' => 12121212121,
        	'stf_user_id' => 10,
        	'stf_entry_year' => 'Juni 2016',
            'stf_registration_status' => 0,
        ]);
        DB::table('staffs')->insert([
        	'stf_id' => 2,
        	'stf_gtk' => 1617005,
            'stf_nuptk' => 131313313131,
        	'stf_user_id' => 11,
        	'stf_entry_year' => 'Juni 2016',
            'stf_registration_status' => 2,
        ]);
        DB::table('staffs')->insert([
        	'stf_id' => 3,
        	'stf_gtk' => 1617007,
            'stf_nuptk' => 1114144141414,
        	'stf_user_id' => 12,
        	'stf_entry_year' => 'Juni 2016',
            'stf_registration_status' => 1,
        ]);
    }
}
