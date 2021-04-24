<?php

use Illuminate\Database\Seeder;

class MasterVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('master_videos')->insert([
        	'msv_id' 		=> 1,
            'msv_name' 		=> 'Profil',
            'msv_url_video' => 'https://www.youtube.com/embed/is-6lNoy9zM',
            'msv_is_active' => 1,
        ]);
        DB::table('master_videos')->insert([
        	'msv_id' 		=> 2,
            'msv_name' 		=> 'Profil baru',
            'msv_url_video' => 'https://www.youtube.com/embed/9ALpIk7HmTM',
            'msv_is_active' => 1,
        ]);
        
    }
}
