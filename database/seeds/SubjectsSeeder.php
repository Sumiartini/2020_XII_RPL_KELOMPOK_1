<?php

use Illuminate\Database\Seeder;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
        	'sbj_name' => 'PAB',
            'sbj_is_active' => 1,
            
        ]);

        DB::table('subjects')->insert([
        	'sbj_name' => 'B.Indonesia',
            'sbj_is_active' => 1,
        ]);
        
        DB::table('subjects')->insert([
        	'sbj_name' => 'PKN',
            'sbj_is_active' => 1,
        ]);
        
        DB::table('subjects')->insert([
        	'sbj_name' => 'PDKK',
            'sbj_is_active' => 1,
        ]);
        
        DB::table('subjects')->insert([
        	'sbj_name' => 'BASDAT',
            'sbj_is_active' => 1,
        ]);
    }
}
