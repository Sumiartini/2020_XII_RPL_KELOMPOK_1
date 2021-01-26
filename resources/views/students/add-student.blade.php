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
            <li class="breadcrumb-item active" aria-current="page">Tambah Siswa</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form id="submitForm" autocomplete="off" method="POST" action="{{ url('student/create') }}" novalidate="novalidate" enctype="multipart/form-data">
                    @csrf
                    <h4 class="form-header text-uppercase">
                        <i class="  "></i>
                        Data Akun
                    </h4>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label> Nama Akun <span style="color:red"> *</span></label>
                            <input type="text" class="form-control form-control-rounded @error('usr_name') is-invalid @enderror" name="usr_name" placeholder="Masukan Nama Akun" value="{{ old('usr_name') }}">
                            @error('usr_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                         <div class="col-sm-4">
                            <label>Alamat Email<span style="color:red"> *</span></label>
                            <input type="email" class="form-control form-control-rounded @error('usr_email') is-invalid @enderror" name="usr_email" placeholder="Masukan Alamat Email" value="{{ old('usr_email') }}">
                            @error('usr_email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror                       
                        </div>
                        <div class="col-sm-4">
                            <label>Nomor Telepon<span style="color:red"> *</span></label>
                            <input type="text" class="form-control form-control-rounded @error('usr_phone_number') is-invalid @enderror" name="usr_phone_number" placeholder="Masukan Nomor Telepon" value="{{ old('usr_phone_number') }}">
                            @error('usr_phone_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">

                        <div class="col-sm-6">
                            <label>Kata Sandi<span style="color:red"> *</span></label>
                            <input type="password" class="form-control form-control-rounded @error('usr_password') is-invalid @enderror" name="usr_password" placeholder="Masukan Kata Sandi" value="{{ old('usr_password') }}">
                            @error('usr_password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <label>Ulangi Kata Sandi<span style="color:red"> *</span></label>
                            <input type="password" class="form-control form-control-rounded @error('usr_retype_password') is-invalid @enderror" name="usr_retype_password" placeholder="Ulangi Kata Sandi" value="{{ old('usr_retype_password') }}">
                            @error('usr_retype_password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>


                    <h4 class="form-header text-uppercase">
                        <i class="  "></i>
                        Data Siswa
                    </h4>

                    <div class="form-group row">

                        <div class="col-sm-4">
                                <label> Nama Lengkap <span style="color:red"> *</span></label>
                                <input type="text" class="form-control form-control-rounded @error('stu_candidate_name') is-invalid @enderror" name="stu_candidate_name" placeholder="Masukan Nama Lengkap" value="{{ old('stu_candidate_name') }}">
                                @error('stu_candidate_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <p style="font-size: 12px;"> Sesuaikan dengan nama di ijazah SD/SMP </p>
                            </div>

                         <div class="col-sm-4">
                                <label> Jenis Kelamin <span style="color:red"> *</span></label>

                                <select name="usr_gender" class="form-control form-control-rounded @error('usr_gender') is-invalid @enderror" id="basic-select" value="{{ old('usr_gender') }}">
                                    <option disabled="" selected=""> Pilih </option>
                                    <option value="Laki-laki"> Laki Laki </option>
                                    <option value="Perempuan"> Perempuan </option>
                                </select>
                                @error('usr_gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>

                        <div class="col-sm-4">
                                <label> NISN <span style="color:red"> *</span></label>
                                <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" class="form-control form-control-rounded @error('stu_nisn') is-invalid @enderror" name="stu_nisn" placeholder="Masukan Nomor NISN" value="{{ old('stu_nisn') }}">
                                @error('stu_nisn')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                    </div>

                    <div class="form-group row">

                        
                         <div class="col-sm-4">
                                <label> No. WhatsApp <span style="color:red"> *</span></label>
                                <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" class="form-control form-control-rounded @error('usr_whatsapp_number') is-invalid @enderror" name="usr_whatsapp_number" placeholder="Masukan No. WhatsApp" value="{{ old('usr_whatsapp_number') }}">
                                @error('usr_whatsapp_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                        <div class="col-sm-4">
                                <label> Tempat Lahir <span style="color:red"> *</span></label>
                                <input type="text" name="usr_place_of_birth" class="form-control form-control-rounded @error('usr_place_of_birth') is-invalid @enderror" placeholder="Masukan Tempat Lahir" value="{{ old('usr_place_of_birth') }}">
                                @error('usr_place_of_birth')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-sm-4">
                               <label> Tanggal Lahir <span style="color:red"> *</span></label>
                                <input type="text" name="usr_date_of_birth" id="autoclose-datepicker" class="form-control form-control-rounded @error('usr_date_of_birth') is-invalid @enderror" placeholder="Tanggal-Bulan-Tahun" value="{{ old('usr_date_of_birth') }}">
                                @error('usr_date_of_birth')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                    </div>


                    <div class="form-group row">

                        <div class="col-sm-4">
                                <label> No Registrasi Akta Lahir </label>
                                <input type="text" class="form-control form-control-rounded" name="personal[birth_certificate_registration_no]" placeholder="Masukan No Registrasi Akta Lahir" value="{{ old('personal.birth_certificate_registration_no') }}">
                                @error('personal.birth_certificate_registration_no')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                       <div class="col-sm-4">
                                <label> Tinggal Bersama <span style="color:red"> *</span></label>
                                <select class="form-control form-control-rounded @error('personal.living_together') is-invalid @enderror" name="personal[living_together]" id="basic-select" value="{{ old('personal.living_together') }}">
                                    <option disabled="" selected=""> Pilih </option>
                                    <option value="Orang Tua"> Orang Tua </option>
                                    <option value="Wali"> Wali </option>
                                    <option value="Kos"> Kos </option>
                                    <option value="Asrama"> Asrama </option>
                                    <option value="Panti Asuhan"> Panti Asuhan </option>
                                    <option value="Pesantren"> Pesantren </option>
                                </select>
                                @error('personal.living_together')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                          <div class="col-sm-4">
                                <label> Asal Sekolah <span style="color:red"> *</span></label>
                                <input type="text" name="stu_school_origin" class="form-control form-control-rounded @error('stu_school_origin') is-invalid @enderror" id="basic-select" placeholder="Masukan Asal Sekolah" value="{{ old('stu_school_origin') }}">
                                @error('stu_school_origin')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                    </div>

                    
                   <div class="form-group row">
                           

                           <div class="col-sm-4">
                                <label> Jurusan yang diminati <span style="color:red"> *</span></label>
                                <select class="form-control form-control-rounded @error('stu_major_id') is-invalid @enderror" name="stu_major_id" id="basic-select" value="{{ old('stu_major_id') }}">

                                <option disabled="" selected=""> Pilih </option>
                                @foreach($majors as $major)
                                <option value="{{ $major->mjr_id }}">{{ $major->mjr_name }}</option>
                                @endforeach

                                </select>
                                @error('stu_major_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                            <div class="col-sm-4">
                                <label> Anak Ke</label>
                                <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" name="personal[child]" class="form-control form-control-rounded @error('personal.child') is-invalid @enderror" placeholder="Anak Ke" value="{{ old('personal.child') }}">
                                @error('personal.child')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                             <div class="col-sm-4">
                                <label> Agama <span style="color:red"> *</span></label>
                                <select class="form-control form-control-rounded @error('usr_religion') is-invalid @enderror" name="usr_religion" id="basic-select" value="{{ old('usr_religion') }}">
                                    <option disabled="" selected=""> Pilih </option>
                                    <option value="Islam"> Islam </option>
                                    <option value="Protestan"> Protestan </option>
                                    <option value="Katolik"> Katolik </option>
                                    <option value="Hindu"> Hindu </option>
                                    <option value="Budha"> Budha </option>
                                    <option value="Khonghucu"> Khonghucu </option>
                                </select>
                                @error('usr_religion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <label>Foto calon siswa </label>
                        <div class="form-group row">

                            <div class="col-sm-4">
                                <img src="#" class="img-thumbnail" id="tampil_picture" style="object-fit: cover; height: 200px; width: 200px"/> 
                                <input type="file" name="usr_profile_picture" id="preview_gambar" class="img-thumbnail @error('isr_profile_picture') is-invalid @enderror" accept="image/x-png,image/gif,image/jpeg" style="display:none" onchange="document.getElementById('usr_profile_picture').value=this.value" /><br>
           
                                <button type="button" id="usr_profile_picture" class="btn btn-outline-primary btn-sm waves-effect waves-light m-2" onclick="document.getElementById('preview_gambar').click()"> Pilih Gambar </button>
                                @error('usr_profile_picture')
                                   <p>
                                        <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                                   </p>
                                @enderror
                            </div>

                        </div>

                        <h4 class="form-header text-uppercase">
                            <i class=""></i>
                            Data Ayah
                        </h4>

                        <div class="form-group row">

                            <div class="col-sm-4">
                                <label> Nama Ayah Kandung <span style="color:red"> *</span></label>
                                <input type="text" name="father_data[name]" class="form-control form-control-rounded @error('father_data.name') is-invalid @enderror" placeholder="Masukan Nama Lengkap" value="{{ old('father_data.name') }}">
                                @error('father_data.name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-sm-4">
                                <label> Nomor Identitas Kependudukan (NIK) <span style="color:red"> *</span></label>
                                <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" name="father_data[nik]" class="form-control form-control-rounded @error('father_data.nik') is-invalid @enderror" placeholder="Masukan Nomor NIK" value="{{ old('father_data.nik') }}">
                                @error('father_data.nik')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-sm-4">
                                <label> Tahun Lahir <span style="color:red"> *</span></label>
                                <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" class="form-control form-control-rounded @error('father_data.year_of_birth') is-invalid @enderror" name="father_data[year_of_birth]" id="basic-select" placeholder="Masukan Tahun Lahir" value="{{ old('father_data.year_of_birth') }}">
                                    
                                @error('father_data.year_of_birth')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label>Pendidikan Terakhir<span style="color:red"> *</span></label>
                                <select name="father_data[education]" class="form-control form-control-rounded @error('father_data.education') is-invalid @enderror" id="basic-select" value="{{ old('father_data.education') }}">
                                    <option disabled="" selected=""> Pilih </option>
                                    <option value="SD - Sederajat"> SD - Sederajat </option>
                                    <option value="SMP - Sederajat"> SMP - Sederajat </option>
                                    <option value="SMA - Sederajat"> SMA - Sederajat </option>
                                    <option value="KULIAH - Sederajat"> KULIAH - Sederajat </option>
                                </select>
                                @error('father_data.education')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>

                            <div class="col-sm-4">
                                <label>Pekerjaan<span style="color:red"> *</span></label>
                                <select name="father_data[profession]" class="form-control form-control-rounded @error('father_data.profession') is-invalid @enderror" id="basic-select" value="{{ old('father_data.profession') }}">
                                    <option disabled="" selected="">Pilih</option>
                                    <option value="Buruh"> Buruh </option>
                                    <option value="Wirausaha"> Wirausaha </option>
                                    <option value="Wiraswasta"> Wiraswasta </option>
                                </select>
                                @error('father_data.profession')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                            <div class="col-sm-4">
                                <label>Pendapatan Perbulan</label>
                                <select name="father_data[monthly_income]" class="form-control form-control-rounded @error('father_data.monthly_income') is-invalid @enderror" id="basic-select" value="{{ old('father_data.monthly_income') }}">
                                    <option value="" selected="">Pilih</option>
                                    <option value="kurang dari Rp. 500.000"> kurang dari Rp. 500.000 </option>
                                    <option value="Rp. 500.000 - Rp.1.000.000"> Rp. 500.000 - Rp.1.000.000 </option> 
                                    <option value="Rp. 1.000.000 - Rp. 2.000.000"> Rp. 1.000.000 - Rp. 2.000.000 </option>
                                    <option value="Rp. 2.000.000 - Rp. 3.000.000"> Rp. 2.000.000 - Rp. 3.000.000 </option>
                                    <option value="Rp. 3.000.000 - Rp. 4.000.000"> Rp. 3.000.000 - Rp. 4.000.000 </option>
                                    <option value="lebih dari Rp. 4.000.000"> lebih dari Rp. 4.000.000 </option>
                                </select>
                               
                            </div>
                        </div>

                        <div class="form-group row">


                                
                            <div class="col-sm-4">
                                <label> Nomor Telepon <span style="color:red"> *</span></label>
                                <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" name="father_data[phone_number]" class="form-control form-control-rounded @error('father_data.phone_number') is-invalid @enderror" placeholder="Masukan Nomor Telepon" value="{{ old('father_data.phone_number') }}">
                                @error('father_data.phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                            <div class="col-sm-4">
                                <label> Disabilitas <span style="color:red"> *</span></label> <br>

                                <div class="radio icheck-info icheck-inline">
                                    <input type="radio" id="disability_father1" value="Ya" name="father_data[disability]">
                                    <label for="disability_father1"> Ya </label>
                                </div>
                                <div class="radio icheck-info icheck-inline">
                                    <input type="radio" checked="" id="disability_father2" value="Tidak" name="father_data[disability]">
                                    <label for="disability_father2"> Tidak </label>
                                </div>
                            </div>
                        </div>

                        <h4 class="form-header text-uppercase">
                            <i class=""></i>
                            Data Ibu
                        </h4>

                        <div class="form-group row">

                            <div class="col-sm-4">
                                <label> Nama Ibu Kandung <span style="color:red"> *</span></label>
                                <input type="text" name="mother_data[name]" class="form-control form-control-rounded @error('mother_data.name') is-invalid @enderror" placeholder="Masukan Nama Lengkap" value="{{ old('mother_data.name') }}">
                                @error('mother_data.name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-sm-4">
                                <label> Nomor Identitas Kependudukan (NIK) <span style="color:red"> *</span></label>
                                <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" name="mother_data[nik]" class="form-control form-control-rounded @error('mother_data.nik') is-invalid @enderror" placeholder="Masukan Nomor NIK" value="{{ old('mother_data.nik') }}">
                                @error('mother_data.nik')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-sm-4">
                                <label> Tahun Lahir <span style="color:red"> *</span></label>
                                <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" name="mother_data[year_of_birth]" class="form-control form-control-rounded @error('mother_data.year_of_birth') is-invalid @enderror" id="basic-select" placeholder="Masukan Tahun Lahir" value="{{ old('mother_data.year_of_birth') }}">
                                    
                                @error('mother_data.year_of_birth')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">

                            <div class="col-sm-4">
                                <label>Pendidikan Terakhir<span style="color:red"> *</span></label>
                                <select name="mother_data[education]" class="form-control form-control-rounded @error('mother_data.education') is-invalid @enderror" id="basic-select" value="{{ old('mother_data.education') }}">
                                    <option disabled="" selected="">Pilih</option>
                                    <option value="SD - Sederajat"> SD - Sederajat </option>
                                    <option value="SMP - Sederajat"> SMP - Sederajat </option>
                                    <option value="SMA - Sederajat"> SMA - Sederajat </option>
                                    <option value="KULIAH - Sederajat"> KULIAH - Sederajat </option>
                                </select>
                                @error('mother_data.education')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-sm-4">
                                <label> Pekerjaan <span style="color:red"> *</span></label>

                                <select name="mother_data[profession]" class="form-control form-control-rounded @error('mother_data.profession') is-invalid @enderror" id="basic-select" value="{{ old('mother_data.profession') }}">
                                    <option disabled="" selected=""> Pilih </option>
                                    <option value="Buruh"> Buruh </option>
                                    <option value="Wirausaha"> Wirausaha </option>
                                    <option value="Wiraswasta"> Wiraswasta </option>
                                    <option value="Ibu Rumah Tangga"> Ibu Rumah Tangga </option>
                                </select>
                                @error('mother_data.profession')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                            <div class="col-sm-4">
                                <label>Pendapatan Perbulan</label>
                                <select name="mother_data[monthly_income]" class="form-control form-control-rounded @error('mother_data.monthly_income') is-invalid @enderror" id="basic-select" value="{{ old('mother_data.monthly_income') }}">
                                    <option value="" selected="">Pilih</option>
                                    <option value="kurang dari Rp. 500.000"> kurang dari Rp. 500.000 </option>
                                    <option value="Rp. 500.000 - Rp.1.000.000"> Rp. 500.000 - Rp.1.000.000 </option> 
                                    <option value="Rp. 1.000.000 - Rp. 2.000.000"> Rp. 1.000.000 - Rp. 2.000.000 </option>
                                    <option value="Rp. 2.000.000 - Rp. 3.000.000"> Rp. 2.000.000 - Rp. 3.000.000 </option>
                                    <option value="Rp. 3.000.000 - Rp. 4.000.000"> Rp. 3.000.000 - Rp. 4.000.000 </option>
                                    <option value="lebih dari Rp. 4.000.000"> lebih dari Rp. 4.000.000 </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label> Nomor Telepon <span style="color:red"> *</span></label>
                                <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" name="mother_data[phone_number]" class="form-control form-control-rounded @error('mother_data.phone_number') is-invalid @enderror" placeholder="Masukan Nomor Telepon" value="{{ old('mother_data.phone_number') }}">
                                @error('mother_data.phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-sm-4">
                                <label> Disabilitas <span style="color:red"> *</span></label> <br>

                                <div class="radio icheck-info icheck-inline">
                                    <input type="radio" id="disability_mother1" value="Ya" name="mother_data[disability]">
                                    <label for="disability_mother1"> Ya </label>
                                </div>

                                <div class="radio icheck-info icheck-inline">
                                    <input type="radio" checked="" id="disability_mother2" value="Tidak" name="mother_data[disability]">
                                    <label for="disability_mother2"> Tidak </label>

                                </div>
                            </div>
                        </div>

                        <h4 class="form-header text-uppercase">
                            <i class=""></i>
                            Data Wali (Boleh diisi boleh tidak)
                        </h4>
                           

                        <div class="form-group row">

                            <div class="col-sm-4">
                                <label> Nama Lengkap </label>
                                <input type="text" name="guardian_data[name]" class="form-control form-control-rounded @error('guardian_data[name]') is-invalid @enderror" name="firstname" placeholder="Masukan Nama Lengkap" value="{{ old('guardian_data[name]') }}">
                                @error('guardian_data[name]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-sm-4">
                                <label> Nomor Identitas Kependudukan (NIK) </label>
                                <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" name="guardian_data[nik]" class="form-control form-control-rounded @error('guardian_data.nik') is-invalid @enderror" name="firstname" placeholder="Masukan Nomor NIK" value="{{ old('guardian_data.nik') }}">
                                @error('guardian_data.nik')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-sm-4">
                                <label> Tahun Lahir </label>
                                <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" name="guardian_data[year_of_birth]" class="form-control form-control-rounded @error('guardian_data.year_of_birth') is-invalid @enderror" id="basic-select" placeholder="Masukan Tahun Lahir" value="{{ old('guardian_data.year_of_birth') }}">
                                
                                @error('guardian_data.year_of_birth')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">

                            <div class="col-sm-4">
                                <label>Pendidikan Terakhir</label>
                                <select name="guardian_data[education]" class="form-control form-control-rounded @error('guardian_data.education') is-invalid @enderror" id="basic-select" value="{{ old('guardian_data.education') }}"> 
                                    <option value="" selected="">Pilih</option>
                                    <option value="SD - Sederajat"> SD - Sederajat </option>
                                    <option value="SMP - Sederajat"> SMP - Sederajat </option>
                                    <option value="SMA - Sederajat"> SMA - Sederajat </option>
                                    <option value="KULIAH - Sederajat"> KULIAH - Sederajat </option>
                                </select>
                                @error('guardian_data.education')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-sm-4">
                                <label> Pekerjaan </label>
                                <select name="guardian_data[profession]" class="form-control form-control-rounded @error('guardian_data.profession') is-invalid @enderror" id="basic-select" value="{{ old('guardian_data.profession') }}">
                                    <option value="" selected=""> Pilih </option>
                                    <option value="Buruh"> Buruh </option>
                                    <option value="Wirausaha"> Wirausaha </option>
                                    <option value="Wiraswasta"> Wiraswasta </option>
                                    <option value="Ibu Rumah Tangga"> Ibu Rumah Tangga </option>
                                </select>
                                @error('guardian_data.profession')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-sm-4">
                                <label>Pendapatan Perbulan</label>
                                <select name="guardian_data[monthly_income]" class="form-control form-control-rounded @error('guardian_data.monthly_income') is-invalid @enderror" id="basic-select" value="{{ old('guardian_data.monthly_income') }}">
                                    <option value="" selected="">Pilih</option>
                                    <option value="" value="kurang dari Rp. 500.000"> kurang dari Rp. 500.000 </option>
                                    <option value="Rp. 500.000 - Rp.1.000.000"> Rp. 500.000 - Rp.1.000.000 </option> 
                                    <option value="Rp. 1.000.000 - Rp. 2.000.000"> Rp. 1.000.000 - Rp. 2.000.000 </option>
                                    <option value="Rp. 2.000.000 - Rp. 3.000.000"> Rp. 2.000.000 - Rp. 3.000.000 </option>
                                    <option value="Rp. 3.000.000 - Rp. 4.000.000"> Rp. 3.000.000 - Rp. 4.000.000 </option>
                                    <option value="lebih dari Rp. 4.000.000"> lebih dari Rp. 4.000.000 </option>
                                </select>
                                @error('guardian_data.monthly_income')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label> Nomor Telepon</label>
                                <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" name="guardian_data[phone_number]" class="form-control form-control-rounded @error('guardian_data.phone_number') is-invalid @enderror" placeholder="Masukan Nomor Telepon" value="{{ old('guardian_data.phone_number') }}">
                                @error('guardian_data.phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-sm-4">
                                <label> Disabilitas </label> <br>

                                <div class="radio icheck-info icheck-inline">
                                    <input type="radio" id="disability_guardian1" value="Ya" name="guardian_data[disability]">
                                    <label for="disability_guardian1"> Ya </label>
                                </div>
                                <div class="radio icheck-info icheck-inline">
                                    <input type="radio" checked="" value="Tidak" id="disability_guardian2" name="guardian_data[disability]">
                                    <label for="disability_guardian2"> Tidak </label>

                                </div>
                            </div>
                        </div>

                        <h4 class="form-header text-uppercase">
                            <i class=""></i>
                           Data Persuratan
                        </h4>

                        <div class="form-group row">

                            <div class="col-sm-4">
                                <label> Provinsi <span style="color:red"> *</span></label>
                                <input type="text" name="prv_name" class="form-control form-control-rounded @error('prv_name') is-invalid @enderror" id="" placeholder="Masukan Provinsi" value="{{ old('prv_name') }}">
                                @error('prv_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-sm-4">
                                <label> Kota/Kabupaten <span style="color:red"> *</span></label>
                                <input type="text" name="cit_name" class="form-control form-control-rounded @error('cit_name') is-invalid @enderror" id="" placeholder="Masukan Kota/kabupaten" value="{{ old('cit_name') }}">
                                @error('cit_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-sm-4">
                                <label>Kecamatan<span style="color:red"> *</span></label>
                                <input type="text" name="dst_name" class="form-control form-control-rounded @error('dst_name') is-invalid @enderror" id="" placeholder="Masukan Kecamatan" value="{{ old('dst_name') }}">
                                @error('dst_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-sm-4">
                                <label> Alamat <span style="color:red"> *</span></label>
                                <input type="text" name="usr_address" class="form-control form-control-rounded @error('usr_address') is-invalid @enderror" placeholder="Masukan Alamat" value="{{ old('usr_address') }}">
                                @error('usr_address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-sm-2">
                                <label> RT <span style="color:red"> *</span></label>
                                <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" name="usr_rt" class="form-control form-control-rounded @error('usr_rt') is-invalid @enderror" placeholder="Masukan Nomor RT" value="{{ old('usr_rt') }}">
                                @error('usr_rt')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-sm-2">
                                <label> RW <span style="color:red"> *</span></label>
                                <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" name="usr_rw" class="form-control form-control-rounded @error('usr_rw') is-invalid @enderror" placeholder="Masukan Nomor RW" value="{{ old('usr_rw') }}">
                                @error('usr_rw')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-sm-4">
                                 <label>Desa/Kelurahan<span style="color:red"> *</span></label>
                               <input type="text" name="usr_rural_name" class="form-control form-control-rounded @error('usr_rural_name') is-invalid @enderror" placeholder="Masukan Desa/Kelularah" value="{{ old('usr_rural_name') }}">
                                @error('usr_rural_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <div class="col-sm-4">
                                <label> Kode Pos <span style="color:red"> *</span></label>
                                <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" name="usr_postal_code" class="form-control form-control-rounded @error('usr_postal_code') is-invalid @enderror" placeholder="Masukan Kode Pos" value="{{ old('usr_postal_code') }}">
                                @error('usr_postal_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-sm-4">
                                <label> Telepon Rumah </label>
                                <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" name="contact[landline_number]" class="form-control form-control-rounded @error('contact.landline_number') is-invalid @enderror" placeholder="Masukan Nomor Telepon Rumah" value="{{ old('contact.landline_number') }}">
                                @error('contact.landline_number]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-sm-4">
                                <label> Email <span style="color:red"> *</span> </label>
                                <input type="text" name="contact[email]" class="form-control form-control-rounded @error('contact.email') is-invalid @enderror" placeholder="Masukan Alamat Email" value="{{ old('contact.email') }}">
                                 @error('contact.email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                <p style="font-size: 12px;">Email anggota keluarga yang aktif </p>
                                @enderror
                            </div>


                        </div>

                        <h4 class="form-header text-uppercase">
                            <i class=""></i>
                            Prestasi Siswa (Boleh diisi boleh tidak)
                        </h4>
                        <div class="form-group row">

                            <div class="col-sm-4">
                                <label> Jenis </label>

                                <div class="radio icheck-info">
                                    <input type="radio" id="achievementType1" value="Sains" name="achievement[type]">
                                    <label for="achievementType1"> Sains </label>
                                </div>
                                <div class="radio icheck-info">
                                    <input type="radio" id="achievementType2" value="Seni" name="achievement[type]">
                                    <label for="achievementType2"> Seni </label>
                                </div>
                                <div class="radio icheck-info">
                                    <input type="radio" id="achievementType3" value="Olahraga" name="achievement[type]">
                                    <label for="achievementType3"> Olahraga </label>
                                </div>
                                <div class="radio icheck-info">
                                    <input type="radio" checked="" id="achievementType4" value="" name="achievement[type]">
                                    <label for="achievementType4"> Tidak ada </label>
                                </div>
                            </div>

                             <div class="col-sm-4">
                                <label> Tingkat</label>

                                <div class="radio icheck-info">
                                    <input type="radio" id="achievementLevel1" value="Sekolah" name="achievement[achievement_level]">
                                    <label for="achievementLevel1"> Sekolah </label>
                                </div>
                                <div class="radio icheck-info">
                                    <input type="radio" id="achievementLevel2" value="Kecamatan" name="achievement[achievement_level]">
                                    <label for="achievementLevel2"> Kecamatan </label>
                                </div>
                                <div class="radio icheck-info">
                                    <input type="radio" id="achievementLevel3" value="Kabupaten" name="achievement[achievement_level]">
                                    <label for="achievementLevel3"> Kabupaten </label>
                                </div>
                                <div class="radio icheck-info">
                                    <input type="radio" checked="" id="achievementLevel4" value="Provinsi" name="achievement[achievement_level]">
                                    <label for="achievementLevel4"> Provinsi </label>
                                </div>

                                 <div class="radio icheck-info">
                                    <input type="radio" id="achievementLevel5" value="Nasional" name="achievement[achievement_level]">
                                    <label for="achievementLevel5"> Nasional </label>
                                </div>

                                 <div class="radio icheck-info">
                                    <input type="radio" id="achievementLevel6" value="Internasioanl" name="achievement[achievement_level]">
                                    <label for="achievementLevel6"> Internasional </label>
                                </div>

                                 <div class="radio icheck-info">
                                    <input type="radio" checked="" id="achievementLevel7" value="" name="achievement[achievement_level]">
                                    <label for="achievementLevel7"> Tidak ada </label>
                                </div>
                                
                            </div>

                            <div class="col-sm-4">
                                <div>
                                <label> Nama Prestasi </label>
                                <input type="text" name="achievement[achievement_name]" class="form-control form-control-rounded" placeholder="Masukan Nama Prestasi" value="{{ old('achievement.achievement_name') }}">
                                </div>

                                <div>
                                <label> Tahun </label>
                                <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" name="achievement[year]" class="form-control form-control-rounded" placeholder="Masukan Tahun" value="{{ old('achievement.year') }}">
                                </div>
                                
                                <div>
                                <label> Penyelenggara </label>
                                <input type="text" name="achievement[organizer]" class="form-control form-control-rounded" placeholder="Masukan Nama Penyelenggara Kegiatan" value="{{ old('achievement.organizer') }}">

                               </div>
                            </div>
                        </div>

                        <h4 class="form-header text-uppercase">
                            <i class=""></i>
                            Lainnya
                        </h4>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label>Rekomendasi dari</label>
                                <select name="other[recomended_from]" class="form-control form-control-rounded @error('other.recomended_from') is-invalid @enderror" id="basic-select" value="{{ old('other.recomended_from') }}">
                                    <option value="" selected=""> Pilih </option>
                                    <option value="Iklan"> Iklan (Poster, Banner, Dll) </option>
                                    <option value="Sosmed"> Sosmed (IG, FB, YT, dll) </option>
                                    <option value="Saudara"> Saudara </option>
                                    <option value="Tetangga"> Tetangga </option>
                                    <option value="Siswa/i Mahaputra"> Siswa/i Mahaputra </option>
                                </select>
                                @error('')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-sm-4">
                                <label>Jalur  <span style="color:red"> *</span></label>
                                <select name="stu_entry_type_id" class="form-control form-control-rounded @error('stu_entry_type_id') is-invalid @enderror" id="basic-select" value="{{ old('stu_entry_type_id') }}">
                                
                                <option disabled="" selected=""> Pilih </option>
                                @foreach($entry_types as $entry_type)
                                <option value="{{ $entry_type->ent_id }}">{{ $entry_type->ent_name }}</option>
                                @endforeach
                                </select>

                                @error('stu_entry_type_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                        </div>
                    <div class="form-footer">
                        <button id="btnSubmit" type="reset" class="btn btn-danger"><i class="fa fa-times"></i> BATAL</button>
                        <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> SIMPAN</button>
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
    $(document).ready(function() {
        $("#submitForm").submit(function(e) {
            $(this).find("button[type='submit']").prop('disabled', true);
            $("#btnSubmit").attr("disabled", true);
            return true;
        });      
    });
</script>

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
        todayHighlight: true,
        format: "yyyy-mm-dd"
    });

    $('#inline-datepicker').datepicker({
        todayHighlight: true
    });

    $('#dateragne-picker .input-daterange').datepicker({});
</script>

@endpush
@endsection