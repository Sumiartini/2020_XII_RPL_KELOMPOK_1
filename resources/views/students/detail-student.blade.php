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

<!-- <div class="col-lg-12">
    <div class="profile-card-3 ">
        <div class="text-center">
            <img src="{{ asset($student->usr_profile_picture) }}" alt="user avatar" class="card-img-top" style="width: 200px;
            height: 200px;
            background: #dac52c;
            border-radius: 100%;">
        </div>
        <hr>
    </div>
</div>
 -->
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
        <div class="col-lg-4">
           <div class="profile-card-3">
            <div class="card">
             <div class="user-fullimage text-center">
               <img src="{{ asset($student->usr_profile_picture)}}" alt="user avatar" class="card-img-top" style="margin-top: 40px; width: 200px; height: 200px;">
<!--                 <div class="details">
                  <h5 class="mb-1 text-blue ml-3">{{ $student->stu_candidate_name }}</h5>
                  <h6 class="text-blue ml-3">{{ $student->usr_email }}</h6>
                 </div> -->
              </div>
            <div class="card-body">
                <div class="row" style="margin-top: 30px;">
                    <div class="col-lg-4">
                        <a href="">
                        <i class="fa fa-file-text-o fa-3x" aria-hidden="true" style="margin-left: 20px;"></i>
                        </a>
                    </div>
                    <div class="col-lg-8" style="text-align: left; font-weight: bold; margin-left: -30px; margin-top: 5px;">
                        <p>Surat Tanda Kelulusan SMP dilegalisir</p> 
                    </div>     
                </div>
            </div>  
            <div class="card-body">
                <div class="row" style="margin-top: -30px;">
                    <div class="col-lg-4">
                        <a href="">
                        <i class="fa fa-file-text-o fa-3x" aria-hidden="true" style="margin-left: 20px;"></i>
                        </a>
                    </div>
                    <div class="col-lg-8" style="text-align: left; font-weight: bold; margin-left: -30px; margin-top: 5px;">
                        <p>Ijazah SMP/MTs dilegalisir</p> 
                    </div>     
                </div>
            </div>
            <div class="card-body">
                <div class="row" style="margin-top: -30px;">
                    <div class="col-lg-4">
                        <a href="">
                        <i class="fa fa-file-text-o fa-3x" aria-hidden="true" style="margin-left: 20px;"></i>
                        </a>
                    </div>
                    <div class="col-lg-8" style="text-align: left; font-weight: bold; margin-left: -30px; margin-top: 15px;">
                        <p>Ijazah SD/Mi dilegalisir</p> 
                    </div>     
                </div>
            </div>
            <div class="card-body">
                <div class="row" style="margin-top: -15px;">
                    <div class="col-lg-4">
                        <a href="">
                        <i class="fa fa-file-text-o fa-3x" aria-hidden="true" style="margin-left: 20px;"></i>
                        </a>
                    </div>
                    <div class="col-lg-8" style="text-align: left; font-weight: bold; margin-left: -30px; margin-top: 15px;">
                        <p>Akte Kelahiran</p> 
                    </div>     
                </div>
            </div>
            <div class="card-body">
                <div class="row" style="margin-top: -15px;">
                    <div class="col-lg-4">
                        <a href="">
                        <i class="fa fa-file-text-o fa-3x" aria-hidden="true" style="margin-left: 20px;"></i>
                        </a>
                    </div>
                    <div class="col-lg-8" style="text-align: left; font-weight: bold; margin-left: -30px; margin-top: 15px;">
                        <p>Kartu Keluarga</p> 
                    </div>     
                </div>
            </div>
            <div class="card-body">
                <div class="row" style="margin-top: -15px;">
                    <div class="col-lg-4">
                        <a href="">
                        <i class="fa fa-file-text-o fa-3x" aria-hidden="true" style="margin-left: 20px;"></i>
                        </a>
                    </div>
                    <div class="col-lg-8" style="text-align: left; font-weight: bold; margin-left: -30px; margin-top: 15px;">
                        <p>Keterangan Domisili</p> 
                    </div>     
                </div>
            </div>
            <div class="card-body">
                <div class="row" style="margin-top: -15px;">
                    <div class="col-lg-4">
                        <a href="">
                        <i class="fa fa-file-text-o fa-3x" aria-hidden="true" style="margin-left: 20px;"></i>
                        </a>
                    </div>
                    <div class="col-lg-8" style="text-align: left; font-weight: bold; margin-left: -30px; margin-top: 15px;">
                        <p>KTP Ayah</p> 
                    </div>     
                </div>
            </div>
            <div class="card-body">
                <div class="row" style="margin-top: -15px;">
                    <div class="col-lg-4">
                        <a href="">
                        <i class="fa fa-file-text-o fa-3x" aria-hidden="true" style="margin-left: 20px;"></i>
                        </a>
                    </div>
                    <div class="col-lg-8" style="text-align: left; font-weight: bold; margin-left: -30px; margin-top: 15px;">
                        <p>KTP Ibu</p> 
                    </div>     
                </div>
            </div>
            <div class="card-body">
                <div class="row" style="margin-top: -15px;">
                    <div class="col-lg-4">
                        <a href="">
                        <i class="fa fa-file-text-o fa-3x" aria-hidden="true" style="margin-left: 20px;"></i>
                        </a>
                    </div>
                    <div class="col-lg-8" style="text-align: left; font-weight: bold; margin-left: -30px; margin-top: 15px;">
                        <p>Surat Kesehatan Badan</p> 
                    </div>     
                </div>
            </div>
            <div class="card-body">
                <div class="row" style="margin-top: -15px;">
                    <div class="col-lg-4">
                        <a href="">
                        <i class="fa fa-file-text-o fa-3x" aria-hidden="true" style="margin-left: 20px;"></i>
                        </a>
                    </div>
                    <div class="col-lg-8" style="text-align: left; font-weight: bold; margin-left: -30px; margin-top: 15px;">
                        <p>Surat Kesehatan Mata</p> 
                    </div>     
                </div>
            </div>
            <div class="card-body">
                <div class="row" style="margin-top: -15px;">
                    <div class="col-lg-4">
                        <a href="">
                        <i class="fa fa-file-text-o fa-3x" aria-hidden="true" style="margin-left: 20px;"></i>
                        </a>
                    </div>
                    <div class="col-lg-8" style="text-align: left; font-weight: bold; margin-left: -30px; margin-top: -7px;">
                        <p>Kartu PIP/KIP/Keterangan Kematian</p> 
                    </div>     
                </div>
            </div>
            <div class="card-body">
                <div class="row" style="margin-top: -30px;">
                    <div class="col-lg-4">
                        <a href="">
                        <i class="fa fa-file-text-o fa-3x" aria-hidden="true" style="margin-left: 20px;"></i>
                        </a>
                    </div>
                    <div class="col-lg-8" style="text-align: left; font-weight: bold; margin-left: -30px; margin-top: 5px;">
                        <p>Sertifikat/Piagam Penghargaan</p> 
                    </div>     
                </div>
            </div>

           
             </div>
            </div>
        </div>
        <div class="col-lg-8">
           <div class="card">
            <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#siswa" data-toggle="pill" class="nav-link active show"><i class="icon-user"></i> <span class="hidden-xs">Siswa</span></a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#persuratan" data-toggle="pill" class="nav-link"><i class="icon-envelope-open"></i> <span class="hidden-xs">Persuratan</span></a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#orangTua" data-toggle="pill" class="nav-link"><i class="icon-people"></i> <span class="hidden-xs">Orang Tua</span></a>
                </li>
                @if(isset($student->achievement))
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#prestasi" data-toggle="pill" class="nav-link"><i class="icon-trophy"></i> <span class="hidden-xs">Prestasi</span></a>
                </li>
                @endif
            </ul>
            <div class="tab-content p-3">
                <div class="tab-pane active show" id="siswa">
                   
                    <div class="row">

                        <dt class="col-sm-5">Nama Siswa</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->stu_candidate_name }}</p>
                        </dd>

                        @if(isset($student->stu_nisn))
                        <dt class="col-sm-5">NISN</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->stu_nisn }}</p>
                        </dd>
                        @endif

                        <dt class="col-sm-5">Jurusan yang di minati</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->mjr_name }}</p>
                        </dd>

                        <dt class="col-sm-5">Email</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->usr_email }}</p>
                        </dd>

                        <dt class="col-sm-5">Agama</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->usr_religion }}</p>
                        </dd>
                        

                        <dt class="col-sm-5">Jenis Kelamin</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->usr_gender }}</p>
                        </dd>

                        @if(isset($student->personal['nik']))
                        <dt class="col-sm-5">Nomor induk kependudukan</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->personal['nik'] }}</p>
                        </dd>
                        @endif
                        <dt class="col-sm-5">Nomor Telepon</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->usr_phone_number }}</p>
                        </dd>

                        <dt class="col-sm-5">No Whatsapp</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->usr_whatsapp_number }}</p>
                        </dd>

                        <dt class="col-sm-5">Tempat Lahir</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->usr_place_of_birth }}</p>
                        </dd>

                        <dt class="col-sm-5">Tanggal Lahir</dt>
                        <dd class="col-sm-7">
                            <p>{{ date('d M Y', strtotime($student->usr_date_of_birth )) }}</p>
                        </dd>

                        @if(isset($student->personal['status_of_residence']))
                        <dt class="col-sm-5">Tinggal Bersama</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->personal['living_together'] }}</p>
                        </dd>
                        @endif

                        @if(isset($student->personal['status_of_residence']))
                        <dt class="col-sm-5">Status Tempat Tinggal</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->personal['status_of_residence'] }}</p>
                        </dd>
                        @endif

                        <dt class="col-sm-5">Asal Sekolah</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->stu_school_origin }}</p>
                        </dd>

                        @if(isset($student->personal['status_of_residence']))
                        <dt class="col-sm-5">NPSN Asal Sekolah</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->personal['status_of_residence'] }}</p>
                        </dd>
                        @endif

                        @if(isset($student->personal['birth_certificate_registration_no']))
                        <dt class="col-sm-5">No Akta Lahir</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->personal['birth_certificate_registration_no'] }}</p>
                        </dd>
                        @endif
                    </div>
                </div>
                <div class="tab-pane" id="persuratan">
                    <div class="row">

                        @foreach($user as $data)
                        <dt class="col-sm-5">Provinsi</dt>
                        <dd class="col-sm-7">
                            <p>{{ $data->prv_name }}</p>
                        </dd>

                        <dt class="col-sm-5">Kota / Kabupaten</dt>
                        <dd class="col-sm-7">
                            <p>{{ $data->cit_name }}</p>
                        </dd>

                        <dt class="col-sm-5">Kecamatan</dt>
                        <dd class="col-sm-7">
                            <p>{{ $data->dst_name }}</p>
                        </dd>
                        @endforeach

                        <dt class="col-sm-5">Alamat</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->usr_address }}</p>
                        </dd>

                        <dt class="col-sm-5">RT</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->usr_rt }}</p>
                        </dd>

                        <dt class="col-sm-5">RW</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->usr_rw }}</p>
                        </dd>

                        <dt class="col-sm-5">Desa / Kelurahan </dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->usr_rural_name }}</p>
                        </dd>

                        <dt class="col-sm-5">Kode Pos</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->usr_postal_code }}</p>
                        </dd>

                        @if(isset($student->contact['landline_number']))
                        <dt class="col-sm-5">No Telepon Rumah</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->contact['landline_number'] }}</p>
                        </dd>
                        @endif

                        @if(isset($student->contact['email']))
                        <dt class="col-sm-5">Email Rumah</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->contact['email'] }}</p>
                        </dd>
                        @endif

                    </div>
                </div>
                <div class="tab-pane" id="orangTua">
                     @if(isset($student->father_data))<h4>Data Ayah</h4><hr>@endif
                    <div class="row">
                        @if(isset($student->father_data['name']))
                        <dt class="col-sm-5">Nama Ayah</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->father_data['name'] }}</p>
                        </dd>
                        @endif

                        @if(isset($student->father_data['father_name']))
                        <dt class="col-sm-5">Nama Ayah Sesuai Ijazah</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->father_data['father_name'] }}</p>
                        </dd>
                        @endif

                        @if(isset($student->father_data['nik']))
                        <dt class="col-sm-5">NIK</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->father_data['nik'] }}</p>
                        </dd>
                        @endif

                        @if(isset($student->father_data['year_of_birth']))
                        <dt class="col-sm-5">Tahun Lahir</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->father_data['year_of_birth'] }}</p>
                        </dd>
                        @endif
                        
                        @if(isset($student->father_data['education']))
                        <dt class="col-sm-5">Pendidikan</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->father_data['education'] }}</p>
                        </dd>
                        @endif
                        
                        @if(isset($student->father_data['profession']))
                        <dt class="col-sm-5">Pekerjaan</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->father_data['profession'] }}</p>
                        </dd>
                        @endif

                        @if(isset($student->father_data['monthly_income']))
                        <dt class="col-sm-5">Pendapatan perbulan</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->father_data['monthly_income'] }}</p>
                        </dd>
                        @endif

                        @if(isset($student->father_data['phone_number']))
                        <dt class="col-sm-5">Nomor Telepon</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->father_data['phone_number'] }}</p>
                        </dd>
                        @endif
                        
                        @if(isset($student->father_data['disability']))
                        <dt class="col-sm-5">Disabilitas</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->father_data['disability'] }}</p>
                        </dd>
                        @endif
                    </div> 
                    @if(isset($student->mother_data))<hr><h4>Data Ibu</h4><hr>@endif
                    <div class="row">
                        @if(isset($student->mother_data['name']))
                        <dt class="col-sm-5">Nama Ibu</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->mother_data['name'] }}</p>
                        </dd>
                        @endif

                        @if(isset($student->mother_data['nik']))
                        <dt class="col-sm-5">NIK</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->mother_data['nik'] }}</p>
                        </dd>
                        @endif

                        @if(isset($student->mother_data['year_of_birth']))
                        <dt class="col-sm-5">Tahun Lahir</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->mother_data['year_of_birth'] }}</p>
                        </dd>
                        @endif
                        
                        @if(isset($student->mother_data['education']))
                        <dt class="col-sm-5">Pendidikan</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->mother_data['education'] }}</p>
                        </dd>
                        @endif
                        
                        @if(isset($student->mother_data['profession']))
                        <dt class="col-sm-5">Pekerjaan</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->mother_data['profession'] }}</p>
                        </dd>
                        @endif

                        @if(isset($student->mother_data['monthly_income']))
                        <dt class="col-sm-5">Pendapatan perbulan</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->mother_data['monthly_income'] }}</p>
                        </dd>
                        @endif

                        @if(isset($student->mother_data['phone_number']))
                        <dt class="col-sm-5">Nomor Telepon</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->mother_data['phone_number'] }}</p>
                        </dd>
                        @endif
                        
                        @if(isset($student->mother_data['disability']))
                        <dt class="col-sm-5">Disabilitas</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->mother_data['disability'] }}</p>
                        </dd>
                        @endif
                    </div>

                    @if(isset($student->guardian_data))<hr><h4>Data Wali</h4><hr>@endif
                    <div class="row">
                        @if(isset($student->guardian_data['name']))
                        <dt class="col-sm-5">Nama Wali</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->guardian_data['name'] }}</p>
                        </dd>
                        @endif

                        @if(isset($student->guardian_data['nik']))
                        <dt class="col-sm-5">NIK</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->guardian_data['nik'] }}</p>
                        </dd>
                        @endif

                        @if(isset($student->guardian_data['year_of_birth']))
                        <dt class="col-sm-5">Tahun Lahir</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->guardian_data['year_of_birth'] }}</p>
                        </dd>
                        @endif
                        
                        @if(isset($student->guardian_data['education']))
                        <dt class="col-sm-5">Pendidikan</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->guardian_data['education'] }}</p>
                        </dd>
                        @endif
                        
                        @if(isset($student->guardian_data['profession']))
                        <dt class="col-sm-5">Pekerjaan</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->guardian_data['profession'] }}</p>
                        </dd>
                        @endif

                        @if(isset($student->guardian_data['monthly_income']))
                        <dt class="col-sm-5">Pendapatan perbulan</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->guardian_data['monthly_income'] }}</p>
                        </dd>
                        @endif

                        @if(isset($student->guardian_data['phone_number']))
                        <dt class="col-sm-5">Nomor Telepon</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->guardian_data['phone_number'] }}</p>
                        </dd>
                        @endif
                        
                        @if(isset($student->guardian_data['disability']))
                        <dt class="col-sm-5">Disabilitas</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->guardian_data['disability'] }}</p>
                        </dd>
                        @endif
                    </div>    
                </div>

                <div class="tab-pane" id="prestasi">
                    <div class="row">
                        @if(isset($student->achievement['type']))
                        <dt class="col-sm-5">Jenis / Tipe Prestasi</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->achievement['type'] }}</p>
                        </dd>
                        @endif
                        @if(isset($student->achievement['achievement_level']))
                        <dt class="col-sm-5">Tingkat</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->achievement['achievement_level'] }}</p>
                        </dd>
                        @endif
                        @if(isset($student->achievement['achievement_name']))
                        <dt class="col-sm-5">Nama Prestasi</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->achievement['achievement_name'] }}</p>
                        </dd>
                        @endif
                        @if(isset($student->achievement['year']))
                        <dt class="col-sm-5">Tahun</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->achievement['year'] }}</p>
                        </dd>
                        @endif
                        @if(isset($student->achievement['organizer']))
                        <dt class="col-sm-5">Penyelenggara</dt>
                        <dd class="col-sm-7">
                            <p>{{ $student->achievement['organizer'] }}</p>
                        </dd>
                        @endif
                        
                    </div>
                </div>
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