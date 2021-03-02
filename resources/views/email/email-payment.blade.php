<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>{{ env('APP_NAME') }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body style="margin: 0; padding: 0;">
 <table border="0" cellpadding="0" cellspacing="0" width="100%">
  <tr>
   <td>
    <table style="border: 1px solid #cccccc;" align="center" border="0" cellpadding="0" cellspacing="0" width="600">
     <tr>
      <td align="center" bgcolor="#70bbd9" style="padding: 20px 0 30px 0;">
        <img src="https://1.bp.blogspot.com/-XcI6X4NxTQ4/X_rgwpqnmnI/AAAAAAAAQ4k/V_OgTlNvfcg32GUbBGSfz4793uv_hTyaQCLcBGAsYHQ/w945-h600-p-k-no-nu/logo.png" width="100%" alt="Creating Email Magic" style="display: block; height: 110px; width: 110px;" />
      </td>
    </tr>
    <tr>
      <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
       <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
          <td style="color: #153643; font-family: Times New Roman, sans-serif; font-size: 20px; line-height: 20px;">
           <h3><b>Halo {{ $user->usr_name }}</b></h3>
         </td>
       </tr>
       <tr>
        <td style="padding: 20px 0 30px 0; color: #153643; font-family: Times New Roman, sans-serif; font-size: 18px; line-height: 20px;">
          @if($payment->stp_payment_status == 2)
            <p>Pembayaran anda telah di terima oleh kami</p>
            Silahkan klik link di bawah ini untuk masuk ke halaman formulir atau login dengan akun yang telah dibuat
            <p style="text-align: center; font-size:20px;">
              <a href="{{url('/student-registration')}}">
                <button style="background-color: dodgerblue; font-family: 'Times New Roman'; border: none; color: white; padding: 5px 20px; text-align: center; text-decoration: none; font-size: 17px; "> Klik Disini </button>
              </a>
            </p><br>
          @else
            <p>Maaf Pembayaran anda kami tolak dengan alasan</p>
            <p><b>{{$payment->stp_reason}}</b></p>
            Silahkan klik link di bawah ini untuk masuk ke halaman kirim bukti pembayaran untuk mengirim bukti pembayaran anda kembali
            <p style="text-align: center; font-size:20px;">
              <a href="{{url('/payment-upload')}}">
                <button style="background-color: dodgerblue; font-family: 'Times New Roman'; border: none; color: white; padding: 5px 20px; text-align: center; text-decoration: none; font-size: 17px; "> Klik Disini </button>
              </a>
            </p><br>
          @endif


          Terimakasih,<br>
          Tim PPDB {{ env('APP_NAME') }}
        </td>
      </tr>
    </table>
  </td>

</tr>
<tr>
  <td bgcolor="#70bbd9" style="padding: 30px 30px 30px 30px;">
   <table border="0" cellpadding="0" cellspacing="0" width="100%">
     <tr>
      <td width="75%" style="color: #ffffff; font-family: Times New Roman, sans-serif; font-size: 14px;">
       © PPDB {{ env('APP_NAME') }} 2021<br/>
       Lihat dan <a href="https://www.youtube.com/channel/UCCfYqV-2N44pFhsQpGEedCw" style="color: #ffffff;"><font color="#ffffff"><u>Subscribe</u></font></a> ke channel Youtube Kami.
     </td>
     <td align="right">
       <table border="0" cellpadding="0" cellspacing="0">
        <tr>
         <td>
          <a href="https://www.facebook.com/SMKMAHAPUTRACERDASUTAMA">
           <img src="https://i.pinimg.com/originals/d2/e5/35/d2e5359f8402cb8d3d7b22c463f9013b.png" alt="Facebook" width="38" height="38" style="display: block; margin-right: 5px; border-radius: 7px;" border="0" />
         </a>
       </td>
       <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
       <td>
        <a href="https://www.instagram.com/ppdb.smksmahaputracerdasutama/">
         <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/1200px-Instagram_logo_2016.svg.png" alt="instagram" width="38" height="38" style="display: block; margin-left: 5px;" border="0" />
       </a>
     </td>
   </tr>
 </table>
</td>
</tr>
</table>
</td>
</tr>
</table>

</td>
</tr>
</table>
</body>

</html>

