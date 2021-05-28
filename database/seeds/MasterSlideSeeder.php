<?php

use Illuminate\Database\Seeder;

class MasterSlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('master_slides')->insert([
        	'mss_id' 		=> 1,
            'mss_name' 		=> 'Poster',
            'mss_file' 		=> 'assets/images/slide/adiwiyata1.jpg',
            'mss_is_active' => 1,
        ]);
        DB::table('master_slides')->insert([
        	'mss_id' 		=> 2,
            'mss_name' 		=> 'Poster',
            'mss_file' 		=> 'assets/images/slide/brosur1.png',
            'mss_is_active' => 1,
        ]);
        DB::table('master_slides')->insert([
        	'mss_id' 		=> 3,
            'mss_name' 		=> 'Poster',
            'mss_file' 		=> 'assets/images/slide/mm1.png',
            'mss_is_active' => 1,
        ]);
        DB::table('master_slides')->insert([
        	'mss_id' 		=> 4,
            'mss_name' 		=> 'Poster',
            'mss_file' 		=> 'assets/images/slide/rpl1.png',
            'mss_is_active' => 1,
        ]);
        DB::table('master_slides')->insert([
        	'mss_id' 		=> 5,
            'mss_name' 		=> 'Poster',
            'mss_file' 		=> 'assets/images/slide/kerjasama1.jpeg',
            'mss_is_active' => 1,
        ]);
        DB::table('master_slides')->insert([
        	'mss_id' 		=> 6,
            'mss_name' 		=> 'Poster',
            'mss_file' 		=> 'assets/images/slide/kerjasama2.jpeg',
            'mss_is_active' => 1,
        ]);
    }
}
