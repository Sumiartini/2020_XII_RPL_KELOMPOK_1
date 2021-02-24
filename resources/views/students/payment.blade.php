<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SMK Mahaputra - Pembayaran</title>
    <!--favicon-->
    <link rel="icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">
    <!-- simplebar CSS-->
    <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet">
      <!-- notifications css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/notifications/css/lobibox.min.css')}}"/>
    <!-- Bootstrap core CSS-->
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- animate CSS-->
    <link href="{{ asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css">
    <!-- Icons CSS-->
    <link href="{{ asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <!-- Sidebar CSS-->
    <link href="{{ asset('assets/css/sidebar-menu.css')}}" rel="stylesheet">
    <!-- Custom Style-->
    <link href="{{ asset('assets/css/app-style.css')}}" rel="stylesheet">
    <style>
        footer{
        bottom: 0px;
          color: #272727;
          text-align: center;
          padding: 12px 30px;
          position: fixed;
          right: 0;
          left: 0;
          background-color: #f9f9f9;
          border-top: 1px solid rgb(223, 223, 255);
          -webkit-transition: all 0.3s ease;
          -moz-transition: all 0.3s ease;
          -o-transition: all 0.3s ease;
          transition: all 0.3s ease; 
        }
        form .footer-form {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <header class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('assets/images/mahaputra.jfif') }}" style="width: 50px;" height="50px;"> {{ config('app.name', 'Laravel') }}
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ __('Register') }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('register-student') }}">Siswa</a>
                            <a class="dropdown-item" href="{{ url('register-teacher') }}">Guru</a>
                            <a class="dropdown-item" href="{{ url('register-staff') }}">Staff TU</a>
                        </div>
                    </li>
                    @endif
                    @else


                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->usr_name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</header><br>

<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <div class="alert-icon contrast-alert">
                <i class="icon-check"></i>
            </div>
            <div class="alert-message">
                <span><strong>Berhasil!</strong> {{$message}}.</span>
            </div>
        </div>
        @endif
        <div class="card">
            <div class="card-body">
                @if($student->stu_payment_picture == null)
                <h3> Terimakasih anda telah mendaftar di SMK Mahaputra</h3>
                <p> Untuk melanjutkan pendaftaran anda di haruskan membayar formulir sebesar Rp.150.000 ke nomor rekening di bawah ini</p>
                        <div class="row">

                            <dt class="col-sm-2">Transfer Ke Bank</dt>
                            <dd class="col-sm-10">
                                <img src="{{ asset('assets/images/payment-icons/payment-bca.png') }}" height="48">
                            </dd>

                            <dt class="col-sm-2">Nomor Rekening</dt>
                            <dd class="col-sm-10">
                                <input readonly style="border: none; background-color: white; color: #636363;" type="text" value="346 171 4674" id="text-copy"  />
                                 <button type="button" class="btn btn-outline-primary btn-sm btn-round waves-effect waves-light m-1" onclick="copy_text()">Copy</button>
                            </dd>

                            <dt class="col-sm-2">Atas Nama</dt>
                            <dd class="col-sm-10">
                               Dedi Hidayat.Drs
                            </dd>
                        </div>
                    <form id="form-validate" autocomplete="off" method="POST" action="{{ url('payment-upload') }}" novalidate="novalidate" enctype="multipart/form-data">
                        @csrf
                        <label style="margin-top: 30px;">Foto Bukti Transfer<span style="color:red"> *</span></label>
                        <div class="form-group row">

                            <div class="col-sm-4">
                                <img class="img-thumbnail" id="tampil_picture" style="object-fit: cover; height: 200px; width: 200px" />
                                <input type="file" name="stu_payment_picture" id="preview_gambar" class="@error('stu_payment_picture') is-invalid @enderror" accept="image/x-png,image/gif,image/jpeg onchange="document.getElementById('stu_payment_picture').value=this.value" /><br>
                                <!-- <button type="button" id="stu_payment_picture" class="btn btn-outline-primary btn-sm waves-effect waves-light m-2" onclick="document.getElementById('preview_gambar').click()"> Pilih Gambar </button> -->
                                @error('stu_payment_picture')
                                <p>
                                    <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                                </p>
                                @enderror
                                <div class="footer-form">   
                                    <button id="btnSubmit" type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> KIRIM</button>
                                </div>
                            </div>

                        </div>
                    </form>
                @else 
                <h3>Terimakasih, pembayaran anda telah berhasil</h3>
                <p> Tunggu konfirmasi dari kami</p>
                <p> Kami akan memberikan konfirmasi melalui email atau nomor telepon anda</p>
                <p> Jika ada pertanyaan silahkan hubungi kami di 022-5893178 | 0895-6304-68373</p>
                @endif                
            </div>
        </div>
    </div>
</div>
</div>
<footer>
    <div class="container">
        <div class="text-center">
            Copyright © 2021 PPDB Mahaputra
        </div>
    </div>
</footer>

<!--Start Back To Top Button-->
<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
<!--End Back To Top Button-->

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('assets/js/jquery.min.js')}}"></script>
<script src="{{ asset('assets/js/popper.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>

<!-- simplebar js -->
<script src="{{ asset('assets/plugins/simplebar/js/simplebar.js')}}"></script>
<!-- waves effect js -->
<script src="{{ asset('assets/js/waves.js')}}"></script>
<!-- sidebar-menu js -->
<script src="{{ asset('assets/js/sidebar-menu.js')}}"></script>
<!-- Custom scripts -->
<script src="{{ asset('assets/js/app-script.js')}}"></script>

<!--Form Validatin Script-->
<script src="{{ asset('assets/plugins/jquery-validation/js/jquery.validate.min.js')}}"></script>

<!--notification js -->
<script src="{{ asset('assets/plugins/notifications/js/lobibox.min.js')}}"></script>
<script src="{{ asset('assets/plugins/notifications/js/notifications.min.js')}}"></script>

<script>
    $().ready(function() {

    $("#form-validate").validate({
        rules: {            
            stu_payment_picture:{
                required:true
            },
        },  
        messages: {            
            stu_payment_picture:{
                required: "Foto bukti transfer harus di isi"
            },

        }
    });
});
</script>

<script>
    function bacaGambar(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#tampil_picture').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#preview_gambar").change(function() {
        bacaGambar(this);
    });
</script>

    <script type="text/javascript">
    function copy_text() {
        document.getElementById("text-copy").select();
        document.execCommand("copy");
        Lobibox.notify('default', {
            pauseDelayOnHover: true,
            size: 'mini',
            rounded: true,
            delayIndicator: false,
            continueDelayOnInactiveTab: false,
            position: 'top right',
            msg: 'Nomor rekening berhasil di copy'
            });
    }
</script>

</body>

</html>