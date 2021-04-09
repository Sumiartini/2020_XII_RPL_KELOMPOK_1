<?php

use Illuminate\Database\Seeder;

class SchoolYearsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('school_years')->insert([
            'scy_first_year' => '2016',
            'scy_last_year' => '2017',
        	'scy_name' => '2016/2017',
            'scy_is_form_registration' => 0,
            'scy_payment_price' => '3000000',

        ]);

        DB::table('school_years')->insert([
            'scy_first_year' => '2017',
            'scy_last_year' => '2018',
        	'scy_name' => '2017/2018',
            'scy_is_form_registration' => 0,
            'scy_payment_price' => '4000000',

        ]);

        DB::table('school_years')->insert([
            'scy_first_year' => '2018',
            'scy_last_year' => '2019',
        	'scy_name' => '2018/2019',
            'scy_is_form_registration' => 0,
            'scy_payment_price' => '5000000',
           
        ]);

        DB::table('school_years')->insert([
            'scy_first_year' => '2019',
            'scy_last_year' => '2020',
        	'scy_name' => '2019/2020',
            'scy_is_form_registration' => 0,
            'scy_payment_price' => '6000000',
          
        ]);

        DB::table('school_years')->insert([
            'scy_first_year' => '2020',
            'scy_last_year' => '2021',
        	'scy_name' => '2020/2021',
            'scy_is_form_registration' => 1,
            'scy_payment_price' => '6000000',
            
        ]);
    }
}
