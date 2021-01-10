<!-- <center>
    <h1><b>Halo {{ $user->usr_name }}</b></h1> <br>
    <strong> SELAMAT DATANG DI WEB SMK MAHAPUTRA CERDAS UTAMA </strong> <br>
    Perhatikan Syarat-Syarat Berikut Ini !!!
    <img src=https://drive.google.com/file/d/1PTq_YDAJhQVm3UT6EgPv5NZWUAXzBOHn/view?usp=sharingy>
    Silahkan klik link di bawah ini untuk memverifikasi email anda <br>
    <a href="{{url('/account/'.$user->usr_id.'/'.$user->usr_verification_token.'/activate')}}"> Klik Disini </a>
</center> -->

<!DOCTYPE html>
<html>
<head>
    <meta>
    <title></title>
    <meta>
</head>
<body>
    <table width="100%">
    <tr>
        <td>
            <center>
              <h1 style=""> Halo {{ $user->usr_name }} </h1><br>
              <h3 style="color:blue;" >SELAMAT DATANG DI WEB SMK MAHAPUTRA CERDAS UTAMA</h3>
            </center>
        </td>
    </tr>
    <tr>
        <td style="padding: 20px 0 30px 0;">
        <center>Perhatikan Syarat-syarat berikut ini !!!
          <p>Mengisi formulir pendaftaran dengan data yang benar <br>
            Siapkan foto formal calon siswa <br>
          No telepon dan email harus dapat dihubungi</p>
         
        Silahkan klik link di bawah ini untuk memverifikasi email anda <br>
      <a class="btn btn-primary" href="{{url('/account/'.$user->usr_id.'/'.$user->usr_verification_token.'/activate')}}"> Klik Disini </a>
             </center>
        </td>
    </tr>
</table>
</body>

</html>  	
    	
    