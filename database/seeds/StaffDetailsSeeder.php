<?php

use Illuminate\Database\Seeder;

class StaffDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Staf pertama
        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '1',
        	'sfd_type'  => 'personal',
        	'sfd_key'   => 'nik',
            'sfd_value' => '1212121212121',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '1',
        	'sfd_type'  => 'educational_background',
        	'sfd_key'   => 'year_grade_school',
            'sfd_value' => '1999',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '1',
        	'sfd_type'  => 'educational_background',
        	'sfd_key'   => 'grade_school',
            'sfd_value' => 'SDN Sukamukti',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '1',
        	'sfd_type'  => 'educational_background',
        	'sfd_key'   => 'year_junior_high_school',
            'sfd_value' => '2005',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '1',
        	'sfd_type'  => 'educational_background',
        	'sfd_key'   => 'junior_high_school',
            'sfd_value' => 'SMPN 2 Katapang',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '1',
        	'sfd_type'  => 'educational_background',
        	'sfd_key'   => 'year_senior_high_school',
            'sfd_value' => '2008',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '1',
        	'sfd_type'  => 'educational_background',
        	'sfd_key'   => 'senior_high_school',
            'sfd_value' => 'SMK Mahaputra',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '1',
        	'sfd_type'  => 'educational_background',
        	'sfd_key'   => 'year_entry',
            'sfd_value' => '2008',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '1',
        	'sfd_type'  => 'educational_background',
        	'sfd_key'   => 'college',
            'sfd_value' => 'Universitas Gajah Mada',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '1',
        	'sfd_type'  => 'educational_background',
        	'sfd_key'   => 'faculty_name',
            'sfd_value' => 'pendidikan',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '1',
        	'sfd_type'  => 'educational_background',
        	'sfd_key'   => 'faculty_major',
            'sfd_value' => 'Matematika',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '1',
        	'sfd_type'  => 'educational_background',
        	'sfd_key'   => 'year_graduated',
            'sfd_value' => '2012',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '1',
        	'sfd_type'  => 'educational_background',
        	'sfd_key'   => 'degree',
            'sfd_value' => 'Spd',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '1',
        	'sfd_type'  => 'history_job',
        	'sfd_key'   => 'name',
            'sfd_value' => 'Mengajar di SMA',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '1',
        	'sfd_type'  => 'history_job',
        	'sfd_key'   => 'lenght_of_work',
            'sfd_value' => '2012/2014',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '1',
        	'sfd_type'  => 'expertise',
        	'sfd_key'   => 'name',
            'sfd_value' => 'Menguasai Ms office',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '1',
        	'sfd_type'  => 'expertise',
        	'sfd_key'   => 'name_of_agency',
            'sfd_value' => '-',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '1',
        	'sfd_type'  => 'other',
        	'sfd_key'   => 'identity_card',
            'sfd_value' => 'assets/images/formulir.jpeg',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '1',
        	'sfd_type'  => 'other',
        	'sfd_key'   => 'family_card',
            'sfd_value' => 'assets/images/formulir.jpeg',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '1',
        	'sfd_type'  => 'other',
        	'sfd_key'   => 'scholar_diploma',
            'sfd_value' => 'assets/images/formulir.jpeg',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '1',
        	'sfd_type'  => 'other',
        	'sfd_key'   => 'curriculum_vitae',
            'sfd_value' => 'assets/images/formulir.jpeg',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '1',
        	'sfd_type'  => 'other',
        	'sfd_key'   => 'application_letter',
            'sfd_value' => 'assets/images/formulir.jpeg',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '1',
        	'sfd_type'  => 'other',
        	'sfd_key'   => 'resume',
            'sfd_value' => 'assets/images/formulir.jpeg',
        ]);

        //staf kedua
        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '3',
        	'sfd_type'  => 'personal',
        	'sfd_key'   => 'nik',
            'sfd_value' => '1212121212121',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '3',
        	'sfd_type'  => 'educational_background',
        	'sfd_key'   => 'year_grade_school',
            'sfd_value' => '1999',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '1',
        	'sfd_type'  => 'educational_background',
        	'sfd_key'   => 'grade_school',
            'sfd_value' => 'SDN Sukamukti',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '3',
        	'sfd_type'  => 'educational_background',
        	'sfd_key'   => 'year_junior_high_school',
            'sfd_value' => '2005',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '3',
        	'sfd_type'  => 'educational_background',
        	'sfd_key'   => 'junior_high_school',
            'sfd_value' => 'SMPN 2 Katapang',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '3',
        	'sfd_type'  => 'educational_background',
        	'sfd_key'   => 'year_senior_high_school',
            'sfd_value' => '2008',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '3',
        	'sfd_type'  => 'educational_background',
        	'sfd_key'   => 'senior_high_school',
            'sfd_value' => 'SMK Mahaputra',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '3',
        	'sfd_type'  => 'educational_background',
        	'sfd_key'   => 'year_entry',
            'sfd_value' => '2008',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '3',
        	'sfd_type'  => 'educational_background',
        	'sfd_key'   => 'college',
            'sfd_value' => 'Universitas Gajah Mada',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '3',
        	'sfd_type'  => 'educational_background',
        	'sfd_key'   => 'faculty_name',
            'sfd_value' => 'pendidikan',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '3',
        	'sfd_type'  => 'educational_background',
        	'sfd_key'   => 'faculty_major',
            'sfd_value' => 'Matematika',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '3',
        	'sfd_type'  => 'educational_background',
        	'sfd_key'   => 'year_graduated',
            'sfd_value' => '2012',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '3',
        	'sfd_type'  => 'educational_background',
        	'sfd_key'   => 'degree',
            'sfd_value' => 'Spd',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '3',
        	'sfd_type'  => 'history_job',
        	'sfd_key'   => 'name',
            'sfd_value' => 'Mengajar di SMA',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '3',
        	'sfd_type'  => 'history_job',
        	'sfd_key'   => 'lenght_of_work',
            'sfd_value' => '2012/2014',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '3',
        	'sfd_type'  => 'expertise',
        	'sfd_key'   => 'name',
            'sfd_value' => 'Menguasai Ms office',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '3',
        	'sfd_type'  => 'expertise',
        	'sfd_key'   => 'name_of_agency',
            'sfd_value' => '-',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '3',
        	'sfd_type'  => 'other',
        	'sfd_key'   => 'identity_card',
            'sfd_value' => 'assets/images/formulir.jpeg',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '3',
        	'sfd_type'  => 'other',
        	'sfd_key'   => 'family_card',
            'sfd_value' => 'assets/images/formulir.jpeg',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '3',
        	'sfd_type'  => 'other',
        	'sfd_key'   => 'scholar_diploma',
            'sfd_value' => 'assets/images/formulir.jpeg',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '3',
        	'sfd_type'  => 'other',
        	'sfd_key'   => 'curriculum_vitae',
            'sfd_value' => 'assets/images/formulir.jpeg',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '3',
        	'sfd_type'  => 'other',
        	'sfd_key'   => 'application_letter',
            'sfd_value' => 'assets/images/formulir.jpeg',
        ]);

        DB::table('staff_details')->insert([
        	'sfd_staff_id' => '3',
        	'sfd_type'  => 'other',
        	'sfd_key'   => 'resume',
            'sfd_value' => 'assets/images/formulir.jpeg',
        ]);


    }
}
