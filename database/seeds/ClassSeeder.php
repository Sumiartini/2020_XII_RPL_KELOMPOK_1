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
        DB::table('classes')->insert([
        	'cls_school_year_id' => '5',
        	'cls_major_id' => '1',
        	'cls_grade_level_id' => '1',
        	'cls_number' => '1',
            'cls_is_active' => 1
        ]);
        
        DB::table('classes')->insert([
        	'cls_school_year_id' => '5',
        	'cls_major_id' => '1',
        	'cls_grade_level_id' => '2',
        	'cls_number' => '1',
            'cls_is_active' => 1
        ]);
        
        DB::table('classes')->insert([
        	'cls_school_year_id' => '5',
        	'cls_major_id' => '1',
        	'cls_grade_level_id' => '3',
        	'cls_number' => '1',
            'cls_is_active' => 1
        ]);
        
        DB::table('classes')->insert([
        	'cls_school_year_id' => '5',
        	'cls_major_id' => '2',
        	'cls_grade_level_id' => '1',
        	'cls_number' => '1',
            'cls_is_active' => 1
        ]);
    }
}
