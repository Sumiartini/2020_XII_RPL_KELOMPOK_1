@extends('layouts.masterFront')

@push('title')
- Siswa Tertolak
@endpush

@push('styles')
<!-- simplebar CSS-->
<link href="{{ asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet">
<!-- Bootstrap core CSS-->
<link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
<!-- animate CSS-->
<link href="{{ asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css">
<!--Bootstrap Datepicker-->
<link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css">
<!-- Icons CSS-->
<link href="{{ asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
<!-- Sidebar CSS-->
<link href="{{ asset('assets/css/sidebar-menu.css')}}" rel="stylesheet">
<!-- Custom Style-->
<link href="{{ asset('assets/css/app-style.css')}}" rel="stylesheet">
<style>
    html , body{
    max-width: 100%;
    overflow-x: hidden;
    }
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
    .atas{
       padding: 20px 5px;
    }
    .haha {
        margin-right:40px;
        margin-left:40px;
      }
    .hihi {
      margin-right:40px;
      margin-left:40px;
    }
    .profile{
        object-fit: cover;
        width: 200px;
        height: 200px;
    }
    h4, h5{
      font-size: 18px;
    }
    /*desktop version*/
    @media (min-width: 992px){

    .haha {
        margin-left: 50px;
        margin-right: -110px;
      }
    .hihi {
      margin-left:120px;
      margin-right: -180px;
    }

    }

    /* Untuk Smartphone */
    @media all and (max-width: 670px) {
      .profile{
          object-fit: cover;
          width: 145px;
          height: 140px;
      }
    }

</style>
@endpush
@section('content')

<center>
<div style="margin-top:80px; " class="col-lg-10">
    <div class="card " style="box-shadow: 10px 10px 8px skyblue;">
        <div class="card-body atas" style="background-color: #599be2;">
            <h3 style="color: white; text-shadow: 1px 1px 2px white;"> TERIMA KASIH TELAH MENDAFTAR SEBAGAI SISWA DI {{ env('APP_NAME') }}</h3>
            <h4 style="color: white; text-shadow: 1px 1px 2px white;">Mohon maaf, pendaftaran anda kami tolak.</h4> 
            <h4 style="color: white; text-shadow: white;">Dengan alasan karena <u>{{ $student->str_reason }}</u></h4>         
        </div>
    </div>
</div>
</center>

@push('scripts')
<script src="{{ asset('assets/js/jquery.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
@endpush
@endsection
      
