@extends('layouts.master')

@push('title')
- Detail Staf
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
<link href="{{ asset('assets/css/app-style.css')}}" rel="stylesheet" />
@endpush

@section('content')
@if($staff->stf_registration_status == 1)
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">Detail Guru</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">SMK Mahaputra</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/students/')}}">Daftar Staf </a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Staf</li>
        </ol>
    </div>
</div>

@elseif($staff->stf_registration_status == 0)
<div class="row pt-2 pb-2">
  <div class="col-sm-9">
    <h4 class="page-title">Daftar Calon Guru</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">SMK Mahaputra</a></li>
      <li class="breadcrumb-item"><a href="{{ url('/students-prospective')}}">Daftar Calon Staf</a></li>
      <li class="breadcrumb-item active" aria-current="page">Detail Calon Staf</li>
  </ol>
</div>
</div>

@else
<div class="row pt-2 pb-2">
  <div class="col-sm-9">
    <h4 class="page-title">Daftar Staf Ditolak</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">SMK Mahaputra</a></li>
      <li class="breadcrumb-item"><a href="{{ url('/students-rejected')}}">Daftar Staf Ditolak</a></li>
      <li class="breadcrumb-item active" aria-current="page">Detail Staf Ditolak</li>
  </ol>
</div>
</div>
@endif

<!-- <div class="col-lg-12">
    <div class="profile-card-3 ">
        <div class="text-center">
            <img src="{{ url('assets/images/avatars/avatar-2.png')}}" alt="user avatar" class="card-img-top" style="width: 200px;
            height: 200px;
            background: #dac52c;
            border-radius: 100%;">
        </div>
        <hr>
    </div>
</div> -->

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
           <div class="profile-card-3">
            <div class="card">
             <div class="user-fullimage text-center">
               <img src="{{ asset($staff->usr_profile_picture)}}" alt="user avatar" class="card-img-top" style="margin-top: 40px; width: 200px; height: 200px;">
<!--                 <div class="details">
                  <h5 class="mb-1 text-blue ml-3">{{ $staff->stu_candidate_name }}</h5>
                  <h6 class="text-blue ml-3">{{ $staff->usr_email }}</h6>
                 </div> -->
              </div>
                <div class="row" style="margin-top: 40px; margin-left: 10px;">

                        <dt class="col-sm-5">Nama Guru</dt>
                        <dd class="col-sm-7">
                            <p>{{ $staff->usr_name }}</p>
                        </dd>
                        @if(isset($staff->personal['nik']))
                        <dt class="col-sm-5">NIK</dt>
                        <dd class="col-sm-7">
                            <p>{{ $staff->personal['nik'] }}</p>
                        </dd>
                        @endif
                        @if(isset($staff->stf_nuptk))
                        <dt class="col-sm-5">NUPTK</dt>
                        <dd class="col-sm-7">
                            <p>{{ $staff->stf_nuptk }}</p>
                        </dd>
                        @endif
                        <dt class="col-sm-5">Tempat Lahir</dt>
                        <dd class="col-sm-7">
                            <p>{{ $staff->usr_place_of_birth }}</p>
                        </dd>
                        <dt class="col-sm-5">Tanggal Lahir</dt>
                        <dd class="col-sm-7">
                            <p>{{ $staff->usr_date_of_birth}}</p>
                        </dd>
                        <dt class="col-sm-5">Agama</dt>
                        <dd class="col-sm-7">
                            <p>{{ $staff->usr_religion }}</p>
                        </dd>
                        <dt class="col-sm-5">Jenis Kelamin</dt>
                        <dd class="col-sm-7">
                            <p>{{ $staff->usr_gender}}</p>
                        </dd>
                        <dt class="col-sm-5">No. WhatsApp </dt>
                        <dd class="col-sm-7">
                            <p>{{ $staff->usr_whatsapp_number }}</p>
                        </dd>
                    </div>
            </div>
            </div>
        </div>
            <div class="col-lg-7">
           <div class="card">
            <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#domisili" data-toggle="pill" class="nav-link"><i class="zmdi zmdi-pin-drop"></i> <span class="hidden-xs">Domisili</span></a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#pendidikan" data-toggle="pill" class="nav-link"><i class="icon-book-open"></i> <span class="hidden-xs">Riwayat Pendidikan</span></a>
                </li>    
                @if(isset($staff->history_job))
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#bekerja" data-toggle="pill" class="nav-link"><i class="ti-id-badge"></i> <span class="hidden-xs">Riwayat Bekerja</span></a>
                </li>
                @endif
                @if(isset($staff->expertise))
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#keahlian" data-toggle="pill" class="nav-link"><i class="ti-id-badge"></i> <span class="hidden-xs">Keahlian</span></a>
                </li>
                @endif
                 <li class="nav-item">
                    <a href="javascript:void();" data-target="#dokumen" data-toggle="pill" class="nav-link"><i class="fa fa-file-text-o fa-3x"></i> <span class="hidden-xs">Dokumen</span></a>
                </li>

            </ul> 
            <div class="tab-content p-3">

                <div class="tab-pane" id="domisili">
                    
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
                            <p>{{ $staff->usr_address }}</p>
                        </dd>

                        <dt class="col-sm-5">RT</dt>
                        <dd class="col-sm-7">
                            <p>{{ $staff->usr_rt }}</p>
                        </dd>

                        <dt class="col-sm-5">RW</dt>
                        <dd class="col-sm-7">
                            <p>{{ $staff->usr_rw }}</p>
                        </dd>

                        <dt class="col-sm-5">Desa / Kelurahan </dt>
                        <dd class="col-sm-7">
                            <p>{{ $staff->usr_rural_name }}</p>
                        </dd>

                        <dt class="col-sm-5">Kode Pos</dt>
                        <dd class="col-sm-7">
                            <p>{{ $staff->usr_postal_code }}</p>
                        </dd>
                    </div>
                </div>

                <div class="tab-pane" id="pendidikan">             
                    
                    <div class="row">

                        @if(isset($staff->educational_background['grade_school']))
                        <dt class="col-sm-5">Nama SD/Sederajat</dt>
                        <dd class="col-sm-7">
                            <p>{{$staff->educational_background['grade_school']}}</p>
                        </dd>
                        @endif
                        @if(isset($staff->educational_background['year_grade_school']))
                        <dt class="col-sm-5">Tahun SD/Sederajat</dt>
                        <dd class="col-sm-7">
                            <p>{{$staff->educational_background['year_grade_school']}}</p>
                        </dd>
                        @endif
                        @if(isset($staff->educational_background['junior_high_school']))
                        <dt class="col-sm-5">Nama SMP/Sederajat</dt>
                        <dd class="col-sm-7">
                            <p>{{$staff->educational_background['junior_high_school']}}</p>
                        </dd>
                        @endif
                        @if(isset($staff->educational_background['year_junior_high_school']))
                        <dt class="col-sm-5">Tahun SMP/Sederajat</dt>
                        <dd class="col-sm-7">
                            <p>{{$staff->educational_background['year_junior_high_school']}}</p>
                        </dd>
                        @endif
                        @if(isset($staff->educational_background['senior_high_school']))
                        <dt class="col-sm-5">Nama SMA/Sederajat</dt>
                        <dd class="col-sm-7">
                            <p>{{$staff->educational_background['senior_high_school']}}</p>
                        </dd>
                        @endif
                        @if(isset($staff->educational_background['year_senior_high_school']))
                        <dt class="col-sm-5">Tahun SMA/Sederajat</dt>
                        <dd class="col-sm-7">
                            <p>{{$staff->educational_background['year_senior_high_school']}}</p>
                        </dd>
                        @endif
                        @if(isset($staff->educational_background['college']))
                        <dt class="col-sm-5">Nama Perguruan Tinggi</dt>
                        <dd class="col-sm-7">
                            <p>{{$staff->educational_background['college']}}</p>
                        </dd>
                        @endif
                        @if(isset($staff->educational_background['year_entry']))
                        <dt class="col-sm-5">Tahun Perguruan Tinggi</dt>
                        <dd class="col-sm-7">
                            <p>{{$staff->educational_background['year_entry']}}</p>
                        </dd>
                        @endif
                        @if(isset($staff->educational_background['faculty_name']))
                        <dt class="col-sm-5">Nama Fakultas</dt>
                        <dd class="col-sm-7">
                            <p>{{$staff->educational_background['faculty_name']}}</p>
                        </dd>
                        @endif
                        @if(isset($staff->educational_background['faculty_major']))
                        <dt class="col-sm-5">Nama Jurusan</dt>
                        <dd class="col-sm-7">
                            <p>{{$staff->educational_background['faculty_major']}}</p>
                        </dd>
                        @endif
                        @if(isset($staff->educational_background['year_graduated']))
                        <dt class="col-sm-5">Tahun Lulus</dt>
                        <dd class="col-sm-7">
                            <p>{{$staff->educational_background['year_graduated']}}</p>
                        </dd>
                        @endif
                        @if(isset($staff->educational_background['degree']))
                        <dt class="col-sm-5">Gelar</dt>
                        <dd class="col-sm-7">
                            <p>{{$staff->educational_background['degree']}}</p>
                        </dd>
                        @endif                        
                    </div>
                 </div>

                 <div class="tab-pane" id="bekerja">             
                    
                    <div class="row">
                        @if(isset($staff->history_job['name']))
                        <dt class="col-sm-5">Nama Pekerjaan</dt>
                        <dd class="col-sm-7">
                            <p>{{$staff->history_job['name']}}</p>
                        </dd>
                        @endif
                        @if(isset($staff->history_job['lenght_of_work']))
                        <dt class="col-sm-5">Dari tahun/sampai </dt>
                        <dd class="col-sm-7">
                            <p>{{$staff->history_job['lenght_of_work']}}</p>
                        </dd>
                        @endif
                    </div>
                </div>

                 <div class="tab-pane" id="keahlian">             
                    
                    <div class="row">

                        @if(isset($staff->expertise['name']))
                        <dt class="col-sm-5">Nama Keahlian</dt>
                        <dd class="col-sm-7">
                            <p>{{$staff->expertise['name']}}</p>
                        </dd>
                        @endif
                        @if(isset($staff->expertise['name_of_agency']))
                        <dt class="col-sm-5">Nama Istansi/Lembaga</dt>
                        <dd class="col-sm-7">
                            <p>{{$staff->expertise['name_of_agency']}}</p>
                        </dd>
                        @endif
                    </div>
                </div>

                <div class="tab-pane" id="dokumen">             
                    
                    <div class="row">
            @if(isset($staff->other['identity_card']))
              <div class="card-body">
                <div class="row" style="margin-top: 30px;">
                    <div class="col-lg-4">
                        <a href="{{ url('download-file-staff/'. $staff->other['identity_card']) }}">
                        <i class="fa fa-file-text-o fa-3x" aria-hidden="true" style="margin-left: 20px;"></i>
                        </a>
                    </div>
                    <div class="col-lg-6" style="text-align: left; font-weight: bold; margin-left: -35px; margin-top: 5px;">
                        <p>Kartu Tanda Penduduk (KTP)</p> 
                    </div>     
                </div>
            </div>
            @endif  
            @if(isset($staff->other['family_card']))
            <div class="card-body">
                <div class="row" style="margin-top: 30px;">
                    <div class="col-lg-4">
                        <a href="{{ url('download-file-staff/'. $staff->other['family_card']) }}">
                        <i class="fa fa-file-text-o fa-3x" aria-hidden="true" style="margin-left: 10px;"></i>
                        </a>
                    </div>
                    <div class="col-lg-6" style="text-align: left; font-weight: bold; margin-left: -13px; margin-top: 5px;">
                        <p>Kartu Keluarga</p> 
                    </div>     
                </div>
            </div>  
            @endif
            @if(isset($staff->other['senior_high_school_diploma']))
            <div class="card-body">
                <div class="row" style="margin-top: 30px;">
                    <div class="col-lg-4">
                        <a href="{{ url('download-file-staff/'. $staff->other['senior_high_school_diploma']) }}">
                        <i class="fa fa-file-text-o fa-3x" aria-hidden="true" style="margin-left: 20px;"></i>
                        </a>
                    </div>
                    <div class="col-lg-10" style="text-align: left; font-weight: bold; margin-left: -110px; margin-top: 13px;">
                        <p>Surat Tanda Kelulusan Minimal SMA/SMK dilegalisir </p> 
                    </div>     
                </div>
            </div>  
            @endif 
            @if(isset($staff->other['curriculum_vitae']))
            <div class="card-body">
                <div class="row" style="margin-top: 30px;">
                    <div class="col-lg-4">
                        <a href="{{ url('download-file-staff/'. $staff->other['curriculum_vitae']) }}">
                        <i class="fa fa-file-text-o fa-3x" aria-hidden="true" style="margin-left: 20px;"></i>
                        </a>
                    </div>
                    <div class="col-lg-8" style="text-align: left; font-weight: bold; margin-left: -25px; margin-top: 5px;">
                        <p>Curriculum vitae (CV)</p> 
                    </div>     
                </div>
            </div> 
            @endif 
            @if(isset($staff->other['application_letter']))
            <div class="card-body">
                <div class="row" style="margin-top: 30px;">
                    <div class="col-lg-4">
                        <a href="{{ url('download-file-staff/'. $staff->other['application_letter']) }}">
                        <i class="fa fa-file-text-o fa-3x" aria-hidden="true" style="margin-left: 20px;"></i>
                        </a>
                    </div>
                    <div class="col-lg-8" style="text-align: left; font-weight: bold; margin-left: -12px; margin-top: 13px;">
                        <p>Surat Lamaran</p> 
                    </div>     
                </div>
            </div>  
            @endif
            @if(isset($staff->other['resume']))
            <div class="card-body">
                <div class="row" style="margin-top: 30px;">
                    <div class="col-lg-4">
                        <a href="{{ url('download-file-staff/'. $staff->other['resume']) }}">
                        <i class="fa fa-file-text-o fa-3x" aria-hidden="true" style="margin-left: 20px;"></i>
                        </a>
                    </div>
                    <div class="col-lg-6" style="text-align: left; font-weight: bold; margin-left: -115px; margin-top: 13px;">
                        <p>Resume</p> 
                    </div>     
                </div>
            </div>
            @endif
            

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