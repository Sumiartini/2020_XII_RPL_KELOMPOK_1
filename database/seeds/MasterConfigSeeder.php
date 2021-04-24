<?php

use Illuminate\Database\Seeder;

class MasterConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('master_configs')->insert([
            'msc_id' 				=> '1',
            'msc_master_video_id' 	=> 2,
        	'msc_name' 				=> 'Konfigurasi',

            'msc_description' 		=> ' SMKS Mahaputra Cerdas Utama didirikan pada 22 Agustus tahun 2016, 
                                   adalah salah satu SMK swasta yang ada di Kabupaten Bandung yang memiliki program study Multimedia (MM) dan Rekyasa Perangkat Lunak (RPL), 
                                   menjadi sekolah pertama di Kabupaten Bandung dengan Konsep Green School
                                   atau Sekolah Hijau yang ramah lingkungan SMKS Mahaputra Cerdas Utama berkomitmen untuk mencetak Sumber Daya Manusia (SDM) yang unggul di era 4.0. ',
            
            'msc_vision' 				=> 'Menjadi penyelenggara pendidikan kejuruan berkarakter religius, yang melahirkan tenaga ahli, terampil, kreatif, inovatif, dan berpengetahuan yang ramah lingkungan di tahun 2025.',
            
            'msc_mision' 				=> '1. Menyelenggarakan pendidikan kejuruan berkarakter religius.
            2. Melahirkan tenaga ahli tingkat menengah yang berakhlakul karimah.
            3. Mewujudkan tenaga terampil, kreatif, inovatif, dan berpengetahuan.
            4. Membangun perilaku yang peduli terhdap lingkungan.
            5. Menjalin kerjasama kerjasama dengan lembaga akademik dan non akademik ditingkat lokal, nasional, dan internasioanal
            ',
            
            'msc_logo' 					=> 'assets/images/logo.png',
            'msc_first_school_phone_number' 	=> '022-5893178',
            'msc_second_school_phone_number'     => '0895-6304-68373',
            'msc_is_active' 			=> 1,

        ]);
        

    }
}
