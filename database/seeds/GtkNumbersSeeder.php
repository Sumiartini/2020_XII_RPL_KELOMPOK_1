<?php

use Illuminate\Database\Seeder;

class GtkNumbersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gtk_numbers')->insert([
        	'gtn_number'	=> '1617003' //agus
        ]);

        DB::table('gtk_numbers')->insert([
        	'gtn_number'	=> '1617004' //siti
        ]);


        DB::table('gtk_numbers')->insert([
        	'gtn_number'	=> '1617003'
        ]);


        DB::table('gtk_numbers')->insert([
        	'gtn_number'	=> '1617007' //hamdan
        ]);

        DB::table('gtk_numbers')->insert([
        	'gtn_number'	=> '1617018' //enjang
        ]);


        DB::table('gtk_numbers')->insert([
        	'gtn_number'	=> '1819026' //bu dewi
        ]);

        DB::table('gtk_numbers')->insert([
        	'gtn_number'	=> '1920045'
        ]);
        
        DB::table('gtk_numbers')->insert([
        	'gtn_number'	=> '2021047'
        ]);
    }
}
