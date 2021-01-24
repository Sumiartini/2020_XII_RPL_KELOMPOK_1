@extends('layouts.master')

@push('title')
- Detail Siswa Ditolak
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
<link href="{{ asset('assets/css/app-style.css')}}" rel="stylesheet" />
@endpush

@section('content')
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">Detail Siswa Ditolak</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">SMK Mahaputra</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/students')}}">Daftar Siswa Ditolak</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Siswa Ditolak</li>
        </ol>
    </div>
</div>

<div class="col-lg-12">
    <div class="profile-card-3 ">
        <div class="text-center">
            <img src="{{ asset('candidate_student/'.$student_rejected->usr_profile_picture) }}" alt="user avatar" class="card-img-top" style="width: 200px;
            height: 200px;
            background: #dac52c;
            border-radius: 100%;">
        </div>
        <hr>
    </div>
</div>

<div class="col-lg-12">
    <div class="card">
        <div class="card-body">

            <h4 class="text-primary">Data Calon Siswa</h4>
            <div class="table-responsive">
                <table class="table table-stripped">
                    <tbody>
                        <tr>
                            <th>Nama Lengkap</th>
                            <td>:</td>
                            <td>{{ $student_rejected->stu_candidate_name }}</td>

                            <th>Jenis Kelamin</th>
                            <td>:</td>
                            <td>{{ $student_rejected->usr_gender }}</td>
                        </tr>

                        <tr>
                            <th>NISN</th>
                            <td>:</td>
                            <td>{{ $student_rejected->stu_nisn }}</td>

                            <th>No Telepon</th>
                            <td>:</td>
                            <td>{{ $student_rejected->usr_phone_number}}</td>
                        </tr>

                        <tr>
                            <th>No WhattsApp</th>
                            <td>:</td>
                            <td>{{ $student_rejected->usr_whatsapp_number }}</td>
                        
                            <th>Tempat lahir</th>
                            <td>:</td>
                            <td>{{ $student_rejected->usr_place_of_birth }}</td>

                        </tr>

                        <tr>
                            <th>Tanggal Lahir</th>
                            <td>:</td>
                            <td>{{ date('d M Y', strtotime($student_rejected->usr_date_of_birth )) }}</td>
                        
                            <th>No Registrasi Akta Lahir</th>
                            <td>:</td>
                            <td>{{ $student_rejected->personal['birth_certificate_registration_no'] }}</td>
                        </tr>

                        <tr>
                            <th>Tinggal Bersama</th>
                            <td>:</td>
                            <td>{{ $student_rejected->personal['living_together'] }}</td>
            
                            <th>Jurusan yang diminati</th>
                            <td>:</td>
                            <td>{{ $student_rejected->stu_school_origin }}</td>
                        
                        </tr>

                        <tr>
                            <th>Anak ke</th>
                            <td>:</td>
                            <td>{{ $student_rejected->personal['child'] }}</td>

                            <th>Agama</th>
                            <td>:</td>
                            <td>{{ $student_rejected->usr_religion }}</td>

                        </tr>
                        
                        <tr>
                            
                            <th>Rekomendasi dari</th>
                            <td>:</td>
                            <td>{{ $student_rejected->other['recomended_from'] }}</td>

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


        <h4 class="text-primary">Data Persuratan</h4>
            <div class="table-responsive">
                <table class="table table-stripped">
                    <tbody>

                        <tr>
                            <th >Provinsi</th>
                            <td>:</td>
                            <td>Jawa Barat</td>

                            <th>Kota/Kabupaten</th>
                            <td>:</td>
                            <td>Bandung</td>
                        </tr>


                        <tr>
                            <th>Alamat</th>
                            <td></td>
                            <td>{{ $student_rejected->usr_gender }}</td>

                            <th>RT</th>
                            <td>:</td>
                            <td>{{ $student_rejected->usr_rt }}</td>
                        </tr>
                        

                        <tr>
                            <th>RW</th>
                            <td>:</td>
                            <td>{{ $student_rejected->usr_rw }}</td>

                            <th >Desa/Kelurahan</th>
                            <td>:</td>
                            <td>{{ $student_rejected->usr_rural_name }}</td>
                        </tr>

                        <tr>
                            <th>Kode pos</th>
                            <td>:</td>
                            <td>{{ $student_rejected->usr_postal_code }}</td>

                            <th >Telepon rumah</th>
                            <td>:</td>
                            <td>{{ $student_rejected->contact['landline_number'] }}</td>
                                
                        </tr>

                        <tr>
                            
                            <th>Email rumah</th>
                            <td>:</td>
                            <td>{{ $student_rejected->contact['email'] }}</td>

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
                            <td>{{ $student_rejected->father_data['name'] }}</td>

                            <th scope="row">NIK</th>
                            <td>:</td>
                            <td>{{ $student_rejected->father_data['nik'] }}</td>
                        </tr>

                                
                        <tr>
                            <th>Tahun lahir</th>
                            <td>:</td>
                            <td>{{ $student_rejected->father_data['year_of_birth'] }}</td>
                    
                            <th>Pendidikan terakhir</th>
                            <td>:</td>
                            <td>{{ $student_rejected->father_data['education'] }}</td>
                        </tr>

                        <tr>
                            <th>Pekerjaan</th>
                            <td>:</td>
                            <td>{{ $student_rejected->father_data['profession'] }}</td>
                         
                            <th>Pendapatan perbulan</th>
                            <td>:</td>
                            <td>{{ $student_rejected->father_data['monthly_income'] }}</td>
                        </tr>

                         <tr>
                            <th>Nomor telepon</th>
                            <td>:</td>
                            <td>{{ $student_rejected->father_data['phone_number'] }}</td>
                          
                            <th>Disabilitas</th>
                            <td>:</td>
                            <td>{{ $student_rejected->father_data['disability'] }}</td>
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
                            <td>{{ $student_rejected->mother_data['name'] }}</td>

                            <th scope="row">NIK</th>
                            <td>:</td>
                            <td>{{ $student_rejected->mother_data['nik'] }}</td>
                        </tr>

                                
                        <tr>
                            <th>Tahun lahir</th>
                            <td>:</td>
                            <td>{{ $student_rejected->mother_data['year_of_birth'] }}</td>
                    
                            <th>Pendidikan terakhir</th>
                            <td>:</td>
                            <td>{{ $student_rejected->mother_data['education'] }}</td>
                        </tr>

                        <tr>
                            <th>Pekerjaan</th>
                            <td>:</td>
                            <td>{{ $student_rejected->mother_data['profession'] }}</td>
                         
                            <th>Pendapatan perbulan</th>
                            <td>:</td>
                            <td>{{ $student_rejected->mother_data['monthly_income'] }}</td>
                        </tr>

                         <tr>
                            <th>Nomor telepon</th>
                            <td>:</td>
                            <td>{{ $student_rejected->mother_data['phone_number'] }}</td>
                          
                            <th>Disabilitas</th>
                            <td>:</td>
                            <td>{{ $student_rejected->mother_data['disability'] }}</td>
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
                            <td>{{ $student_rejected->guardian_data['name'] }}</td>

                            <th scope="row">NIK</th>
                            <td>:</td>
                            <td>{{ $student_rejected->guardian_data['nik'] }}</td>
                        </tr>

                                
                        <tr>
                            <th>Tahun lahir</th>
                            <td>:</td>
                            <td>{{ $student_rejected->guardian_data['year_of_birth'] }}</td>
                    
                            <th>Pendidikan terakhir</th>
                            <td>:</td>
                            <td>{{ $student_rejected->guardian_data['education'] }}</td>
                        </tr>

                        <tr>
                            <th>Pekerjaan</th>
                            <td>:</td>
                            <td>{{ $student_rejected->guardian_data['profession'] }}</td>
                         
                            <th>Pendapatan perbulan</th>
                            <td>:</td>
                            <td>{{ $student_rejected->guardian_data['monthly_income'] }}</td>
                        </tr>

                         <tr>
                            <th>Nomor telepon</th>
                            <td>:</td>
                            <td>{{ $student_rejected->guardian_data['phone_number'] }}</td>
                          
                            <th>Disabilitas</th>
                            <td>:</td>
                            <td>{{ $student_rejected->guardian_data['disability'] }}</td>
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
                            <td>{{ $student_rejected->achievement['type'] }}</td>
                          
                            <th>Tingkat</th>
                            <td>:</td>
                            <td>{{ $student_rejected->achievement['achievement_level'] }}</td>
                        </tr>

                        <tr>
                            <th>Nama prestasi</th>
                            <td>:</td>
                            <td>{{ $student_rejected->achievement['achievement_name'] }}</td>
                          
                            <th>Tahun</th>
                            <td>:</td>
                            <td>{{ $student_rejected->achievement['year'] }}</td>
                        </tr>

                        <tr>
                            <th>Penyelenggara</th>
                            <td>:</td>
                            <td>{{ $student_rejected->achievement['organizer'] }}</td>

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
                            <td>{{ $student_rejected->other['recomended_from'] }}</td>

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