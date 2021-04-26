@extends('layouts.master')

@push('title')
- Detail Guru
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
@if($teacher->tcr_registration_status == 1)
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">Detail Guru</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">{{ env('APP_NAME') }}</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/students/')}}">Daftar Guru </a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Guru</li>
        </ol>
    </div>
</div>

@elseif($teacher->tcr_registration_status == 0)
<div class="row pt-2 pb-2">
  <div class="col-sm-9">
    <h4 class="page-title">Daftar Calon Guru</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">{{ env('APP_NAME') }}</a></li>
      <li class="breadcrumb-item"><a href="{{ url('/students-prospective')}}">Daftar Calon Guru</a></li>
      <li class="breadcrumb-item active" aria-current="page">Detail Calon Guru</li>
  </ol>
</div>
</div>

@else
<div class="row pt-2 pb-2">
  <div class="col-sm-9">
    <h4 class="page-title">Daftar Guru Ditolak</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">{{ env('APP_NAME') }}</a></li>
      <li class="breadcrumb-item"><a href="{{ url('/students-rejected')}}">Daftar Guru Ditolak</a></li>
      <li class="breadcrumb-item active" aria-current="page">Detail Guru Ditolak</li>
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
        <div class="col-lg-5">
           <div class="profile-card-3">
            <div class="card">
             <div class="user-fullimage text-center">
                @if(isset($teacher->usr_profile_picture))
               <img src="{{ asset($teacher->usr_profile_picture)}}" alt="user avatar"  class="card-img-top" style="margin-top: 40px; width: 200px; height: 200px;">
                @else
                <img src="{{ asset('images/default_profile_picture_20210228.png')}}" alt="user avatar"  class="card-img-top" style="margin-top: 40px; width: 200px; height: 200px;">
                @endif
              </div>
                <div class="row" style="margin-top: 40px; margin-left: 10px;">

                        <dt class="col-sm-5">Nama Guru</dt>
                        <dd class="col-sm-7">
                            <p>{{ $teacher->usr_name }}</p>
                        </dd>

                        <dt class="col-sm-5">Email</dt>
                        <dd class="col-sm-7">
                            <p>{{ $teacher->usr_email }}</p>
                        </dd>

                        <dt class="col-sm-5">Nomor Telepon</dt>
                        <dd class="col-sm-7">
                            <p>{{ $teacher->usr_phone_number }}</p>
                        </dd>
                        @if(isset($teacher->personal['nik']))
                        <dt class="col-sm-5">NIK</dt>
                        <dd class="col-sm-7">
                            <p>{{ $teacher->personal['nik'] }}</p>
                        </dd>
                        @endif
                        @if(isset($teacher->tcr_nuptk))
                        <dt class="col-sm-5">NUPTK</dt>
                        <dd class="col-sm-7">
                            <p>{{ $teacher->tcr_nuptk }}</p>
                        </dd>
                        @endif
                        <dt class="col-sm-5">Tempat Lahir</dt>
                        <dd class="col-sm-7">
                            <p>{{ $teacher->usr_place_of_birth }}</p>
                        </dd>
                        <dt class="col-sm-5">Tanggal Lahir</dt>
                        <dd class="col-sm-7">
                            <p>{{ getDateOfBirth($teacher->usr_date_of_birth) }}</p>
                        </dd>
                        <dt class="col-sm-5">Agama</dt>
                        <dd class="col-sm-7">
                            <p>{{ $teacher->usr_religion }}</p>
                        </dd>
                        <dt class="col-sm-5">Jenis Kelamin</dt>
                        <dd class="col-sm-7">
                            <p>{{ $teacher->usr_gender}}</p>
                        </dd>
                        <dt class="col-sm-5">No. WhatsApp </dt>
                        <dd class="col-sm-7">
                            <p>{{ $teacher->usr_whatsapp_number }}</p>
                        </dd>
                    </div>
                    <div>
                      <a href="{{url('teachers')}}" class="btn btn-primary" style="margin-bottom: 20px; margin-left: 25px; "><i class="fa fa-arrow-left"></i> Kembali</a>
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
                @if(isset($teacher->teaching_history))
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#mengajar" data-toggle="pill" class="nav-link"><i class="ti-id-badge"></i> <span class="hidden-xs">Riwayat Mengajar</span></a>
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
                            <p>{{ $teacher->usr_address }}</p>
                        </dd>

                        <dt class="col-sm-5">RT</dt>
                        <dd class="col-sm-7">
                            <p>{{ $teacher->usr_rt }}</p>
                        </dd>

                        <dt class="col-sm-5">RW</dt>
                        <dd class="col-sm-7">
                            <p>{{ $teacher->usr_rw }}</p>
                        </dd>

                        <dt class="col-sm-5">Desa / Kelurahan </dt>
                        <dd class="col-sm-7">
                            <p>{{ $teacher->usr_rural_name }}</p>
                        </dd>

                        <dt class="col-sm-5">Kode Pos</dt>
                        <dd class="col-sm-7">
                            <p>{{ $teacher->usr_postal_code }}</p>
                        </dd>
                    </div>
                </div>

                <div class="tab-pane" id="pendidikan">             
                    
                    <div class="row">

                        @if(isset($teacher->educational_background['grade_school']))
                        <dt class="col-sm-5">Nama SD/Sederajat</dt>
                        <dd class="col-sm-7">
                            <p>{{$teacher->educational_background['grade_school']}}</p>
                        </dd>
                        @endif                        
                        @if(isset($teacher->educational_background['year_grade_school']))
                        <dt class="col-sm-5">Tahun SD/Sederajat</dt>
                        <dd class="col-sm-7">
                            <p>{{$teacher->educational_background['year_grade_school']}}</p>
                        </dd>
                        @endif
                        @if(isset($teacher->educational_background['junior_high_school']))
                        <dt class="col-sm-5">Nama SMP/Sederajat</dt>
                        <dd class="col-sm-7">
                            <p>{{$teacher->educational_background['junior_high_school']}}</p>
                        </dd>
                        @endif
                        @if(isset($teacher->educational_background['year_junior_high_school']))
                        <dt class="col-sm-5">Tahun SMP/Sederajat</dt>
                        <dd class="col-sm-7">
                            <p>{{$teacher->educational_background['year_junior_high_school']}}</p>
                        </dd>
                        @endif
                        @if(isset($teacher->educational_background['senior_high_school']))
                        <dt class="col-sm-5">Nama SMA/Sederajat</dt>
                        <dd class="col-sm-7">
                            <p>{{$teacher->educational_background['senior_high_school']}}</p>
                        </dd>
                        @endif
                        @if(isset($teacher->educational_background['year_senior_high_school']))
                        <dt class="col-sm-5">Tahun SMA/Sederajat</dt>
                        <dd class="col-sm-7">
                            <p>{{$teacher->educational_background['year_senior_high_school']}}</p>
                        </dd>
                        @endif
                       @if(isset($teacher->educational_background['college']))
                        <dt class="col-sm-5">Nama Perguruan Tinggi</dt>
                        <dd class="col-sm-7">
                            <p>{{$teacher->educational_background['college']}}</p>
                        </dd>
                        @endif
                         @if(isset($teacher->educational_background['year_entry']))
                        <dt class="col-sm-5">Tahun Perguruan Tinggi</dt>
                        <dd class="col-sm-7">
                            <p>{{$teacher->educational_background['year_entry']}}</p>
                        </dd>
                        @endif
                        @if(isset($teacher->educational_background['faculty_name']))
                        <dt class="col-sm-5">Nama Fakultas</dt>
                        <dd class="col-sm-7">
                            <p>{{$teacher->educational_background['faculty_name']}}</p>
                        </dd>
                        @endif
                         @if(isset($teacher->educational_background['faculty_major']))
                        <dt class="col-sm-5">Nama Jurusan</dt>
                        <dd class="col-sm-7">
                            <p>{{$teacher->educational_background['faculty_major']}}</p>
                        </dd>
                        @endif
                        @if(isset($teacher->educational_background['year_graduated']))
                        <dt class="col-sm-5">Tahun Lulus</dt>
                        <dd class="col-sm-7">
                            <p>{{$teacher->educational_background['year_graduated']}}</p>
                        </dd>
                        @endif
                        @if(isset($teacher->educational_background['degree']))
                        <dt class="col-sm-5">Gelar</dt>
                        <dd class="col-sm-7">
                            <p>{{$teacher->educational_background['degree']}}</p>
                        </dd>
                        @endif
                    </div>
                 </div>

                  <div class="tab-pane" id="mengajar">             
                    
                    <div class="row">

                        @if(isset($teacher->teaching_history['school_name']))
                        <dt class="col-sm-5">Nama Sekolah</dt>
                        <dd class="col-sm-7">
                            <p>{{$teacher->teaching_history['school_name']}}</p>
                        </dd>
                        @endif
                        @if(isset($teacher->teaching_history['subject']))
                        <dt class="col-sm-5">Mata Pelajaran</dt>
                        <dd class="col-sm-7">
                            <p>{{$teacher->teaching_history['subject']}}</p>
                        </dd>
                        @endif
                        @if(isset($teacher->teaching_history['grade_or_level']))
                        <dt class="col-sm-5">Kelas/Tingkat</dt>
                        <dd class="col-sm-7">
                            <p>{{$teacher->teaching_history['grade_or_level']}}</p>
                        </dd>
                        @endif
                        @if(isset($teacher->teaching_history['number_of_hours']))
                        <dt class="col-sm-5">Jumlah Jam</dt>
                        <dd class="col-sm-7">
                            <p>{{$teacher->teaching_history['number_of_hours']}}</p>
                        </dd>
                        @endif
                        @if(isset($teacher->teaching_history['from_year_to_year']))
                        <dt class="col-sm-5">Dari Tahun/Sampai</dt>
                        <dd class="col-sm-7">
                            <p>{{$teacher->teaching_history['from_year_to_year']}}</p>
                        </dd>
                        @endif
                        @if(isset($teacher->teaching_history['status']))
                        <dt class="col-sm-5">Status</dt>
                        <dd class="col-sm-7">
                            <p>{{$teacher->teaching_history['status']}}</p>
                        </dd>
                        @endif


                    </div>
                 </div>
               
                 <div class="tab-pane" id="dokumen">             
                    
            
            @if(isset($teacher->other['identity_card']))
            
                <div class="row" >
                    <div class="col-lg-12">
                    <label class="col-form-label" for="exampleInputFile">Kartu Tanda Penduduk (KTP)</label>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-lg-12">
                        <a href="{{ url('download-file-teacher/'. $teacher->other['identity_card']) }}">
                        <i class="fa fa-file-text-o fa-2x" aria-hidden="true" ></i>
                        {{$teacher->other['identity_card']}}
                        </a>
                    </div>
                         
                </div>
            
            
            @endif 
            <br> 
            @if(isset($teacher->other['family_card']))
            
                <div class="row" >
                    <div class="col-lg-12">
                    <label class="col-form-label" for="exampleInputFile">Kartu Keluarga</label>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-lg-12">
                        <a href="{{ url('download-file-teacher/'. $teacher->other['family_card']) }}">
                        <i class="fa fa-file-text-o fa-2x" aria-hidden="true" ></i>
                        {{$teacher->other['family_card']}}
                        </a>
                    </div>
                         
                </div>
            
            @endif
            <br>
            @if(isset($teacher->other['scholar_diploma']))
            
                <div class="row" >
                    <div class="col-lg-12">
                    <label class="col-form-label" for="exampleInputFile">Surat Tanda Kelulusan Minimal D4/S1 dilegalisir</label>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-lg-12">
                        <a href="{{ url('download-file-teacher/'. $teacher->other['scholar_diploma']) }}">
                        <i class="fa fa-file-text-o fa-2x" aria-hidden="true" ></i>
                        {{$teacher->other['scholar_diploma']}}
                        </a>
                    </div>
                         
                </div>
            

            @endif
            <br>
            @if(isset($teacher->other['curriculum_vitae']))
           
                <div class="row" >
                    <div class="col-lg-12">
                    <label class="col-form-label" for="exampleInputFile">Curriculum vitae (CV)</label>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-lg-12">
                        <a href="{{ url('download-file-teacher/'. $teacher->other['curriculum_vitae']) }}">
                        <i class="fa fa-file-text-o fa-2x" aria-hidden="true" ></i>
                        {{$teacher->other['curriculum_vitae']}}
                        </a>
                    </div>
                         
                </div>
            
            @endif
            <br> 
            @if(isset($teacher->other['application_letter']))
            
                <div class="row" >
                    <div class="col-lg-12">
                    <label class="col-form-label" for="exampleInputFile">Surat Lamaran</label>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-lg-12">
                        <a href="{{ url('download-file-teacher/'. $teacher->other['application_letter']) }}">
                        <i class="fa fa-file-text-o fa-2x" aria-hidden="true" ></i>
                        {{$teacher->other['application_letter']}}
                        </a>
                    </div>
                         
                </div>
            
            
            @endif
            <br>
            @if(isset($teacher->other['resume']))
            
                <div class="row" >
                    <div class="col-lg-12">
                    <label class="col-form-label" for="exampleInputFile">Resume</label>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-lg-12">
                        <a href="{{ url('download-file-teacher/'. $teacher->other['resume']) }}">
                        <i class="fa fa-file-text-o fa-2x" aria-hidden="true" ></i>
                        {{$teacher->other['resume']}}
                        </a>
                    </div>
                         
                </div>
            
            @endif  

                    
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