<?php

use Illuminate\Database\Seeder;

class StudentDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //student pertama
        DB::table('student_details')->insert([
        	'std_student_id' => '1',
        	'std_type'  => 'personal',
        	'std_key'   => 'birth_certificate_registration_no',
            'std_value' => '1234567899',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '1',            
            'std_type'  => 'personal',
            'std_key'   => 'living_together',
            'std_value' => 'Orang Tua',
        ]);

        DB::table('student_details')->insert([
            'std_student_id' => '1',            
            'std_type'  => 'personal',
            'std_key'   => 'child',
            'std_value' => '2',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '1',
            'std_type'  => 'personal',
            'std_key'   => 'kip_no',
            'std_value' => '-',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '1',
            'std_type'  => 'personal',
            'std_key'   => 'kip_name',
            'std_value' => '-',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '1',
            'std_type'  => 'personal',
            'std_key'   => 'reason_worth_kip',
            'std_value' => '-',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '1',
            'std_type'  => 'father_data',
            'std_key'   => 'name',
            'std_value' => 'Ayahku',
        ]);

        DB::table('student_details')->insert([      
            'std_student_id' => '1',
            'std_type'  => 'father_data',
            'std_key'   => 'nik',
            'std_value' => '121212121212',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '1',
            'std_type'  => 'father_data',
            'std_key'   => 'year_of_birth',
            'std_value' => '1988-04-06',
        ]);

        DB::table('student_details')->insert([           
            'std_student_id' => '1',
            'std_type'  => 'father_data',
            'std_key'   => 'education',
            'std_value' => 'SMA - Sederajat',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '1',
            'std_type'  => 'father_data',
            'std_key'   => 'profession',
            'std_value' => 'Wiraswasta',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '1',
            'std_type'  => 'father_data',
            'std_key'   => 'monthly_income',
            'std_value' => 'lebih dari Rp. 4.000.000',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '1',
            'std_type'  => 'father_data',
            'std_key'   => 'phone_number',
            'std_value' => '0829917382910',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '1',
            'std_type'  => 'father_data',
            'std_key'   => 'disability',
            'std_value' => 'Tidak',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '1',
            'std_type'  => 'mother_data',
            'std_key'   => 'name',
            'std_value' => 'Ibuku',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '1',
            'std_type'  => 'mother_data',
            'std_key'   => 'nik',
            'std_value' => '1212122121',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '1',
            'std_type'  => 'mother_data',
            'std_key'   => 'year_of_birth',
            'std_value' => '1992-05-08',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '1',
            'std_type'  => 'mother_data',
            'std_key'   => 'education',
            'std_value' => 'SMA - Sederajat',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '1',
            'std_type'  => 'mother_data',
            'std_key'   => 'profession',
            'std_value' => 'Ibu Rumah Tangga',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '1',
            'std_type'  => 'mother_data',
            'std_key'   => 'monthly_income',
            'std_value' => '-',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '1',
            'std_type'  => 'mother_data',
            'std_key'   => 'phone_number',
            'std_value' => '0828374819208',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '1',
            'std_type'  => 'mother_data',
            'std_key'   => 'disability',
            'std_value' => 'Tidak',
        ]);

        DB::table('student_details')->insert([
            
            'std_student_id' => '1',
            'std_type'  => 'guardian_data',
            'std_key'   => 'name',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '1',
            'std_type'  => 'guardian_data',
            'std_key'   => 'nik',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '1',
            'std_type'  => 'guardian_data',
            'std_key'   => 'year_of_birth',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '1',
            'std_type'  => 'guardian_data',
            'std_key'   => 'education',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '1',
            'std_type'  => 'guardian_data',
            'std_key'   => 'profession',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '1',            
            'std_type'  => 'guardian_data',
            'std_key'   => 'monthly_income',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '1',
            'std_type'  => 'guardian_data',
            'std_key'   => 'phone_number',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '1',
            'std_type'  => 'guardian_data',
            'std_key'   => 'disability',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '1',
            'std_type'  => 'contact',
            'std_key'   => 'landline_number',
            'std_value' => '0222138193',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '1',
            'std_type'  => 'contact',
            'std_key'   => 'email',
            'std_value' => 'suhermana274@gmail.com',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '1',
            'std_type'  => 'achievement',
            'std_key'   => 'type',
            'std_value' => 'Sports',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '1',
            'std_type'  => 'achievement',
            'std_key'   => 'achievement_name',
            'std_value' => 'Juara Lomba Lari',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '1',
            'std_type'  => 'achievement',
            'std_key'   => 'achievement_level',
            'std_value' => 'Kabupaten',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '1',
            'std_type'  => 'achievement',
            'std_key'   => 'year',
            'std_value' => '2015',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '1',
            'std_type'  => 'achievement',
            'std_key'   => 'organizer',
            'std_value' => '-'
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '1',
            'std_type'  => 'other',
            'std_key'   => 'recomended_from',
            'std_value' => 'Tetangga',
        ]);

        
        //student kedua
        DB::table('student_details')->insert([
            'std_student_id' => '2',
            'std_type'  => 'personal',
            'std_key'   => 'birth_certificate_registration_no',
            'std_value' => '1234567899',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '2',            
            'std_type'  => 'personal',
            'std_key'   => 'living_together',
            'std_value' => 'Orang Tua',
        ]);

        DB::table('student_details')->insert([
            'std_student_id' => '2',            
            'std_type'  => 'personal',
            'std_key'   => 'child',
            'std_value' => '1',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '2',
            'std_type'  => 'personal',
            'std_key'   => 'kip_no',
            'std_value' => '-',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '2',
            'std_type'  => 'personal',
            'std_key'   => 'kip_name',
            'std_value' => '-',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '2',
            'std_type'  => 'personal',
            'std_key'   => 'reason_worth_kip',
            'std_value' => '-',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '2',
            'std_type'  => 'father_data',
            'std_key'   => 'name',
            'std_value' => 'Ayahku',
        ]);

        DB::table('student_details')->insert([      
            'std_student_id' => '2',
            'std_type'  => 'father_data',
            'std_key'   => 'nik',
            'std_value' => '131313131313',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '2',
            'std_type'  => 'father_data',
            'std_key'   => 'year_of_birth',
            'std_value' => '1998-05-08',
        ]);

        DB::table('student_details')->insert([           
            'std_student_id' => '2',
            'std_type'  => 'father_data',
            'std_key'   => 'education',
            'std_value' => 'KULIAH - Sederajat',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '2',
            'std_type'  => 'father_data',
            'std_key'   => 'profession',
            'std_value' => 'Wiraswasta',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '2',
            'std_type'  => 'father_data',
            'std_key'   => 'monthly_income',
            'std_value' => 'lebih dari Rp. 4.000.000',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '2',
            'std_type'  => 'father_data',
            'std_key'   => 'phone_number',
            'std_value' => '0829917381234',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '2',
            'std_type'  => 'father_data',
            'std_key'   => 'disability',
            'std_value' => 'Tidak',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '2',
            'std_type'  => 'mother_data',
            'std_key'   => 'name',
            'std_value' => 'Ibuku',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '2',
            'std_type'  => 'mother_data',
            'std_key'   => 'nik',
            'std_value' => '131313131313',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '2',
            'std_type'  => 'mother_data',
            'std_key'   => 'year_of_birth',
            'std_value' => '1995-09-10',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '2',
            'std_type'  => 'mother_data',
            'std_key'   => 'education',
            'std_value' => 'SMA - Sederajat',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '2',
            'std_type'  => 'mother_data',
            'std_key'   => 'profession',
            'std_value' => 'Ibu Rumah Tangga',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '2',
            'std_type'  => 'mother_data',
            'std_key'   => 'monthly_income',
            'std_value' => '-',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '2',
            'std_type'  => 'mother_data',
            'std_key'   => 'phone_number',
            'std_value' => '0828370009208',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '2',
            'std_type'  => 'mother_data',
            'std_key'   => 'disability',
            'std_value' => 'Tidak',
        ]);

        DB::table('student_details')->insert([
            
            'std_student_id' => '2',
            'std_type'  => 'guardian_data',
            'std_key'   => 'name',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '2',
            'std_type'  => 'guardian_data',
            'std_key'   => 'nik',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '2',
            'std_type'  => 'guardian_data',
            'std_key'   => 'year_of_birth',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '2',
            'std_type'  => 'guardian_data',
            'std_key'   => 'education',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '2',
            'std_type'  => 'guardian_data',
            'std_key'   => 'profession',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '2',            
            'std_type'  => 'guardian_data',
            'std_key'   => 'monthly_income',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '2',
            'std_type'  => 'guardian_data',
            'std_key'   => 'phone_number',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '2',
            'std_type'  => 'guardian_data',
            'std_key'   => 'disability',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '2',
            'std_type'  => 'contact',
            'std_key'   => 'landline_number',
            'std_value' => '02221380093',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '2',
            'std_type'  => 'contact',
            'std_key'   => 'email',
            'std_value' => 'rendyhutagaol01@gmail.com',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '2',
            'std_type'  => 'achievement',
            'std_key'   => 'type',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '2',
            'std_type'  => 'achievement',
            'std_key'   => 'achievement_name',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '2',
            'std_type'  => 'achievement',
            'std_key'   => 'achievement_level',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '2',
            'std_type'  => 'achievement',
            'std_key'   => 'year',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '2',
            'std_type'  => 'achievement',
            'std_key'   => 'organizer',
            'std_value' => ''
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '2',
            'std_type'  => 'other',
            'std_key'   => 'recomended_from',
            'std_value' => 'Tetangga',
        ]);


        //student ketiga
        DB::table('student_details')->insert([
            'std_student_id' => '3',
            'std_type'  => 'personal',
            'std_key'   => 'birth_certificate_registration_no',
            'std_value' => '12345678910',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '3',            
            'std_type'  => 'personal',
            'std_key'   => 'living_together',
            'std_value' => 'Orang Tua',
        ]);

        DB::table('student_details')->insert([
            'std_student_id' => '3',            
            'std_type'  => 'personal',
            'std_key'   => 'child',
            'std_value' => '1',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '3',
            'std_type'  => 'personal',
            'std_key'   => 'kip_no',
            'std_value' => '-',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '3',
            'std_type'  => 'personal',
            'std_key'   => 'kip_name',
            'std_value' => '-',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '3',
            'std_type'  => 'personal',
            'std_key'   => 'reason_worth_kip',
            'std_value' => '-',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '3',
            'std_type'  => 'father_data',
            'std_key'   => 'name',
            'std_value' => 'Ayahku',
        ]);

        DB::table('student_details')->insert([      
            'std_student_id' => '3',
            'std_type'  => 'father_data',
            'std_key'   => 'nik',
            'std_value' => '1414141414',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '3',
            'std_type'  => 'father_data',
            'std_key'   => 'year_of_birth',
            'std_value' => '1994-05-08',
        ]);

        DB::table('student_details')->insert([           
            'std_student_id' => '3',
            'std_type'  => 'father_data',
            'std_key'   => 'education',
            'std_value' => 'SMA - Sederajat',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '3',
            'std_type'  => 'father_data',
            'std_key'   => 'profession',
            'std_value' => 'Wirausaha',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '3',
            'std_type'  => 'father_data',
            'std_key'   => 'monthly_income',
            'std_value' => 'lebih dari Rp. 4.000.000',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '3',
            'std_type'  => 'father_data',
            'std_key'   => 'phone_number',
            'std_value' => '0829917381234',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '3',
            'std_type'  => 'father_data',
            'std_key'   => 'disability',
            'std_value' => 'Tidak',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '3',
            'std_type'  => 'mother_data',
            'std_key'   => 'name',
            'std_value' => 'Ibuku',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '3',
            'std_type'  => 'mother_data',
            'std_key'   => 'nik',
            'std_value' => '141414141414',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '3',
            'std_type'  => 'mother_data',
            'std_key'   => 'year_of_birth',
            'std_value' => '1997-10-10',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '3',
            'std_type'  => 'mother_data',
            'std_key'   => 'education',
            'std_value' => 'SMA - Sederajat',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '3',
            'std_type'  => 'mother_data',
            'std_key'   => 'profession',
            'std_value' => 'Ibu Rumah Tangga',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '3',
            'std_type'  => 'mother_data',
            'std_key'   => 'monthly_income',
            'std_value' => '-',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '3',
            'std_type'  => 'mother_data',
            'std_key'   => 'phone_number',
            'std_value' => '0853370009208',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '3',
            'std_type'  => 'mother_data',
            'std_key'   => 'disability',
            'std_value' => 'Tidak',
        ]);

        DB::table('student_details')->insert([
            
            'std_student_id' => '3',
            'std_type'  => 'guardian_data',
            'std_key'   => 'name',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '3',
            'std_type'  => 'guardian_data',
            'std_key'   => 'nik',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '3',
            'std_type'  => 'guardian_data',
            'std_key'   => 'year_of_birth',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '3',
            'std_type'  => 'guardian_data',
            'std_key'   => 'education',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '3',
            'std_type'  => 'guardian_data',
            'std_key'   => 'profession',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '3',            
            'std_type'  => 'guardian_data',
            'std_key'   => 'monthly_income',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '3',
            'std_type'  => 'guardian_data',
            'std_key'   => 'phone_number',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '3',
            'std_type'  => 'guardian_data',
            'std_key'   => 'disability',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '3',
            'std_type'  => 'contact',
            'std_key'   => 'landline_number',
            'std_value' => '02221380093',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '3',
            'std_type'  => 'contact',
            'std_key'   => 'email',
            'std_value' => 'dede03suminar@gmail.com',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '3',
            'std_type'  => 'achievement',
            'std_key'   => 'type',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '3',
            'std_type'  => 'achievement',
            'std_key'   => 'achievement_name',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '3',
            'std_type'  => 'achievement',
            'std_key'   => 'achievement_level',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '3',
            'std_type'  => 'achievement',
            'std_key'   => 'year',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '3',
            'std_type'  => 'achievement',
            'std_key'   => 'organizer',
            'std_value' => ''
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '3',
            'std_type'  => 'other',
            'std_key'   => 'recomended_from',
            'std_value' => 'Tetangga',
        ]);

        //student keempat
        DB::table('student_details')->insert([
            'std_student_id' => '4',
            'std_type'  => 'personal',
            'std_key'   => 'birth_certificate_registration_no',
            'std_value' => '12345678911',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '4',            
            'std_type'  => 'personal',
            'std_key'   => 'living_together',
            'std_value' => 'Orang Tua',
        ]);

        DB::table('student_details')->insert([
            'std_student_id' => '4',            
            'std_type'  => 'personal',
            'std_key'   => 'child',
            'std_value' => '1',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '4',
            'std_type'  => 'personal',
            'std_key'   => 'kip_no',
            'std_value' => '-',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '4',
            'std_type'  => 'personal',
            'std_key'   => 'kip_name',
            'std_value' => '-',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '4',
            'std_type'  => 'personal',
            'std_key'   => 'reason_worth_kip',
            'std_value' => '-',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '4',
            'std_type'  => 'father_data',
            'std_key'   => 'name',
            'std_value' => 'Ayahku',
        ]);

        DB::table('student_details')->insert([      
            'std_student_id' => '4',
            'std_type'  => 'father_data',
            'std_key'   => 'nik',
            'std_value' => '1515151515',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '4',
            'std_type'  => 'father_data',
            'std_key'   => 'year_of_birth',
            'std_value' => '1989-05-08',
        ]);

        DB::table('student_details')->insert([           
            'std_student_id' => '4',
            'std_type'  => 'father_data',
            'std_key'   => 'education',
            'std_value' => 'SMA - Sederajat',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '4',
            'std_type'  => 'father_data',
            'std_key'   => 'profession',
            'std_value' => 'Wirausaha',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '4',
            'std_type'  => 'father_data',
            'std_key'   => 'monthly_income',
            'std_value' => 'lebih dari Rp. 4.000.000',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '4',
            'std_type'  => 'father_data',
            'std_key'   => 'phone_number',
            'std_value' => '0829917381234',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '4',
            'std_type'  => 'father_data',
            'std_key'   => 'disability',
            'std_value' => 'Tidak',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '4',
            'std_type'  => 'mother_data',
            'std_key'   => 'name',
            'std_value' => 'Ibuku',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '4',
            'std_type'  => 'mother_data',
            'std_key'   => 'nik',
            'std_value' => '1515151515',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '4',
            'std_type'  => 'mother_data',
            'std_key'   => 'year_of_birth',
            'std_value' => '1990-10-07',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '4',
            'std_type'  => 'mother_data',
            'std_key'   => 'education',
            'std_value' => 'SMP - Sederajat',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '4',
            'std_type'  => 'mother_data',
            'std_key'   => 'profession',
            'std_value' => 'Ibu Rumah Tangga',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '4',
            'std_type'  => 'mother_data',
            'std_key'   => 'monthly_income',
            'std_value' => '-',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '4',
            'std_type'  => 'mother_data',
            'std_key'   => 'phone_number',
            'std_value' => '0895372117580',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '4',
            'std_type'  => 'mother_data',
            'std_key'   => 'disability',
            'std_value' => 'Tidak',
        ]);

        DB::table('student_details')->insert([
            
            'std_student_id' => '4',
            'std_type'  => 'guardian_data',
            'std_key'   => 'name',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '4',
            'std_type'  => 'guardian_data',
            'std_key'   => 'nik',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '4',
            'std_type'  => 'guardian_data',
            'std_key'   => 'year_of_birth',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '4',
            'std_type'  => 'guardian_data',
            'std_key'   => 'education',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '4',
            'std_type'  => 'guardian_data',
            'std_key'   => 'profession',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '4',            
            'std_type'  => 'guardian_data',
            'std_key'   => 'monthly_income',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '4',
            'std_type'  => 'guardian_data',
            'std_key'   => 'phone_number',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '4',
            'std_type'  => 'guardian_data',
            'std_key'   => 'disability',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '4',
            'std_type'  => 'contact',
            'std_key'   => 'landline_number',
            'std_value' => '02221380093',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '4',
            'std_type'  => 'contact',
            'std_key'   => 'email',
            'std_value' => 'susilawatielsa5@gmail.com',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '4',
            'std_type'  => 'achievement',
            'std_key'   => 'type',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '4',
            'std_type'  => 'achievement',
            'std_key'   => 'achievement_name',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '4',
            'std_type'  => 'achievement',
            'std_key'   => 'achievement_level',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '4',
            'std_type'  => 'achievement',
            'std_key'   => 'year',
            'std_value' => '',
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '4',
            'std_type'  => 'achievement',
            'std_key'   => 'organizer',
            'std_value' => ''
        ]);

        DB::table('student_details')->insert([            
            'std_student_id' => '4',
            'std_type'  => 'other',
            'std_key'   => 'recomended_from',
            'std_value' => 'Tetangga',
        ]);

    }
}
