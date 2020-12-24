<?php

use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
        	'cit_province_id' => '1',
        	'cit_name' => 'Bandung',
        ]);

        DB::table('cities')->insert([
        	'cit_province_id' => '1',
        	'cit_name' => 'Bandung Barat',
        ]);

        DB::table('cities')->insert([
        	'cit_province_id' => '1',
        	'cit_name' => 'Bekasi',
        ]);

        DB::table('cities')->insert([
        	'cit_province_id' => '1',
        	'cit_name' => 'Bogor',
        ]);

        DB::table('cities')->insert([
        	'cit_province_id' => '1',
        	'cit_name' => 'Ciamis',
        ]);

        DB::table('cities')->insert([
        	'cit_province_id' => '2',
        	'cit_name' => 'Banjarnegara',
        ]);


        DB::table('cities')->insert([
        	'cit_province_id' => '2',
        	'cit_name' => 'Banyumas',
        ]);

        
        DB::table('cities')->insert([
        	'cit_province_id' => '2',
        	'cit_name' => 'Batang',
        ]);

        
        DB::table('cities')->insert([
        	'cit_province_id' => '2',
        	'cit_name' => 'Blora',
        ]);
        DB::table('cities')->insert([
        	'cit_province_id' => '2',
        	'cit_name' => 'Boyolali',
        ]);

        

    }
}
