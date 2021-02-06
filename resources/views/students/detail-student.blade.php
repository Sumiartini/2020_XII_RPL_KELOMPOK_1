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

<div class="col-lg-12">
    <div class="card">
        <div class="card-body">

            <h4 class="text-primary">Data Siswa</h4>
            <div class="table-responsive">
                <table class="table table-stripped">
                    <tbody>
                        <tr>
                            <th>Nama Lengkap</th>
                            <td>:</td>
                            <td>{{ $student->stu_candidate_name }}</td>

                            <th>Jenis Kelamin</th>
                            <td>:</td>
                            <td>{{ $student->usr_gender }}</td>
                        </tr>

                        <tr>
                            <th>NISN</th>
                            <td>:</td>
                            <td>{{ $student->stu_nisn }}</td>

                            <th>No Telepon</th>
                            <td>:</td>
                            <td>{{ $student->usr_phone_number}}</td>
                        </tr>

                        <tr>
                            <th>NIS</th>
                            <td>:</td>
                            @if($student->stu_nis == null)
                            <td> - </td>
                            @else
                            <td>{{ $student->stu_nis }}</td>
                            @endif
                            
                            <th>No WhattsApp</th>
                            <td>:</td>
                            <td>{{ $student->usr_whatsapp_number }}</td>
                        </tr>

                        <tr>
                            <th>Tempat lahir</th>
                            <td>:</td>
                            <td>{{ $student->usr_place_of_birth }}</td>

                            <th>Tanggal Lahir</th>
                            <td>:</td>
                            <td>{{ date('d M Y', strtotime($student->usr_date_of_birth )) }}</td>
                        </tr>
                        @if(isset($student->personal['birth_certificate_registration_no']))
                        <tr>
                            <th>No Registrasi Akta Lahir</th>
                            <td>:</td>
                            <td>{{ $student->personal['birth_certificate_registration_no'] }}</td>

                            <th>Tinggal Bersama</th>
                            <td>:</td>
                            <td>{{ $student->personal['living_together'] }}</td>
                        </tr>
                        @endif
                        <tr>
                            <th>Jurusan yang diminati</th>
                            <td>:</td>
                            <td>{{ $student->mjr_name}}</td>

                            <th>Anak ke</th>
                            <td>:</td>
                            <td>{{ $student->personal['child'] }}</td>
                        </tr>
                        
                        
                        <tr>
                            <th>Agama</th>
                            <td>:</td>
                            <td>{{ $student->usr_religion }}</td>

                            <th></th>
                            <td></td>
                            <td></td>
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

            
            <h4 class="text-primary">Data Ayah</h4>
            <div class="table-responsive">
                <table class="table table-stripped">
                    <tbody>
                        <tr>
                            <th>Nama Ayah Kandung</th>
                            <td>:</td>
                            <td>{{ $student->father_data['name'] }}</td>

                            <th scope="row">NIK</th>
                            <td>:</td>
                            <td>{{ $student->father_data['nik'] }}</td>
                        </tr>

                        
                        <tr>
                            <th>Tahun lahir</th>
                            <td>:</td>
                            <td>{{ $student->father_data['year_of_birth'] }}</td>
                            
                            <th>Pendidikan terakhir</th>
                            <td>:</td>
                            <td>{{ $student->father_data['education'] }}</td>
                        </tr>

                        <tr>
                            <th>Pekerjaan</th>
                            <td>:</td>
                            <td>{{ $student->father_data['profession'] }}</td>
                            
                            <th>Pendapatan perbulan</th>
                            <td>:</td>
                            <td>{{ $student->father_data['monthly_income'] }}</td>
                        </tr>

                        <tr>
                            <th>Nomor telepon</th>
                            <td>:</td>
                            <td>{{ $student->father_data['phone_number'] }}</td>
                            
                            <th>Disabilitas</th>
                            <td>:</td>
                            <td>{{ $student->father_data['disability'] }}</td>
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

            <h4 class="text-primary">Data Ibu</h4>
            <div class="table-responsive">
                <table class="table table-stripped">
                    <tbody>
                        <tr>
                            <th>Nama Ibu Kandung</th>
                            <td>:</td>
                            <td>{{ $student->mother_data['name'] }}</td>

                            <th scope="row">NIK</th>
                            <td>:</td>
                            <td>{{ $student->mother_data['nik'] }}</td>
                        </tr>

                        
                        <tr>
                            <th>Tahun lahir</th>
                            <td>:</td>
                            <td>{{ $student->mother_data['year_of_birth'] }}</td>
                            
                            <th>Pendidikan terakhir</th>
                            <td>:</td>
                            <td>{{ $student->mother_data['education'] }}</td>
                        </tr>

                        <tr>
                            <th>Pekerjaan</th>
                            <td>:</td>
                            <td>{{ $student->mother_data['profession'] }}</td>
                            
                            <th>Pendapatan perbulan</th>
                            <td>:</td>
                            <td>{{ $student->mother_data['monthly_income'] }}</td>
                        </tr>

                        <tr>
                            <th>Nomor telepon</th>
                            <td>:</td>
                            <td>{{ $student->mother_data['phone_number'] }}</td>
                            
                            <th>Disabilitas</th>
                            <td>:</td>
                            <td>{{ $student->mother_data['disability'] }}</td>
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

            <h4 class="text-primary">Data Wali</h4>
            <div class="table-responsive">
                <table class="table table-stripped">
                    <tbody>
                        <tr>
                            <th>Nama</th>
                            <td>:</td>
                            <td>{{ $student->guardian_data['name'] }}</td>

                            <th scope="row">NIK</th>
                            <td>:</td>
                            <td>{{ $student->guardian_data['nik'] }}</td>
                        </tr>

                        
                        <tr>
                            <th>Tahun lahir</th>
                            <td>:</td>
                            <td>{{ $student->guardian_data['year_of_birth'] }}</td>
                            
                            <th>Pendidikan terakhir</th>
                            <td>:</td>
                            <td>{{ $student->guardian_data['education'] }}</td>
                        </tr>

                        <tr>
                            <th>Pekerjaan</th>
                            <td>:</td>
                            <td>{{ $student->guardian_data['profession'] }}</td>
                            
                            <th>Pendapatan perbulan</th>
                            <td>:</td>
                            <td>{{ $student->guardian_data['monthly_income'] }}</td>
                        </tr>

                        <tr>
                            <th>Nomor telepon</th>
                            <td>:</td>
                            <td>{{ $student->guardian_data['phone_number'] }}</td>
                            
                            <th>Disabilitas</th>
                            <td>:</td>
                            <td>{{ $student->guardian_data['disability'] }}</td>
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



            <h4 class="text-primary">Data Persuratan</h4>
            <div class="table-responsive">
                <table class="table table-stripped">
                    <tbody>
                            @foreach($user as $data)
                        <tr>
                            <th >Provinsi</th>
                            <td>:</td>
                            <td>{{$data->prv_name}}</td>

                            <th>Kota/Kabupaten</th>
                            <td>:</td>
                            <td>{{$data->cit_name}}</td>
                        </tr>
                        <tr>
                            <th> Kecamatan</th>
                            <td>:</td>
                            <td>{{$data->dst_name}}</td>
                                @endforeach
                            <th >Desa/Kelurahan</th>
                            <td>:</td>
                            <td>{{ $student->usr_rural_name }}</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>:</td>
                            <td>{{ $student->usr_address }}</td>

                            <th>RT</th>
                            <td>:</td>
                            <td>{{ $student->usr_rt }}</td>
                        </tr>
                        

                        <tr>
                            <th>RW</th>
                            <td>:</td>
                            <td>{{ $student->usr_rw }}</td>

                            <th>Kode pos</th>
                            <td>:</td>
                            <td>{{ $student->usr_postal_code }}</td>
                        </tr>

                        <tr>
                            <th >Telepon rumah</th>
                            <td>:</td>
                            <td>{{ $student->contact['landline_number'] }}</td>
                            
                            <th>Email rumah</th>
                            <td>:</td>
                            <td>{{ $student->contact['email'] }}</td>
                            
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

            <h4 class="text-primary">Prestasi</h4>
            <div class="table-responsive">
                <table class="table table-stripped">
                    <tbody>
                        <tr>
                            <th>Jenis / Tipe prestasi</th>
                            <td>:</td>
                            <td>{{ $student->achievement['type'] }}</td>
                            
                            <th>Tingkat</th>
                            <td>:</td>
                            <td>{{ $student->achievement['achievement_level'] }}</td>
                        </tr>

                        <tr>
                            <th>Nama prestasi</th>
                            <td>:</td>
                            <td>{{ $student->achievement['achievement_name'] }}</td>
                            
                            <th>Tahun</th>
                            <td>:</td>
                            <td>{{ $student->achievement['year'] }}</td>
                        </tr>

                        <tr>
                            <th>Penyelenggara</th>
                            <td>:</td>
                            <td>{{ $student->achievement['organizer'] }}</td>

                            <th></th>
                            <td></td>
                            <td></td>

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


            <h4 class="text-primary">Lainnya</h4>
            <div class="table-responsive">
                <table class="table table-stripped">
                    <tbody>
                        <tr>
                            <th>Rekomendasi Dari</th>
                            <td>:</td>
                            <td>{{ $student->other['recomended_from'] }}</td>

                            <th>Jalur Masuk</th>
                            <td>:</td>
                            <td>{{ $student->ent_name }}</td>
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