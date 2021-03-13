<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>{{ env('APP_NAME') }} - Daftar</title>
  <!--favicon-->
  <link rel="icon" href="{{asset('assets/images/logo.png')}}" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <!-- animate CSS-->
  <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css" />
  <!-- Icons CSS-->
  <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
  <!-- Custom Style-->
  <link href="{{asset('assets/css/app-style.css')}}" rel="stylesheet" />

</head>

<body>
  <!-- Start wrapper-->
  <div id="wrapper">
    <div class="card border-primary border-top-sm border-bottom-sm card-authentication1 mx-auto my-5 animated bounceInDown">
      <div class="card-body">
         <a href="/" data-toggle="tooltip" data-placement="right" title="KEMBALI KE HALAMAN UTAMA" type="button"><i class="zmdi zmdi-arrow-left fa-2x"></i></a>
        <div class="card-content p-2">
          <div class="text-center">
            <img style="height: 150px; width: 150px;" src="{{ asset('assets/images/mahaputra.jfif') }}">
          </div>
          <div class="card-title text-uppercase text-center py-3">Pilih Daftar</div>
            <center><div class="col-sm-9">
              <a href="{{ url('register-student') }}" class="btn btn-info btn-round btn-block waves-effect waves-light m-1">Siswa</a>
              </div>
              <div class="col-sm-9">
              <a href="{{ url('register-teacher') }}" class="btn btn-info btn-round btn-block waves-effect waves-light m-1">Guru</a>
              </div>
              <div class="col-sm-9">
              <a href="{{ url('register-staff') }}" class="btn btn-info btn-round btn-block waves-effect waves-light m-1">Staf</a>
              </div></center>
        </div>
      </div>
    </div>

    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
  </div>
  <!--wrapper-->

<!-- Bootstrap core JavaScript-->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- sidebar-menu js -->
<script src="{{ asset('assets/js/sidebar-menu.js')}}"></script>
<!-- Custom scripts -->
<script src="{{ asset('assets/js/app-script.js')}}"></script>
<!--Form Validatin Script-->
</body>
</html>