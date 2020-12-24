<?php

use Illuminate\Database\Seeder;

class ProvincesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->insert([
            'prv_id'=>1,
            'prv_name'=>'Nanggroe Aceh Darussalam',
        ]);
        DB::table('provinces')->insert([
            'prv_id'=>2,
            'prv_name'=>'Bali',
        ]);
        DB::table('provinces')->insert([
            'prv_id'=>3,
            'prv_name'=>'Bangka Belitung',
        ]);
        DB::table('provinces')->insert([
            'prv_id'=>4,
            'prv_name'=>'Baten',
        ]);
        DB::table('provinces')->insert([
            'prv_id'=>5,
            'prv_name'=>'Bengkulu',
        ]);
        DB::table('provinces')->insert([
            'prv_id'=>6,
            'prv_name'=>'Gorontalo',
        ]);
        DB::table('provinces')->insert([
            'prv_id'=>7,
            'prv_name'=>'Jakarta',
        ]);
        DB::table('provinces')->insert([
            'prv_id'=>8,
            'prv_name'=>'Jambi',
        ]);
        DB::table('provinces')->insert([
            'prv_id'=>9,
            'prv_name'=>'Jawa Barat',
        ]);
        DB::table('provinces')->insert([
            'prv_id'=>10,
            'prv_name'=>'Jawa Tengah',
        ]);
        DB::table('provinces')->insert([
            'prv_id'=>11,
            'prv_name'=>'Jawa Timur',
        ]);
    }
}
