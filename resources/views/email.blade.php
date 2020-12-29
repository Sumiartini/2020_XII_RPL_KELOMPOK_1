<center>
    <h1><b>Halo {{ $user->usr_name }}</b></h1> <br>
    <strong> SELAMAT DATANG DI WEB SMK MAHAPUTRA CERDAS UTAMA </strong> <br>
    Perhatikan Syarat-Syarat Berikut Ini !!!
   <strong>
   	<p>Mengisi Formulir Pendaftaran dengan Data yang Benar</p>
	<p>Siapkan Foto Formal Calon Siswa</p>
	<p>No telepon dan Email harus dapat Dihubungi</p>
	</strong>
    Silahkan klik link di bawah ini untuk memverifikasi email anda <br>
    <a href="{{url('/account/'.$user->usr_id.'/'.$user->usr_verification_token.'/activate')}}"> Klik Disini </a>
</center>
   
  	
    	
    