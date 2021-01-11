<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>SMK Mahaputra - Formulir Siswa</title>
	<!--favicon-->
	<link rel="icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">
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
		footer {
			color: #272727;
			text-align: center;
			padding: 12px 30px;
			margin-bottom: -10px;
			margin-top: 10px;
			border-top: 1px solid rgb(223, 223, 255);
			-webkit-transition: all 0.3s ease;
			-moz-transition: all 0.3s ease;
			-o-transition: all 0.3s ease;
			transition: all 0.3s ease;
		}
	</style>
</head>

<body>
	<header class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
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

<div class="container-fluid" style="margin-top: 80px">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<h1>Halaman menunggu verifikasi</h1>
				</div>
			</div>
		</div>
	</div>
</div>

<footer>
	<div class="container">
		<div class="text-center">
			Copyright © 2018 Rocker Admin
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

<!--Bootstrap Datepicker Js-->
<script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>


</body>

</html>