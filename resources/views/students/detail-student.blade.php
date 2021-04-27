@extends('layouts.master')

@push('title')
- Detail Siswa
@endpush

@push('styles')
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
            <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">{{ env('APP_NAME') }}</a></li>
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
      <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">{{ env('APP_NAME') }}</a></li>
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
      <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">{{ env('APP_NAME') }}</a></li>
      <li class="breadcrumb-item"><a href="{{ url('/students-rejected')}}">Daftar Siswa Ditolak</a></li>
      <li class="breadcrumb-item active" aria-current="page">Detail Siswa Ditolak</li>
  </ol>
</div>
</div>
@endif

@if ($message = Session::get('success'))
<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <div class="alert-icon contrast-alert">
                <i class="icon-check"></i>
            </div>
            <div class="alert-message">
                <span><strong>Berhasil!</strong> {{$message}}.</span>
            </div>
        </div>
    </div>
</div>
@endif

<div class="row">
    <div class="col-lg-6">
       <div class="profile-card-3">
        <div class="card">
         <div class="user-fullimage text-center">
            @if(isset($student->usr_profile_picture))
            <img src="{{ asset($student->usr_profile_picture)}}" alt="user avatar"  class="card-img-top" style="margin-top: 40px; width: 200px; height: 200px;">
            @else
            <img src="{{ asset('images/default_profile_picture_20210228.png')}}" alt="user avatar"  class="card-img-top" style="margin-top: 40px; width: 200px; height: 200px;">
            @endif
        </div>
        <div class="row" style="margin-top: 40px; margin-left: 10px;">

            <dt class="col-sm-5">Nama Siswa </dt>
            <dd class="col-sm-7">
                <p>{{ $student->stu_candidate_name }}</p>
            </dd>

            <dt class="col-sm-5">Email </dt>
            <dd class="col-sm-7">
                <p>{{ $student->usr_email }}</p>
            </dd>

            <dt class="col-sm-5">NISN</dt>
            <dd class="col-sm-7">
                <p>{{ $student->stu_nisn }}</p>
            </dd>

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
            <dt class="col-sm-5">NIK</dt>
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
                <p>{{ getDateOfBirth($student->usr_date_of_birth) }}</p>
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
            @if(isset($student->other['recomended_from']))
            <dt class="col-sm-5">Rekomendasi dari</dt>
            <dd class="col-sm-7">
                <p>{{ $student->other['recomended_from'] }}</p>
            </dd>
            @endif

            <dt class="col-sm-5">Tahun Ajaran</dt>
            <dd class="col-sm-7">
                <p>{{ $student->scy_name }}</p>
            </dd>

            @if(isset($student->str_reason))
            @if($student->str_status == 0)

            @elseif($student->str_status == 1)
            <dt class="col-sm-5">Alasan diterima</dt>
            <dd class="col-sm-7">
                <p>{{ $student->str_reason }}</p>
            </dd>
            @elseif($student->str_status == 2)
            <dt class="col-sm-5">Alasan ditolak</dt>
            <dd class="col-sm-7">
                <p>{{ $student->str_reason }}</p>
            </dd>
            @elseif($student->str_status == 3)

            @elseif($student->str_status == 4)

            @endif
            @endif
        </div>
        <div>
          <a href="{{url('students')}}" class="btn btn-primary" style="margin-bottom: 20px; margin-left: 25px;"><i class="fa fa-arrow-left"></i> Kembali</a>
      </div>
  </div>
</div>
</div>
<div class="col-lg-6">
   <div class="card">
    <div class="card-body">
        <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">

            <li class="nav-item">
                <a href="javascript:void();" data-target="#domisili" data-toggle="pill" class="nav-link"><i class="zmdi zmdi-pin-drop"></i> <span class="hidden-xs">Domisili</span></a>
            </li>
            <li class="nav-item">
                <a href="javascript:void();" data-target="#orangTua" data-toggle="pill" class="nav-link"><i class="icon-people"></i> <span class="hidden-xs">Orang Tua</span></a>
            </li>
            @if(isset($student->achievement))
            <li class="nav-item">
                <a href="javascript:void();" data-target="#prestasi" data-toggle="pill" class="nav-link"><i class="icon-trophy"></i> <span class="hidden-xs">Prestasi</span></a>
            </li>
            @endif
            <li class="nav-item">
                <a href="javascript:void();" data-target="#dokumen" data-toggle="pill" class="nav-link"><i class="fa fa-file-text-o fa-3x"></i> <span class="hidden-xs">Dokumen</span></a>
            </li>
            <li class="nav-item">
                <a href="javascript:void();" data-target="#kelas" data-toggle="pill" class="nav-link"><i class="fa fa-file-text-o fa-3x"></i> <span class="hidden-xs">Kelas</span></a>
            </li>
        </ul>
        <div class="tab-content p-3">

            <div class="tab-pane" id="domisili" selected>
                <div class="row" style="margin-top: 20px">

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
             @if(isset($student->father_data))<h5>Data Ayah</h5><hr>@endif
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
            @if(isset($student->mother_data))<hr><h5>Data Ibu</h5><hr>@endif
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

        <div class="tab-pane" id="dokumen">
            @if(isset($student->other['certificate_of_graduation']))
                <div class="row">
                    <div class="col-lg-12">
                        <label class="col-form-label" for="exampleInputFile">Surat Tanda Kelulusan SMP dilegalisir</label>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-lg-12">
                        <a href="{{ url('download-file-student/'. $student->other['certificate_of_graduation']) }}">                        
                        <i class="fa fa-file-text-o fa-2x" aria-hidden="true" ></i>
                        {{$student->other['certificate_of_graduation']}}
                        </a>
                    </div>     
                </div>
                @endif
                
                @if(isset($student->other['junior_high_school_diploma']))
                <div class="row">
                    <div class="col-lg-12">
                        <label class="col-form-label" for="exampleInputFile">Ijazah SMP/MTs dilegalisir</label>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-lg-12">
                        <a href="{{ url('download-file-student/'. $student->other['junior_high_school_diploma']) }}">                        
                        <i class="fa fa-file-text-o fa-2x" aria-hidden="true" ></i>
                        {{$student->other['junior_high_school_diploma']}}
                        </a>
                    </div>     
                </div>
                @endif 

                @if(isset($student->other['elementary_school_diploma']))
                <div class="row">
                    <div class="col-lg-12">
                        <label class="col-form-label" for="exampleInputFile">Ijazah SD/Mi dilegalisir</label>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-lg-12">
                        <a href="{{ url('download-file-student/'. $student->other['elementary_school_diploma']) }}">                        
                        <i class="fa fa-file-text-o fa-2x" aria-hidden="true" ></i>
                        {{$student->other['elementary_school_diploma']}}
                        </a>
                    </div>     
                </div>
                @endif 

                <div class="row">
                    <div class="col-lg-12">
                        <label class="col-form-label" for="exampleInputFile">Akte Kelahiran</label>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-lg-12">
                        <a href="{{ url('download-file-student/'. $student->other['birth_certificate']) }}">                        
                        <i class="fa fa-file-text-o fa-2x" aria-hidden="true" ></i>
                        @if(isset($student->other['birht_certificate']))
                        {{$student->other['birht_certificate']}}
                        @endif
                        </a>
                    </div>     
                </div>
                 

                @if(isset($student->other['family_card']))
                <div class="row">
                    <div class="col-lg-12">
                        <label class="col-form-label" for="exampleInputFile">Kartu Keluarga</label>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-lg-12">
                        <a href="{{ url('download-file-student/'. $student->other['family_card']) }}">                        
                        <i class="fa fa-file-text-o fa-2x" aria-hidden="true" ></i>
                        {{$student->other['family_card']}}
                        </a>
                    </div>     
                </div>
                @endif 

                @if(isset($student->other['domicile_statement']))
                <div class="row">
                    <div class="col-lg-12">
                        <label class="col-form-label" for="exampleInputFile">Keterangan Domisili</label>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-lg-12">
                        <a href="{{ url('download-file-student/'. $student->other['domicile_statement']) }}">                        
                        <i class="fa fa-file-text-o fa-2x" aria-hidden="true" ></i>
                        {{$student->other['domicile_statement']}}
                        </a>
                    </div>     
                </div>
                @endif 

                @if(isset($student->other['id_card_father']))
                <div class="row">
                    <div class="col-lg-12">
                        <label class="col-form-label" for="exampleInputFile">KTP Ayah</label>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-lg-12">
                        <a href="{{ url('download-file-student/'. $student->other['id_card_father']) }}">                        
                        <i class="fa fa-file-text-o fa-2x" aria-hidden="true" ></i>
                        {{$student->other['id_card_father']}}
                        </a>
                    </div>     
                </div>
                @endif 

                @if(isset($student->other['id_card_mother']))
                <div class="row">
                    <div class="col-lg-12">
                        <label class="col-form-label" for="exampleInputFile">KTP Ibu</label>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-lg-12">
                        <a href="{{ url('download-file-student/'. $student->other['id_card_mother']) }}">                        
                        <i class="fa fa-file-text-o fa-2x" aria-hidden="true" ></i>
                        {{$student->other['id_card_mother']}}
                        </a>
                    </div>     
                </div>
                @endif 

                @if(isset($student->other['health_certificate']))
                <div class="row">
                    <div class="col-lg-12">
                        <label class="col-form-label" for="exampleInputFile">Surat Kesehatan Badan</label>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-lg-12">
                        <a href="{{ url('download-file-student/'. $student->other['health_certificate']) }}">                        
                        <i class="fa fa-file-text-o fa-2x" aria-hidden="true" ></i>
                        {{$student->other['health_certificate']}}
                        </a>
                    </div>     
                </div>
                @endif 

                @if(isset($student->other['eye_health_letter']))
                <div class="row">
                    <div class="col-lg-12">
                        <label class="col-form-label" for="exampleInputFile">Surat Kesehatan Mata</label>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-lg-12">
                        <a href="{{ url('download-file-student/'. $student->other['eye_health_letter']) }}">                        
                        <i class="fa fa-file-text-o fa-2x" aria-hidden="true" ></i>
                        {{$student->other['eye_health_letter']}}
                        </a>
                    </div>     
                </div>
                @endif 

                @if(isset($student->other['card']))
                <div class="row">
                    <div class="col-lg-12">
                        <label class="col-form-label" for="exampleInputFile">Kartu PIP/KIP/Keterangan Kematian</label>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-lg-12">
                        <a href="{{ url('download-file-student/'. $student->other['card']) }}">                        
                        <i class="fa fa-file-text-o fa-2x" aria-hidden="true" ></i>
                        {{$student->other['card']}}
                        </a>
                    </div>     
                </div>
                @endif 

                @if(isset($student->other['certificate']))
                <div class="row">
                    <div class="col-lg-12">
                        <label class="col-form-label" for="exampleInputFile">Upload Sertifikat/Piagam Penghargaan</label>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-lg-12">
                        <a href="{{ url('download-file-student/'. $student->other['certificate']) }}">                        
                        <i class="fa fa-file-text-o fa-2x" aria-hidden="true" ></i>
                        {{$student->other['certificate']}}
                        </a>
                    </div>     
                </div>
                @endif 
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

        <div class="tab-pane" id="kelas">
            <a href="{{ url('class/'. $student->stu_id .'/add-class-student') }}" data-toggle="tooltip" data-placement="top" title="TAMBAH KELAS" type="button" class="btn btn-outline-primary waves-effect waves-light m-1"> <i class="zmdi zmdi-plus fa-lg"></i> </a><hr>
            @if(isset($student_check->stc_id))
            <table class="table table-striped">
                <tr>
                    <th> Kelas </th>
                    <th> Aksi </th>
                </tr>
                @foreach($student_class as $student_class)
                <tr>
                    <th> {{$student_class->grl_name. ' ' .$student_class->mjr_name. ' ' .$student_class->cls_number}} </th>
                    <td> <a href="{{ url('class/'. $student_class->stc_id. '/move-student-class') }}" data-toggle="tooltip" data-placement="top" title="PINDAH KELAS" type="button" class="btn btn-outline-success waves-effect waves-light m-1"> <i class="zmdi zmdi-walk fa-lg"></i></a></td>
                </tr>
                @endforeach
            </table>
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