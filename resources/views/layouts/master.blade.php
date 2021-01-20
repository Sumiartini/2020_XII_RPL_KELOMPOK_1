<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/rocker/color-version/pages-blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:59 GMT -->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">
  <title>SMK Mahaputra @stack('title')</title>

  @stack('styles')
</head>
<body>
  <div id="wrapper">
    @if(Auth()->user()->hasRole('admin'))
      @include ('includes.sidebar-admin')
    @elseif(Auth()->user()->hasRole('staff'))
      @include ('includes.sidebar-staff')
    @elseif(Auth()->user()->hasRole('teacher'))
      @include ('includes.sidebar-teacher')
    @else
      @include ('includes.sidebar-student')
    @endif


    @include('includes.header')


      <div class="clearfix"></div>
	
      <div class="content-wrapper">
        <div class="container-fluid">
		      @yield('content')
        </div> 
      </div>
    <!--Start Back To Top Button-->
      <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->	
	  
    <footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2021 PPDB Mahaputra
        </div>
      </div>
    </footer>

  </div>

 @stack('scripts')
</body>
 
<!-- Mirrored from codervent.com/rocker/color-version/pages-blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:59 GMT -->
</html>
