<html lang="en">
  <head>
    <title></title>
  </head>
  <body>
    <p style="text-align: center;"><strong><img src="https://1.bp.blogspot.com/-XcI6X4NxTQ4/X_rgwpqnmnI/AAAAAAAAQ4k/V_OgTlNvfcg32GUbBGSfz4793uv_hTyaQCLcBGAsYHQ/w945-h600-p-k-no-nu/logo.png" alt="" width="170" height="170" /></strong></p>
    <p style="text-align: center; color: black; font-size:20px; font-family: 'Times New Roman'"><strong>Halo {{ $user->usr_name }}</strong>&nbsp;</p>
    <p style="text-align: center; color: black; font-size:20px; font-family: 'Times New Roman'"><strong>SELAMAT DATANG DI WEB SMK MAHAPUTRA CERDAS UTAMA</strong></p>
    <p style="text-align: center; color: black; font-size:20px; font-family: 'Times New Roman'">&nbsp;Silahkan klik link di bawah ini untuk memverifikasi email anda</p>
    <p style="text-align: center; font-size:20px;"><a href="{{url('/account/'.$user->usr_id.'/'.$user->usr_verification_token.'/activate')}}">
      <button style="background-color: dodgerblue; font-family: 'Times New Roman'; font-weight: bold; border: none; color: yellow; padding: 15px 40px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px;"> Klik Disini </button></a>
    </p>    
  </body>
</html>

