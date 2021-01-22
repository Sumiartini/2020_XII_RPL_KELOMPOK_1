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
                        Data Calon Siswa
                    </h4>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label>Nama Lengkap<span style="color:red"> *</span></label>
                            <input type="text" class="form-control" id="input-10" name="stu_candidate_name" placeholder="Masukan Nama Lengkap" value="{{ old('stu_candidate_name') }}">

                        </div>

                         <div class="col-sm-4">
                            <label> Jenis Kelamin <span style="color:red"> *</span></label>

                                <select name="usr_gender" class="form-control" id="basic-select" value="{{ old('usr_gender') }}">
                                    <option disabled="" selected=""> Pilih </option>
                                    <option value="Laki-laki"> Laki Laki </option>
                                    <option value="Perempuan"> Perempuan </option>
                                </select>                        
                        </div>

                        <div class="col-sm-4">
                            <label> NISN <span style="color:red"> *</span></label>
                                <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" class="form-control" name="stu_nisn" placeholder="Masukan Nomor NISN" value="{{ old('stu_nisn') }}">
                         </div>

                    </div>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label> Nomor Telepon<span style="color:red"> *</span></label>
                                <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" class="form-control" name="usr_phone_number" placeholder="Masukan Nomor Telepon" value="{{ old('usr_phone_number') }}">
                        </div>
                        <div class="col-sm-4">
                            <label> No. WhatsApp <span style="color:red"> *</span></label>
                                <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" class="form-control" name="usr_whatsapp_number" placeholder="Masukan No. WhatsApp" value="{{ old('usr_whatsapp_number') }}">
                        </div>


                        <div class="col-sm-4">
                             <label> Tempat Lahir <span style="color:red"> *</span></label>
                                <input type="text" name="usr_place_of_birth" class="form-control"  placeholder="Masukan Tempat Lahir" value="{{ old('usr_place_of_birth') }}">
                         </div>

                    </div>


                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label> Tanggal Lahir <span style="color:red"> *</span></label>
                                <input type="text" name="usr_date_of_birth" id="autoclose-datepicker" class="form-control" placeholder="Tanggal-Bulan-Tahun" value="{{ old('usr_date_of_birth') }}">
                        </div>

                        <div class="col-sm-4">
                            <label> No Registrasi Akta Lahir </label>
                                <input type="text" class="form-control" name="personal[birth_certificate_registration_no]" placeholder="Masukan No Registrasi Akta Lahir" value="{{ old('personal.birth_certificate_registration_no') }}">
                        </div>

                        <div class="col-sm-4">
                            <label> Tinggal Bersama <span style="color:red"> *</span></label>
                                <select class="form-control" name="personal[living_together]" id="basic-select" value="{{ old('personal.living_together') }}">
                                    <option disabled="" selected=""> Pilih </option>
                                    <option value="Orang Tua"> Orang Tua </option>
                                    <option value="Wali"> Wali </option>
                                    <option value="Kos"> Kos </option>
                                    <option value="Asrama"> Asrama </option>
                                    <option value="Panti Asuhan"> Panti Asuhan </option>
                                    <option value="Pesantren"> Pesantren </option>
                                </select>
                        </div>

                    </div>

                    
                   <div class="form-group row">
                            <div class="col-sm-4">
                                <label> Asal Sekolah <span style="color:red"> *</span></label>
                                <input type="text" name="stu_school_origin" class="form-control" id="basic-select" placeholder="Masukan Asal Sekolah" value="{{ old('stu_school_origin') }}">
                                
                            </div>

                            <div class="col-sm-4">
                                <label> Jurusan yang diminati <span style="color:red"> *</span></label>
                                <select class="form-control" name="stu_major_id" id="basic-select" value="{{ old('stu_major_id') }}">

                                    <option disabled="" selected=""> Pilih </option>
                                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                    <option value="Multimedia">Multimedia</option>
                                    
                                </select>
                            </div>


                            <div class="col-sm-2">
                                <label> Anak Ke</label>
                                <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" name="personal[child]" class="form-control form-control-rounded @error('personal.child') is-invalid @enderror" placeholder="Anak Ke" value="{{ old('personal.child') }}">
                        
                            </div>

                            <div class="col-sm-2">
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
                            </div>

                        </div>

                        <label>Foto calon siswa<span style="color:red"> *</span></label>    
                        <div class="form-group row">

                            <div class="col-sm-4">
                                <img src="#" class="img-thumbnail" id="tampil_picture" style="object-fit: cover; height: 200px; width: 200px"/> 
                                <input type="file" name="usr_profile_picture" id="preview_gambar" class="img-thumbnail @error('isr_profile_picture') is-invalid @enderror" accept="image/x-png,image/gif,image/jpeg" style="display:none" onchange="document.getElementById('usr_profile_picture').value=this.value" /><br>
           
                                <button type="button" id="usr_profile_picture" class="btn btn-outline-primary btn-sm waves-effect waves-light m-2" onclick="document.getElementById('preview_gambar').click()"> Pilih Gambar </button>
                             
                            </div>

                        </div>



                    
                <h4 class="form-header text-uppercase">
                    <i class=""></i>
                        Data Ayah
                </h4>

                        <div class="form-group row">

                            <div class="col-sm-4">
                                <label> Nama Ayah Kandung <span style="color:red"> *</span></label>
                                <input type="text" name="father_data[name]" class="form-control" placeholder="Masukan Nama Lengkap" value="{{ old('father_data.name') }}">
                                
                            </div>

                            <div class="col-sm-4">
                                <label> Nomor Identitas Kependudukan (NIK) <span style="color:red"> *</span></label>
                                <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" name="father_data[nik]" class="form-control" placeholder="Masukan Nomor NIK" value="{{ old('father_data.nik') }}">
                                
                            </div>

                            <div class="col-sm-4">
                                <label> Tahun Lahir <span style="color:red"> *</span></label>
                                <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" class="form-control" name="father_data[year_of_birth]" id="basic-select" placeholder="Masukan Tahun Lahir" value="{{ old('father_data.year_of_birth') }}">
                                    
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label>Pendidikan Terakhir<span style="color:red"> *</span></label>
                                <select name="father_data[education]" class="form-control" id="basic-select" value="{{ old('father_data.education') }}">
                                    <option disabled="" selected=""> Pilih </option>
                                    <option value="SD - Sederajat"> SD - Sederajat </option>
                                    <option value="SMP - Sederajat"> SMP - Sederajat </option>
                                    <option value="SMA - Sederajat"> SMA - Sederajat </option>
                                    <option value="KULIAH - Sederajat"> KULIAH - Sederajat </option>
                                </select>

                            </div>

                            <div class="col-sm-4">
                                <label>Pekerjaan<span style="color:red"> *</span></label>
                                <select name="father_data[profession]" class="form-control" id="basic-select" value="{{ old('father_data.profession') }}">
                                    <option disabled="" selected="">Pilih</option>
                                    <option value="Buruh"> Buruh </option>
                                    <option value="Wirausaha"> Wirausaha </option>
                                    <option value="Wiraswasta"> Wiraswasta </option>
                                </select>

                            </div>

                            <div class="col-sm-4">
                                <label>Pendapatan Perbulan</label>
                                <select name="father_data[monthly_income]" class="form-control" id="basic-select" value="{{ old('father_data.monthly_income') }}">
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
                                <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" name="father_data[phone_number]" class="form-control" placeholder="Masukan Nomor Telepon" value="{{ old('father_data.phone_number') }}">
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
                                <input type="text" name="mother_data[name]" class="form-control" placeholder="Masukan Nama Lengkap" value="{{ old('mother_data.name') }}">
                            </div>

                            <div class="col-sm-4">
                                <label> Nomor Identitas Kependudukan (NIK) <span style="color:red"> *</span></label>
                                <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" name="mother_data[nik]" class="form-control" placeholder="Masukan Nomor NIK" value="{{ old('mother_data.nik') }}">
                            </div>

                            <div class="col-sm-4">
                                <label> Tahun Lahir <span style="color:red"> *</span></label>
                                <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" name="mother_data[year_of_birth]" class="form-control" id="basic-select" placeholder="Masukan Tahun Lahir" value="{{ old('mother_data.year_of_birth') }}">
                            </div>
                        </div>


                        <div class="form-group row">

                            <div class="col-sm-4">
                                <label>Pendidikan Terakhir<span style="color:red"> *</span></label>
                                <select name="mother_data[education]" class="form-control" id="basic-select" value="{{ old('mother_data.education') }}">
                                    <option disabled="" selected="">Pilih</option>
                                    <option value="SD - Sederajat"> SD - Sederajat </option>
                                    <option value="SMP - Sederajat"> SMP - Sederajat </option>
                                    <option value="SMA - Sederajat"> SMA - Sederajat </option>
                                    <option value="KULIAH - Sederajat"> KULIAH - Sederajat </option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <label> Pekerjaan <span style="color:red"> *</span></label>

                                <select name="mother_data[profession]" class="form-control" id="basic-select" value="{{ old('mother_data.profession') }}">
                                    <option disabled="" selected=""> Pilih </option>
                                    <option value="Buruh"> Buruh </option>
                                    <option value="Wirausaha"> Wirausaha </option>
                                    <option value="Wiraswasta"> Wiraswasta </option>
                                    <option value="Ibu Rumah Tangga"> Ibu Rumah Tangga </option>
                                </select>

                            </div>
                            <div class="col-sm-4">
                                <label>Pendapatan Perbulan</label>
                                <select name="mother_data[monthly_income]" class="form-control" id="basic-select" value="{{ old('mother_data.monthly_income') }}">
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
                        Data Wali
                    </h4>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label>Nama Wali Murid</label>
                            <input type="text" name="guardian_data[name]" class="form-control" id="input-10" name="firstname" placeholder="Masukan Nama Lengkap">
                        </div>

                        <div class="col-sm-4">
                            <label>Nomor Identitas Kependudukan (NIK)</label>
                            <input type="text" name="guardian_data[nik]" class="form-control" id="input-10" name="firstname" placeholder="Masukan Nomor NIK">
                        </div>

                        <div class="col-sm-4">
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
                         Data Persuratan
                    </h4>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label> Provinsi <span style="color:red"> *</span></label>
                                <input type="text" name="prv_name" class="form-control" id="" placeholder="Masukan Provinsi" value="{{ old('prv_name') }}">
                        </div>
                        <div class="col-sm-4">
                            <label> Kota/Kabupaten <span style="color:red"> *</span></label>
                                <input type="text" name="cit_name" class="form-control" id="" placeholder="Masukan Kota/kabupaten" value="{{ old('cit_name') }}">
                        </div>
                        <div class="col-sm-4">
                            <label>Kecamatan<span style="color:red"> *</span></label>
                                <input type="text" name="dst_name" class="form-control" id="" placeholder="Masukan Kecamatan" value="{{ old('dst_name') }}">                                
                        </div>

                    </div>

                    <div class="form-group row">
                        
                        
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

                        <div class="col-sm-4">
                            <label>Desa/Kelurahan<span style="color:red"> *</span></label>
                            <input type="text" name="usr_postal_code" class="form-control" id="input-10" placeholder="Masukan Desa/Kelurahan">
                        </div>

                    </div>
                    
                    <div class="form-group row">
                         <div class="col-sm-4">
                            <label>Kode Pos<span style="color:red"> *</span></label>
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
                        </div>

                        </div>
                    <div class="form-footer">
                        <button type="reset" class="btn btn-danger"><i class="fa fa-times"></i> BATAL</button>
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