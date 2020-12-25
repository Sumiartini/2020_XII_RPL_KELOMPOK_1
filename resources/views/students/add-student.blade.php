@extends('layouts.master')

@push('title')
- Tambah Siswa
@endpush

@push('styles')

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Tambah Siswa</title>
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
@endpush

@section('content')

<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">Tambah Siswa</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">SMK Mahaputra</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Kelola Siswa</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah SIswa</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form id="signupForm" autocomplete="off" method="POST" action="{{ url('student/create') }}" novalidate="novalidate">
                    @csrf
                    <h4 class="form-header text-uppercase">
                        <i class="  "></i>
                        Data Akun
                    </h4>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label>Nama Lengkap<span style="color:red"> *</span></label>
                            <input type="text" class="form-control" id="input-10" name="usr_name" placeholder="Masukan Nama Lengkap">
                        </div>
                         <div class="col-sm-4">
                        <label>Email<span style="color:red"> *</span></label>
                            <input type="email" class="form-control" id="input-10" name="usr_email" placeholder="Masukan Nomor Telepon">                        
                        </div>
                        <div class="col-sm-4">
                            <label>Nomor Telepon<span style="color:red"> *</span></label>
                            <input type="text" class="form-control" id="input-10" name="usr_phone" placeholder="Masukan Nomor NIK">
                        </div>
                    </div>
                    <div class="form-group row">

                        <div class="col-sm-6">
                            <label>Kata Sandi<span style="color:red"> *</span></label>
                            <input type="password" class="form-control" id="input-10" name="usr_password" placeholder="Masukan Kata Sandi">
                        </div>
                        <div class="col-sm-6">
                            <label>Ulangi Kata Sandi<span style="color:red"> *</span></label>
                            <input type="password" class="form-control" id="input-10" name="usr_retype_password" placeholder="Masukan Kata Sandi">
                        </div>
                    </div>


                    <h4 class="form-header text-uppercase">
                        <i class="  "></i>
                        Data Pribadi
                    </h4>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label>NIK / No. KITAS (untuk WNA)<span style="color:red"> *</span></label>
                            <input type="text" class="form-control" id="input-10" name="usr_nik" placeholder="Masukan Nomor NIK">
                        </div>
                        <div class="col-sm-4">
                            <label>No Registrasi Akta Lahir</label>
                            <input type="text" class="form-control" id="input-10" name="personal[birth_certificate_registration_no]" placeholder="No Registrasi Akta Lahir">
                        </div>

                        <div class="col-sm-4">
                            <label>Agama<span style="color:red"> *</span></label>
                            <select class="form-control" name="usr_religion" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option value="Islam">Islam</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Khonghucu">Khonghucu</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>NISN<span style="color:red"> *</span></label>
                            <input type="text" class="form-control" id="input-10" name="std_nisn" placeholder="Masukan Nomor NISN">
                        </div>

                        <div class="col-sm-4">
                            <label>Kewarganegaraan<span style="color:red"> *</span></label>
                            <select name="personal[citizenship]" class="form-control" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option>WNI</option>
                                <option>WNA</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label>Nama Negara<span style="color:red"> *</span></label>
                            <input name="personal[country_name]" type="text" class="form-control" id="input-10" placeholder="Nama Negara">
                        </div>

             
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Tempat Lahir<span style="color:red"> *</span></label>
                            <input type="text" name="usr_place_of_birth" class="form-control" id="input-10" name="firstname" placeholder="Masukan Tempat Lahir">
                        </div>

                        <div class="col-sm-4">
                            <label>Tanggal Lahir<span style="color:red"> *</span></label>
                            <input type="text" name="usr_date_of_birth" id="autoclose-datepicker" class="form-control" placeholder="tanggal/bulan/tahun">
                        </div>
                        <div class="col-sm-4">
                            <label>Jenis Kelamin<span style="color:red"> *</span></label>

                            <select name="usr_gender" class="form-control" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option>Laki Laki</option>
                                <option>Perempuan</option>
                            </select>

                        </div>
                    </div>

                    
                    <div class="form-group row">

                        <div class="col-sm-2">
                            <label>Mendapatkan KIP</label> <br>

                            <div class="radio icheck-info icheck-inline">
                                <input type="radio" id="receive_kip1" value="Ya" name="personal[receive_kip]">
                                <label for="receive_kip1">Ya</label>
                            </div>
                            <div class="radio icheck-info icheck-inline">
                                <input type="radio" checked="" id="receive_kip2" value="Tidak" name="personal[receive_kip]">
                                <label for="receive_kip2">Tidak</label>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label>NO KIP</label>
                            <input type="text" name="stu_no_kip" class="form-control" id="input-10" placeholder="Masukan Nomor KIP">
                        </div>

                
                        <div class="col-sm-4">
                            <label>Tempat Tinggal<span style="color:red"> *</span></label>
                            <select class="form-control" name="personal[living_together]" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option value="Orang Tua">Orang Tua</option>
                                <option value="Wali">Wali</option>
                                <option value="Kos">Kos</option>
                                <option value="Asrama">Asrama</option>
                                <option value="Panti Asuhan">Panti Asuhan</option>
                                <option value="Pesantren">Pesantren</option>
                            </select>
                        </div>
                         <div class="col-sm-2">
                            <label>Anak Ke<span style="color:red"> *</span></label>
                            <input type="text" name="personal[child]" class="form-control" id="input-10" placeholder="Anak Ke">
                        </div>
                    </div>


                    <h4 class="form-header text-uppercase">
                        <i class=""></i>
                        Data Ayah
                    </h4>

                    <div class="form-group row">

                        <div class="col-sm-6">
                            <label>Nama Ayah Kandung<span style="color:red"> *</span></label>
                            <input type="text" name="father_data[name]" class="form-control" id="input-10" name="name" placeholder="Masukan Nama Lengkap">
                        </div>

                        <div class="col-sm-4">
                            <label>Nomor Identitas (NIK)<span style="color:red"> *</span></label>
                            <input type="text" name="father_data[nik]" class="form-control" id="input-10" name="firstname" placeholder="Masukan Nomor NIK">
                        </div>

                        <div class="col-sm-2">
                            <label>Tahun Lahir<span style="color:red"> *</span></label>
                            <select class="form-control" name="father_data[year_of_birth]" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option>2001</option>
                                <option>2000</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">

                        <div class="col-sm-3">
                            <label>Pendidikan Terakhir<span style="color:red"> *</span></label>
                            <select name="father_data[education]" class="form-control" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option>SD - Sederajat</option>
                                <option>SMP - Sederajat</option>
                                <option>SMA - Sederajat</option>
                                <option>KULIAH - Sederajat</option>

                            </select>
                        </div>
                        <div class="col-sm-3">
                            <label>Pekerjaan<span style="color:red"> *</span></label>

                            <select name="father_data[profession]" class="form-control" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option>Buruh</option>
                                <option>Wirausaha</option>
                            </select>

                        </div>
                        <div class="col-sm-3">
                            <label>Pendapatan Perbulan<span style="color:red"> *</span></label>
                            <select name="father_data[monthly_income]" class="form-control" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option>
                                    < Rp. 500.000</option> <option> > Rp. 500.000
                                </option>
                            </select>
                        </div>


                        <div class="col-sm-3">
                            <label>Disabilitas<span style="color:red"> *</span></label> <br>

                            <div class="radio icheck-info icheck-inline">
                                <input type="radio" id="disability_father1" value="Ya" name="father_data[disability]">
                                <label for="disability_father1">Ya</label>
                            </div>
                            <div class="radio icheck-info icheck-inline">
                                <input type="radio" checked="" id="disability_father2" value="Tidak" name="father_data[disability]">
                                <label for="disability_father2">Tidak</label>
                            </div>
                        </div>
                    </div>

                    <h4 class="form-header text-uppercase">
                        <i class=""></i>
                        Data Ibu
                    </h4>

                    <div class="form-group row">

                        <div class="col-sm-6">
                            <label>Nama Ibu Kandung<span style="color:red"> *</span></label>
                            <input type="text" name="mother_data[name]" class="form-control" id="input-10" name="firstname" placeholder="Masukan Nama Lengkap">
                        </div>

                        <div class="col-sm-4">
                            <label>Nomor Identitas (NIK)<span style="color:red"> *</span></label>
                            <input type="text" name="mother_data[nik]" class="form-control" id="input-10" name="firstname" placeholder="Masukan Nomor NIK">
                        </div>

                        <div class="col-sm-2">
                            <label>Tahun Lahir<span style="color:red"> *</span></label>
                            <select name="mother_data[year_of_birth]" class="form-control" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option>2001</option>
                                <option>2000</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">

                        <div class="col-sm-3">
                            <label>Pendidikan Terakhir<span style="color:red"> *</span></label>
                            <select name="mother_data[education]" class="form-control" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option>SD - Sederajat</option>
                                <option>SMP - Sederajat</option>
                                <option>SMA - Sederajat</option>
                                <option>KULIAH - Sederajat</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <label>Pekerjaan<span style="color:red"> *</span></label>

                            <select name="mother_data[profession]" class="form-control" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option>Buruh</option>
                                <option>Wirausaha</option>
                                <option>Ibu Rumah Tangga</option>
                            </select>

                        </div>
                        <div class="col-sm-3">
                            <label>Pendapatan Perbulan<span style="color:red"> *</span></label>
                            <select name="mother_data[monthly_income]" class="form-control" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option>
                                    < Rp. 500.000</option> <option> > Rp. 500.000
                                </option>
                            </select>
                        </div>


                        <div class="col-sm-3">
                            <label>Disabilitas<span style="color:red"> *</span></label> <br>

                            <div class="radio icheck-info icheck-inline">
                                <input type="radio" id="disability_mother1" value="Ya" name="mother_data[disability]">
                                <label for="disability_mother1">Ya</label>
                            </div>
                            <div class="radio icheck-info icheck-inline">
                                <input type="radio" checked="" id="disability_mother2" value="Tidak" name="mother_data[disability]">
                                <label for="disability_mother2">Tidak</label>
                            </div>
                        </div>
                    </div>

                    <h4 class="form-header text-uppercase">
                        <i class=""></i>
                        Data Wali
                    </h4>

                    <div class="form-group row">

                        <div class="col-sm-6">
                            <label>Nama Wali Murid</label>
                            <input type="text" name="guardian_data[name]" class="form-control" id="input-10" name="firstname" placeholder="Masukan Nama Lengkap">
                        </div>

                        <div class="col-sm-4">
                            <label>Nomor Identitas (NIK)</label>
                            <input type="text" name="guardian_data[nik]" class="form-control" id="input-10" name="firstname" placeholder="Masukan Nomor NIK">
                        </div>

                        <div class="col-sm-2">
                            <label>Tahun Lahir</label>
                            <select name="guardian_data[year_of_birth]" class="form-control" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option>2001</option>
                                <option>2000</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">

                        <div class="col-sm-3">
                            <label>Pendidikan Terakhir</label>
                            <select name="guardian_data[education]" class="form-control" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option>SD - Sederajat</option>
                                <option>SMP - Sederajat</option>
                                <option>SMA - Sederajat</option>
                                <option>KULIAH - Sederajat</option>

                            </select>
                        </div>
                        <div class="col-sm-3">
                            <label>Pekerjaan</label>

                            <select name="guardian_data[profession]" class="form-control" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option>Buruh</option>
                                <option>Wirausaha</option>
                            </select>

                        </div>
                        <div class="col-sm-3">
                            <label>Pendapatan Perbulan</label>
                            <select name="guardian_data[monthly_income]" class="form-control" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option>
                                    < Rp. 500.000</option> <option> > Rp. 500.000
                                </option>
                            </select>
                        </div>


                        <div class="col-sm-3">
                            <label>Disabilitas</label> <br>

                            <div class="radio icheck-info icheck-inline">
                                <input type="radio" id="disability_guardian1" value="Ya" name="guardian_data[disability]">
                                <label for="disability_guardian1">Ya</label>
                            </div>
                            <div class="radio icheck-info icheck-inline">
                                <input type="radio" checked="" value="Tidak" id="disability_guardian2" name="guardian_data[disability]">
                                <label for="disability_guardian2">Tidak</label>
                            </div>
                        </div>
                    </div>

                    <h4 class="form-header text-uppercase">
                        <i class=""></i>
                         informasi Kontak
                    </h4>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label>Provinsi<span style="color:red"> *</span></label>
                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option>Jawa BArat</option>
                                <option>Jawa Timur</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label>Kota/Kabupaten<span style="color:red"> *</span></label>
                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option>Bandung</option>
                                <option>Jakarta</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label>Kecamatan<span style="color:red"> *</span></label>
                            <select name="usr_district_id" class="form-control" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option>Katapang</option>
                                <option>Arjasari</option>
                            </select>
                        </div>

                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Kode Pos<span style="color:red"> *</span></label>
                            <input type="text" name="usr_postal_code" class="form-control" id="input-10" placeholder="Masukan Kode Pos">
                        </div>
                        
                        <div class="col-sm-4">
                            <label>Alamat<span style="color:red"> *</span></label>
                            <input type="text" name="usr_address" class="form-control" id="input-10" placeholder="Masukan Alamat">
                        </div>

                        <div class="col-sm-2">
                            <label>RT<span style="color:red"> *</span></label>
                            <input type="text" name="usr_rt" class="form-control" id="input-10" placeholder="Masukan Nomor RT">
                        </div>

                        <div class="col-sm-2">
                            <label>RW<span style="color:red"> *</span></label>
                            <input type="text" name="usr_rw" class="form-control" id="input-10" placeholder="Masukan Nomor RW">
                        </div>

                        
                    </div>
                    
                    <div class="form-group row">
                        
                        <div class="col-sm-4">
                            <label>kelurahan/Desa<span style="color:red"> *</span></label>
                            <input type="text" name="usr_postal_code" class="form-control" id="input-10" placeholder="Masukan Kode Pos">
                        </div>
                        <div class="col-sm-4">
                            <label>Telepon Rumah</label>
                            <input type="text" name="contact[landline_number]" class="form-control" id="input-10" placeholder="Masukan Nomor Telepon Rumah">
                        </div>

                        <div class="col-sm-4">
                            <label>Email Rumah</label>
                            <input type="text" name="contact[email]" class="form-control" id="input-10" placeholder="Masukan Alamat Email Rumah">
                        </div>

                    </div>

                    <h4 class="form-header text-uppercase">
                        <i class=""></i>
                        Data Periodik
                    </h4>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label>Tinggi Badan<span style="color:red"> *</span></label>
                            <input type="text" name="periodic_data[height]" class="form-control" id="input-10" placeholder="Masukan Tinggi Badan">
                        </div>

                        <div class="col-sm-4">
                            <label>Berat Badan<span style="color:red"> *</span></label>
                            <input name="periodic_data[weight]" type="text" class="form-control" id="input-10" name="firstname" placeholder="Masukan Berat Badan">
                        </div>

                        <div class="col-sm-4">
                            <label>Jarak Ke Sekolah<span style="color:red"> *</span></label>
                            <input type="text" name="periodic_data[distance_to_school]" class="form-control" id="input-10" placeholder="Masukan Jarak Dalam Kilometer">
                        </div>

                    </div>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label>Berapa KM<span style="color:red"> *</span></label>
                            <select name="periodic_data[many_km]" class="form-control" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option value="0,5"> 0,5 KM</option>
                                <option value="1"> 1 KM</option>
                            </select>
                        </div>

                        <div class="col-sm-4">
                            <label>Waktu Tempuh<span style="color:red"> *</span></label>
                            <input type="text" name="periodic_data[travel_time_to_school]" class="form-control" id="input-10" placeholder="Masukan Dalam Satuan Jam/Menit">
                        </div>
                        <div class="col-sm-4">
                            <label>Jumlah Saudara Kandung<span style="color:red"> *</span></label>
                            <input type="text" name="periodic_data[number_of_sibling]" class="form-control" id="input-10" placeholder="Masukan Jumlah Saudara Kandung">
                        </div>

                    </div>

                    <h4 class="form-header text-uppercase">
                        <i class=""></i>
                        Prestasi
                    </h4>
                    <div class="form-group row">

                        <div class="col-sm-3">
                            <label>Jenis</label> <br>

                            <div class="col-md-2 col-sm-4 col-xs-6 demo-col">
                                <div class="icheck-primary">
                                    <input name="achievement[type]" value="Sains" type="checkbox" id="primary1" name="primary" />
                                    <label for="primary1">Sains</label>
                                </div>
                                <div class="icheck-primary">
                                    <input name="achievement[type]" value="Seni" type="checkbox" id="primary2" name="primary" />
                                    <label for="primary2">Seni</label>
                                </div>
                                <div class="icheck-primary">
                                    <input name="achievement[type]" value="Olahraga" type="checkbox" id="primary3" name="primary" />
                                    <label for="primary3">Olahraga</label>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label>Dan lain-lain</label>
                                <input type="text" name="achievement[type]" class="form-control" id="input-10" placeholder="Masukkan jenis prestasi">
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <label>Tingkat</label> <br>

                            <div class="col-md-2 col-sm-4 col-xs-6 demo-col">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="tingkat1" value="Sekolah" name="achievement[achievement_level]" />
                                    <label for="tingkat1">Sekolah</label>
                                </div>
                                <div class="icheck-primary">
                                    <input type="checkbox" id="tingkat2" value="Kecamatan" name="achievement[achievement_level]" />
                                    <label for="tingkat2">Kecamatan</label>
                                </div>
                                <div class="icheck-primary">
                                    <input type="checkbox" id="tingkat3" value="Kabupaten" name="achievement[achievement_level]" />
                                    <label for="tingkat3">Kabupaten</label>
                                </div>
                                <div class="icheck-primary">
                                    <input type="checkbox" id="tingkat4" value="Provinsi" name="achievement[achievement_level]" />
                                    <label for="tingkat4">Provinsi</label>
                                </div>
                                <div class="icheck-primary">
                                    <input type="checkbox" id="tingkat5" value="Nasional" name="achievement[achievement_level]" />
                                    <label for="tingkat5">Nasional</label>
                                </div>
                                <div class="icheck-primary">
                                    <input type="checkbox" id="tingkat6" value="Internasional" name="achievement[achievement_level]" />
                                    <label for="tingkat6">Internasional</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label>Nama Prestasi</label>
                            <input type="text" name="achievement[achievement_name]" class="form-control col-sm-12" id="input-10" placeholder="Nama Prestasi">

                            <label>Tahun</label>
                            <input type="text" name="achievement[year]" class="form-control col-sm-3" id="input-10" placeholder="Tahun">

                            <label>Penyelenggara</label>
                            <input type="text" name="achievement[organizer]" class="form-control col-sm-12" id="input-10" placeholder="Nama Penyelenggara Kegiatan">
                        </div>
                    </div>

                     <h4 class="form-header text-uppercase">
                        <i class="fa fa-image-o"></i>
                        LAINYA
                    </h4>

                    <div class="form-group row">

                        <div class="col-sm-4">
                        <img src="#" class="img-thumbnail" id="tampil_picture" style="object-fit: cover; height: 200px; width: 200px"/> 
                        <input type="file" name="usr_profile_picture" id="preview_gambar" class="img-thumbnail" accept="image/x-png,image/gif,image/jpeg" style="display:none" onchange="document.getElementById('usr_profile_picture').value=this.value" /><br>
                 
                        <button type="button" id="usr_profile_picture" class="btn btn-outline-primary btn-sm waves-effect waves-light m-2" onclick="document.getElementById('preview_gambar').click()">Pilih Gambar</button>

                        </div>
                    </div>

                    <div class="form-footer">
                        <button type="reset" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
                        <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> SAVE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--Start Back To Top Button-->
<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
<!--End Back To Top Button-->

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

<!--Form Validatin Script-->
<script src="{{ asset('assets/plugins/jquery-validation/js/jquery.validate.min.js')}}"></script>
<script>

function bacaGambar(input) {
   if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
          $('#tampil_picture').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
   }
}
$("#preview_gambar").change(function(){
   bacaGambar(this);
});


</script>

<!--Bootstrap Datepicker Js-->
<script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script>
    $('#default-datepicker').datepicker({
        todayHighlight: true
    });
    $('#autoclose-datepicker').datepicker({
        autoclose: true,
        todayHighlight: true
    });

    $('#inline-datepicker').datepicker({
        todayHighlight: true
    });

    $('#dateragne-picker .input-daterange').datepicker({});
</script>
@endpush
@endsection