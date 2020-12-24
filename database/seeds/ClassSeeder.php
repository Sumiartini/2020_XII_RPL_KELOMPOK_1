<?php

use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        DB::table('class')->insert([
        	'cls_school_year_id' => '1',
        	'cls_major_id' => '1',
        	'cls_grade_level_id' => '1',
        	'cls_name' => 'X RPL 1'
        ]);
        
        DB::table('class')->insert([
        	'cls_school_year_id' => '1',
        	'cls_major_id' => '1',
        	'cls_grade_level_id' => '2',
        	'cls_name' => 'XI RPL 1'
        ]);
        
        DB::table('class')->insert([
        	'cls_school_year_id' => '1',
        	'cls_major_id' => '1',
        	'cls_grade_level_id' => '3',
        	'cls_name' => 'XII RPL 1'
        ]);
        
        DB::table('class')->insert([
        	'cls_school_year_id' => '1',
        	'cls_major_id' => '2',
        	'cls_grade_level_id' => '1',
        	'cls_name' => 'X MM 1'
        ]);
    }
}
