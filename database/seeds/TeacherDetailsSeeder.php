<?php

use Illuminate\Database\Seeder;

class TeacherDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	//guru pertama

    	//educational_background (Riwayat Pendidikan)
         DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '1',
        	'tcd_type'  => 'educational_background',
        	'tcd_key'   => 'year_grade_school',
            'tcd_value' => '1999',
        ]);
         DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '1',
        	'tcd_type'  => 'educational_background',
        	'tcd_key'   => 'grade_school',
            'tcd_value' => 'sd 5 bandung',
        ]);
         DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '1',
        	'tcd_type'  => 'educational_background',
        	'tcd_key'   => 'year_junior_high_school',
            'tcd_value' => '2002',
        ]);
         DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '1',
        	'tcd_type'  => 'educational_background',
        	'tcd_key'   => 'junior_high_school',
            'tcd_value' => 'Smp 5 bandung',
        ]);
         DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '1',
        	'tcd_type'  => 'educational_background',
        	'tcd_key'   => 'year_senior_high_school',
            'tcd_value' => '2005',
        ]);
         DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '1',
        	'tcd_type'  => 'educational_background',
        	'tcd_key'   => 'senior_high_school',
            'tcd_value' => 'smp 5 bandung',
        ]);
         DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '1',
        	'tcd_type'  => 'educational_background',
        	'tcd_key'   => 'year_entry',
            'tcd_value' => '2006',
        ]);
         DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '1',
        	'tcd_type'  => 'educational_background',
        	'tcd_key'   => 'college',
            'tcd_value' => 'Universitas Gajah Mada',
        ]);
         DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '1',
        	'tcd_type'  => 'educational_background',
        	'tcd_key'   => 'faculty_name',
            'tcd_value' => 'Sastra',
        ]);
         DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '1',
        	'tcd_type'  => 'educational_background',
        	'tcd_key'   => 'faculty_major',
            'tcd_value' => 'Sastra Indonesia',
        ]);
         DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '1',
        	'tcd_type'  => 'educational_background',
        	'tcd_key'   => 'year_graduated',
            'tcd_value' => '2010',
        ]);
         DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '1',
        	'tcd_type'  => 'educational_background',
        	'tcd_key'   => 'degree',
            'tcd_value' => 'Sarjana Pendidikan',
        ]);


        //teaching_history (Riwayat Mengajar)
        DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '1',
        	'tcd_type'  => 'teaching_history',
        	'tcd_key'   => 'school_name',
            'tcd_value' => 'Smp Cempaka',
        ]);
        DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '1',
        	'tcd_type'  => 'teaching_history',
        	'tcd_key'   => 'subject',
            'tcd_value' => 'bahasa indonesia',
        ]);
        DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '1',
        	'tcd_type'  => 'teaching_history',
        	'tcd_key'   => 'grade_or_level',
            'tcd_value' => '7',
        ]);
        DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '1',
        	'tcd_type'  => 'teaching_history',
        	'tcd_key'   => 'number_of_hours',
            'tcd_value' => '3',
        ]);
        DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '1',
        	'tcd_type'  => 'teaching_history',
        	'tcd_key'   => 'from_year_to_year',
            'tcd_value' => '2015 - 2017',
        ]);
        DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '1',
        	'tcd_type'  => 'teaching_history',
        	'tcd_key'   => 'status',
            'tcd_value' => 'Guru Honorer',
        ]);

        //Other (lainnya)

        DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '1',
        	'tcd_type'  => 'other',
        	'tcd_key'   => 'identity_card',
            'tcd_value' => 'assets/images/slide/1.jpg',
        ]);

        DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '1',
        	'tcd_type'  => 'other',
        	'tcd_key'   => 'family_card',
            'tcd_value' => 'assets/images/slide/1.jpg',
        ]);

        DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '1',
        	'tcd_type'  => 'other',
        	'tcd_key'   => 'scholar_diploma',
            'tcd_value' => 'assets/images/slide/1.jpg',
        ]);

        DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '1',
        	'tcd_type'  => 'other',
        	'tcd_key'   => 'curriculum_vitae',
            'tcd_value' => 'assets/images/slide/1.jpg',
        ]);

        DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '1',
        	'tcd_type'  => 'other',
        	'tcd_key'   => 'application_letter',
            'tcd_value' => 'assets/images/slide/1.jpg',
        ]);

        DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '1',
        	'tcd_type'  => 'other',
        	'tcd_key'   => 'resume',
            'tcd_value' => 'assets/images/slide/1.jpg',
        ]);

//guru kedua

    	//educational_background (Riwayat Pendidikan)
         DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '2',
        	'tcd_type'  => 'educational_background',
        	'tcd_key'   => 'year_grade_school',
            'tcd_value' => '1999',
        ]);
         DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '2',
        	'tcd_type'  => 'educational_background',
        	'tcd_key'   => 'grade_school',
            'tcd_value' => 'sd 5 bandung',
        ]);
         DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '2',
        	'tcd_type'  => 'educational_background',
        	'tcd_key'   => 'year_junior_high_school',
            'tcd_value' => '2002',
        ]);
         DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '2',
        	'tcd_type'  => 'educational_background',
        	'tcd_key'   => 'junior_high_school',
            'tcd_value' => 'Smp 5 bandung',
        ]);
         DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '2',
        	'tcd_type'  => 'educational_background',
        	'tcd_key'   => 'year_senior_high_school',
            'tcd_value' => '2005',
        ]);
         DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '2',
        	'tcd_type'  => 'educational_background',
        	'tcd_key'   => 'senior_high_school',
            'tcd_value' => 'smp 5 bandung',
        ]);
         DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '2',
        	'tcd_type'  => 'educational_background',
        	'tcd_key'   => 'year_entry',
            'tcd_value' => '2006',
        ]);
         DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '2',
        	'tcd_type'  => 'educational_background',
        	'tcd_key'   => 'college',
            'tcd_value' => 'Universitas Gajah Mada',
        ]);
         DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '2',
        	'tcd_type'  => 'educational_background',
        	'tcd_key'   => 'faculty_name',
            'tcd_value' => 'Sastra',
        ]);
         DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '2',
        	'tcd_type'  => 'educational_background',
        	'tcd_key'   => 'faculty_major',
            'tcd_value' => 'Sastra Indonesia',
        ]);
         DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '2',
        	'tcd_type'  => 'educational_background',
        	'tcd_key'   => 'year_graduated',
            'tcd_value' => '2010',
        ]);
         DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '2',
        	'tcd_type'  => 'educational_background',
        	'tcd_key'   => 'degree',
            'tcd_value' => 'Sarjana Pendidikan',
        ]);


        //teaching_history (Riwayat Mengajar)
        DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '2',
        	'tcd_type'  => 'teaching_history',
        	'tcd_key'   => 'school_name',
            'tcd_value' => 'Smp Cempaka',
        ]);
        DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '2',
        	'tcd_type'  => 'teaching_history',
        	'tcd_key'   => 'subject',
            'tcd_value' => 'bahasa indonesia',
        ]);
        DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '2',
        	'tcd_type'  => 'teaching_history',
        	'tcd_key'   => 'grade_or_level',
            'tcd_value' => '7',
        ]);
        DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '2',
        	'tcd_type'  => 'teaching_history',
        	'tcd_key'   => 'number_of_hours',
            'tcd_value' => '3',
        ]);
        DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '2',
        	'tcd_type'  => 'teaching_history',
        	'tcd_key'   => 'from_year_to_year',
            'tcd_value' => '2015 - 2017',
        ]);
        DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '2',
        	'tcd_type'  => 'teaching_history',
        	'tcd_key'   => 'status',
            'tcd_value' => 'Guru Honorer',
        ]);

        //Other (lainnya)

        DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '2',
        	'tcd_type'  => 'other',
        	'tcd_key'   => 'identity_card',
            'tcd_value' => 'assets/images/slide/1.jpg',
        ]);

        DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '2',
        	'tcd_type'  => 'other',
        	'tcd_key'   => 'family_card',
            'tcd_value' => 'assets/images/slide/1.jpg',
        ]);

        DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '2',
        	'tcd_type'  => 'other',
        	'tcd_key'   => 'scholar_diploma',
            'tcd_value' => 'assets/images/slide/1.jpg',
        ]);

        DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '2',
        	'tcd_type'  => 'other',
        	'tcd_key'   => 'curriculum_vitae',
            'tcd_value' => 'assets/images/slide/1.jpg',
        ]);

        DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '2',
        	'tcd_type'  => 'other',
        	'tcd_key'   => 'application_letter',
            'tcd_value' => 'assets/images/slide/1.jpg',
        ]);

        DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '2',
        	'tcd_type'  => 'other',
        	'tcd_key'   => 'resume',
            'tcd_value' => 'assets/images/slide/1.jpg',
        ]);

		//guru ketiga

    	//educational_background (Riwayat Pendidikan)
         DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '3',
        	'tcd_type'  => 'educational_background',
        	'tcd_key'   => 'year_grade_school',
            'tcd_value' => '1999',
        ]);
         DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '3',
        	'tcd_type'  => 'educational_background',
        	'tcd_key'   => 'grade_school',
            'tcd_value' => 'sd 5 bandung',
        ]);
         DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '3',
        	'tcd_type'  => 'educational_background',
        	'tcd_key'   => 'year_junior_high_school',
            'tcd_value' => '2002',
        ]);
         DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '3',
        	'tcd_type'  => 'educational_background',
        	'tcd_key'   => 'junior_high_school',
            'tcd_value' => 'Smp 5 bandung',
        ]);
         DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '3',
        	'tcd_type'  => 'educational_background',
        	'tcd_key'   => 'year_senior_high_school',
            'tcd_value' => '2005',
        ]);
         DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '3',
        	'tcd_type'  => 'educational_background',
        	'tcd_key'   => 'senior_high_school',
            'tcd_value' => 'smp 5 bandung',
        ]);
         DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '3',
        	'tcd_type'  => 'educational_background',
        	'tcd_key'   => 'year_entry',
            'tcd_value' => '2006',
        ]);
         DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '3',
        	'tcd_type'  => 'educational_background',
        	'tcd_key'   => 'college',
            'tcd_value' => 'Universitas Gajah Mada',
        ]);
         DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '3',
        	'tcd_type'  => 'educational_background',
        	'tcd_key'   => 'faculty_name',
            'tcd_value' => 'Sastra',
        ]);
         DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '3',
        	'tcd_type'  => 'educational_background',
        	'tcd_key'   => 'faculty_major',
            'tcd_value' => 'Sastra Indonesia',
        ]);
         DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '3',
        	'tcd_type'  => 'educational_background',
        	'tcd_key'   => 'year_graduated',
            'tcd_value' => '2010',
        ]);
         DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '3',
        	'tcd_type'  => 'educational_background',
        	'tcd_key'   => 'degree',
            'tcd_value' => 'Sarjana Pendidikan',
        ]);


        //teaching_history (Riwayat Mengajar)
        DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '3',
        	'tcd_type'  => 'teaching_history',
        	'tcd_key'   => 'school_name',
            'tcd_value' => 'Smp Cempaka',
        ]);
        DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '3',
        	'tcd_type'  => 'teaching_history',
        	'tcd_key'   => 'subject',
            'tcd_value' => 'bahasa indonesia',
        ]);
        DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '3',
        	'tcd_type'  => 'teaching_history',
        	'tcd_key'   => 'grade_or_level',
            'tcd_value' => '7',
        ]);
        DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '3',
        	'tcd_type'  => 'teaching_history',
        	'tcd_key'   => 'number_of_hours',
            'tcd_value' => '3',
        ]);
        DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '3',
        	'tcd_type'  => 'teaching_history',
        	'tcd_key'   => 'from_year_to_year',
            'tcd_value' => '2015 - 2017',
        ]);
        DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '3',
        	'tcd_type'  => 'teaching_history',
        	'tcd_key'   => 'status',
            'tcd_value' => 'Guru Honorer',
        ]);

        //Other (lainnya)

        DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '3',
        	'tcd_type'  => 'other',
        	'tcd_key'   => 'identity_card',
            'tcd_value' => 'assets/images/slide/1.jpg',
        ]);

        DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '3',
        	'tcd_type'  => 'other',
        	'tcd_key'   => 'family_card',
            'tcd_value' => 'assets/images/slide/1.jpg',
        ]);

        DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '3',
        	'tcd_type'  => 'other',
        	'tcd_key'   => 'scholar_diploma',
            'tcd_value' => 'assets/images/slide/1.jpg',
        ]);

        DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '3',
        	'tcd_type'  => 'other',
        	'tcd_key'   => 'curriculum_vitae',
            'tcd_value' => 'assets/images/slide/1.jpg',
        ]);

        DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '3',
        	'tcd_type'  => 'other',
        	'tcd_key'   => 'application_letter',
            'tcd_value' => 'assets/images/slide/1.jpg',
        ]);

        DB::table('teacher_details')->insert([
        	'tcd_teacher_id' => '3',
        	'tcd_type'  => 'other',
        	'tcd_key'   => 'resume',
            'tcd_value' => 'assets/images/slide/1.jpg',
        ]);


    }
}
