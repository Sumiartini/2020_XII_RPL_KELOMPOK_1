	@extends('layouts.master')

	@push('title')
	- Edit Profil
	@endpush

	@push('styles')
	<!-- simplebar CSS-->
	<link href="{{ asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
	<!-- Bootstrap core CSS-->
	<link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
	<!-- animate CSS-->
	<link href="{{ asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css"/>
	<!-- Icons CSS-->
	<!--Bootstrap Datepicker-->
	<link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
	<!-- Sidebar CSS-->
	<link href="{{ asset('assets/css/sidebar-menu.css')}}" rel="stylesheet"/>
	<!-- Custom Style-->
	<link href="{{ asset('assets/css/app-style.css')}}" rel="stylesheet"/>

	@endpush

	@section('content')
	<div class="row pt-2 pb-2">
		<div class="col-sm-9">
			<h4 class="page-title">Profil</h4>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ url('dashboard') }}">SMK Mahaputra</a></li>
				<li class="breadcrumb-item active" aria-current="page">Profil</li>
			</ol>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="profile-card-3 ">
				<div class="text-center">
					<img src="{{ asset($user->usr_profile_picture)}}" class="img-thumbnail" id="tampil_picture" style="object-fit: cover; height: 200px; width: 200px"/>
				</div>
				<hr>
			</div>
		</div>

		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">

					<h4 class="text-primary">Profil</h4>
					<div class="table-responsive">
						<table class="table table-stripped">
							<tbody>
								<tr>
									<th>Nama</th>
									<td>:</td>
									<td>{{$user->usr_name}}</td>

									<th>Email</th>
									<td>:</td>
									<td>{{$user->usr_email}}</td>
								</tr>								

								<tr>
									<th>Jenis Kelamin</th>
									<td>:</td>
									<td>{{$user->usr_gender}}</td>

									<th>Agama</th>
									<td>:</td>
									<td>{{$user->usr_religion}}</td>
								</tr>

								<tr>
									<th>Tempat lahir</th>
									<td>:</td>
									<td>{{$user->usr_place_of_birth}}</td>

									<th>Tanggal lahir</th>
									<td>:</td>
									<td>{{$user->usr_date_of_birth}}</td>
								</tr>

								<tr>
									<th>Alamat</th>
									<td>:</td>
									<td>{{$user->usr_address}}</td>
									
									<th>Desa</th>
									<td>:</td>
									<td>{{$user->usr_rural_name}}</td>
								</tr>

								<tr>
									<th>RT</th>
									<td>:</td>
									<td>{{$user->usr_rt}}</td>

									<th>RW</th>
									<td>:</td>
									<td>{{$user->usr_rw}}</td>
								</tr>
								
								<tr>
									<th></th>
									<td></td>
									<td></td>

									<th></th>
									<td></td>
									<td></td>
								</tr>
							</tbody>
						</table>
					</div>			
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

	</body>

	@endpush