<?php

use Illuminate\Database\Seeder;

class DistrictsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('districts')->insert([
        	'dst_city_id' => '1',
        	'dst_name' => 'Katapang',
        ]);

        DB::table('districts')->insert([
        	'dst_city_id' => '1',
        	'dst_name' => 'Arjasari',
        ]);

        DB::table('districts')->insert([
        	'dst_city_id' => '1',
        	'dst_name' => 'Baleendah',
        ]);

        DB::table('districts')->insert([
        	'dst_city_id' => '1',
        	'dst_name' => 'Banjaran',
        ]);

        DB::table('districts')->insert([
        	'dst_city_id' => '1',
        	'dst_name' => 'Soreang',
        ]);

        DB::table('districts')->insert([
        	'dst_city_id' => '2',
        	'dst_name' => 'Batujajar',
        ]);

        DB::table('districts')->insert([
        	'dst_city_id' => '2',
        	'dst_name' => 'Cililin',
        ]);

        DB::table('districts')->insert([
        	'dst_city_id' => '2',
        	'dst_name' => 'Lembang',
        ]);

        DB::table('districts')->insert([
        	'dst_city_id' => '2',
        	'dst_name' => 'Cihampelas',
        ]);

        DB::table('districts')->insert([
        	'dst_city_id' => '2',
        	'dst_name' => 'Cipeundeuy',
        ]);

    }
}
