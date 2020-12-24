<?php

use Illuminate\Database\Seeder;

class PositionTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('position_types')->insert([
        	'pst_name' => 'staf kepegawaian',
            'pst_is_active' => 1,
        ]);

        DB::table('position_types')->insert([
        	'pst_name' => 'staf kesiswaan',
            'pst_is_active' => 1,
        ]);
        
        DB::table('position_types')->insert([
        	'pst_name' => 'staf persuratan',
            'pst_is_active' => 1,
        ]);
        
        DB::table('position_types')->insert([
        	'pst_name' => 'staf sarana prasarana',
            'pst_is_active' => 1,
        ]);
        
        DB::table('position_types')->insert([
        	'pst_name' => 'guru produktif',
            'pst_is_active' => 1,
        ]);
        
        DB::table('position_types')->insert([
        	'pst_name' => 'guru matapelajaran',
            'pst_is_active' => 1,
        ]);
        
        DB::table('position_types')->insert([
        	'pst_name' => 'wali kelas',
            'pst_is_active' => 1,
        ]);
    }
}
