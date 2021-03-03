@extends('layouts.masterFront')

@push('title')
- Guru Tertolak
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
<style type="text/css">
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
</style>
@endpush
@section('content')

<center>
<div style="margin-top:80px; " class="col-lg-10">
    <div class="card " style="box-shadow: 10px 10px 8px skyblue;">
        <div class="card-body atas" style="background-color: #599be2;">
            <h3 style="color: white; text-shadow: 1px 1px 2px white;"> TERIMA KASIH TELAH MENDAFTAR SEBAGAI GURU DI {{ env('APP_NAME') }}</h3>
            <h4 style="color: white; text-shadow: 1px 1px 2px white;" >Mohon maaf, pendaftaran anda kami tolak.</h4>          
        </div>
    </div>
</div>
</center>
@push('scripts')
<script src="{{ asset('assets/js/jquery.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
@endpush
@endsection