<?php

use Illuminate\Database\Seeder;

class GradeLevelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grade_levels')->insert([
        	'grl_name' => 'X',
        ]);

        DB::table('grade_levels')->insert([
        	'grl_name' => 'XI',
        ]);

        DB::table('grade_levels')->insert([
        	'grl_name' => 'XII',
        ]);
    }
}
