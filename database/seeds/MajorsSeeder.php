<?php

use Illuminate\Database\Seeder;

class MajorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('majors')->insert([
        	'mjr_name' => 'Rekayasa Perangkat Lunak',
            'mjr_is_active' => 1,
        ]);

        DB::table('majors')->insert([
        	'mjr_name' => 'Multimedia',
            'mjr_is_active' => 1,
        ]);
    }
}
