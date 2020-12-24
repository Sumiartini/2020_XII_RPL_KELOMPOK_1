<?php

use Illuminate\Database\Seeder;

class EntryTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('entry_types')->insert([
        	'ent_name' => 'PPDB',
        ]);

        DB::table('entry_types')->insert([
        	'ent_name' => 'Pindahan',
        ]);
    }
}
