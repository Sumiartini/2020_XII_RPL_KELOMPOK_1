@extends('layouts.master')

@push('title')
- Detail Siswa
@endpush

@push('styles')
<!--favicon-->
<link rel="icon" href="{{ URL::to('assets/images/logo.png')}}" type="image/x-icon">
<!-- simplebar CSS-->
<link href="{{ asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
<!-- Bootstrap core CSS-->
<link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
<!-- animate CSS-->
<link href="{{ asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css" />
<!-- Icons CSS-->
<link href="{{ asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
<!-- Sidebar CSS-->
<link href="{{ asset('assets/css/sidebar-menu.css')}}" rel="stylesheet" />
<!-- Custom Style-->
<link href="{{ asset('assets/css/app-style.css')}}" rel="stylesheet"/>
@endpush

@section('content')

@if($student->stu_registration_status == 1)
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">Detail Siswa</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">SMK Mahaputra</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/students/')}}">Daftar Siswa </a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Siswa</li>
        </ol>
    </div>
</div>

@elseif($student->stu_registration_status == 0)
<div class="row pt-2 pb-2">
  <div class="col-sm-9">
    <h4 class="page-title">Daftar Calon Siswa</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">SMK Mahaputra</a></li>
      <li class="breadcrumb-item"><a href="{{ url('/students-prospective')}}">Daftar Calon Siswa</a></li>
      <li class="breadcrumb-item active" aria-current="page">Detail Calon Siswa</li>
  </ol>
</div>
</div>

@else
<div class="row pt-2 pb-2">
  <div class="col-sm-9">
    <h4 class="page-title">Daftar Siswa Ditolak</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">SMK Mahaputra</a></li>
      <li class="breadcrumb-item"><a href="{{ url('/students-rejected')}}">Daftar Siswa Ditolak</a></li>
      <li class="breadcrumb-item active" aria-current="page">Detail Siswa Ditolak</li>
  </ol>
</div>
</div>
@endif


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
</div>

<div class="row">
    <div class="col-lg-5">
      <div class="card haha">
        <div class="card-body">
            <div class="profile-card-3 ">
                <div class="text-center">
                    <img src="{{ asset('users_profile/'.$student->usr_profile_picture) }}" alt="user avatar" class="card-img-top" style="width: 200px;
                    height: 200px;
                    background: #dac52c;
                    border-radius: 100%;">
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>


<div class="col-lg-7">
  <div class="card hihi">
    <div class="card-body">
      <h5 class="card-title"> Data Ayah </h5>
      <div class="table-responsive">
        <table class="table table-active">

          <tbody>
              <tr class="table-active">
                <th>Nama Ayah kandung</th>
                <td>:</td>
                <td>{{ $student->father_data['name'] }}</td>
            </tr>
            <tr>
                <th scope="row">NIK</th>
                <td>:</td>
                <td>{{ $student->father_data['nik'] }}</td>
            </tr>

            <tr class="table-active">
                <th>Tahun lahir</th>
                <td>:</td>
                <td>{{ $student->father_data['year_of_birth'] }}</td>
            </tr>
            <tr>
                <th scope="row">Pendidikan terakhir</th>
                <td>:</td>
                <td>{{ $student->father_data['education'] }}</td>
            </tr>

            <tr class="table-active">
                <th>Pekerjaan</th>
                <td>:</td>
                <td>{{ $student->father_data['profession'] }}</td>
            </tr>
            <tr>
                <th scope="row">Pendapatan perbulan</th>
                <td>:</td>
                <td>{{ $student->father_data['monthly_income'] }}</td>
            </tr>

            <tr class="table-active">
                <th>Nomor telepon</th>
                <td>:</td>
                <td>{{ $student->father_data['phone_number'] }}</td>
            </tr>
            <tr>
                <th scope="row">Disabilitas</th>
                <td>:</td>
                <td>{{ $student->father_data['disability'] }}</td>
            </tr>                  
        </tbody>
    </table>
</div>
</div>

<div class="card-body">
  <h5 class="card-title"> Data Ibu </h5>
  <div class="table-responsive">
    <table class="table table-active">

      <tbody>
          <tr class="table-active">
            <th>Nama Ibu kandung</th>
            <td>:</td>
            <td>{{ $student->mother_data['name'] }}</td>
        </tr>
        <tr>
            <th scope="row">NIK</th>
            <td>:</td>
            <td>{{ $student->mother_data['nik'] }}</td>
        </tr>

        <tr class="table-active">
            <th>Tahun lahir</th>
            <td>:</td>
            <td>{{ $student->mother_data['year_of_birth'] }}</td>
        </tr>
        <tr>
            <th scope="row">Pendidikan terakhir</th>
            <td>:</td>
            <td>{{ $student->mother_data['education'] }}</td>
        </tr>

        <tr class="table-active">
            <th>Pekerjaan</th>
            <td>:</td>
            <td>{{ $student->mother_data['profession'] }}</td>
        </tr>
        <tr>
            <th scope="row">Pendapatan perbulan</th>
            <td>:</td>
            <td>{{ $student->mother_data['monthly_income'] }}</td>
        </tr>

        <tr class="table-active">
            <th>Nomor telepon</th>
            <td>:</td>
            <td>{{ $student->mother_data['phone_number'] }}</td>
        </tr>
        <tr>
            <th scope="row">Disabilitas</th>
            <td>:</td>
            <td>{{ $student->mother_data['disability'] }}</td>
        </tr>              
    </tbody>
</table>
</div>
</div>


<div class="card-body">
  <h5 class="card-title"> Data Wali </h5>
  <div class="table-responsive">
    <table class="table table-active">

      <tbody>
          <tr class="table-active">
            <th>Nama</th>
            <td>:</td>
            <td>{{ $student->guardian_data['name'] }}</td>
        </tr>
        <tr>
            <th scope="row">NIK</th>
            <td>:</td>
            <td>{{ $student->guardian_data['nik'] }}</td>
        </tr>

        <tr class="table-active">
            <th>Tahun lahir</th>
            <td>:</td>
            <td>{{ $student->guardian_data['year_of_birth'] }}</td>
        </tr>
        <tr>
            <th scope="row">Pendidikan terakhir</th>
            <td>:</td>
            <td>{{ $student->guardian_data['education'] }}</td>
        </tr>

        <tr class="table-active">
            <th>Pekerjaan</th>
            <td>:</td>
            <td>{{ $student->guardian_data['profession'] }}</td>
        </tr>
        <tr>
            <th scope="row">Pendapatan perbulan</th>
            <td>:</td>
            <td>{{ $student->guardian_data['monthly_income'] }}</td>
        </tr>

        <tr class="table-active">
            <th>Nomor telepon</th>
            <td>:</td>
            <td>{{ $student->guardian_data['phone_number'] }}</td>
        </tr>
        <tr>
            <th scope="row">Disabilitas</th>
            <td>:</td>
            <td>{{ $student->guardian_data['disability'] }}</td>
        </tr>              
    </tbody>
</table>
</div>
</div>

<div class="card-body">
  <h5 class="card-title"> Prestasi </h5>
  <div class="table-responsive">
    <table class="table table-active">     
      <tbody>
          <tr class="table-active">
            <th>Jenis / Tipe prestasi</th>
            <td>:</td>
            <td>{{ $student->achievement['type'] }}</td>
        </tr>
        <tr>
            <th scope="row">Tingkat</th>
            <td>:</td>
            <td>{{ $student->achievement['achievement_level'] }}</td>
        </tr>

        <tr class="table-active">
            <th>Nama prestasi</th>
            <td>:</td>
            <td>{{ $student->achievement['achievement_name'] }}</td>
        </tr>
        <tr>
            <th scope="row">Tahun</th>
            <td>:</td>
            <td>{{ $student->achievement['year'] }}</td>
        </tr>

        <tr class="table-active">
            <th>Penyelenggara</th>
            <td>:</td>
            <td>{{ $student->achievement['organizer'] }}</td>
        </tr>

    </tbody>
</table>
</div>
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