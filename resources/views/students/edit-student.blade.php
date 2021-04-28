@extends('layouts.master')

@push('title')
- Edit Siswa
@endpush

@push('styles')

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
<!-- select2 -->
<link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
@endpush

@section('content')

<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">Edit Siswa</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">{{ env('APP_NAME') }}</a></li>
            <li class="breadcrumb-item"><a href="{{ url('students')}}">Kelola Siswa</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Siswa</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form id="form-validate" autocomplete="off" method="POST" action="{{ url('student/edit/'.$student_edit->stu_id) }}" novalidate="novalidate" enctype="multipart/form-data">
                    @csrf
                    <h4 class="form-header text-uppercase">
                        <i class="  "></i>
                        Data Akun
                    </h4>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label>Nama<span style="color:red"> *</span></label>
                            <input type="text" class="form-control form-control-rounded" name="usr_name" placeholder="Masukan Nama" value="{{$student_edit->usr_name}}">
                        </div>
                        <div class="col-sm-4">
                            <label>Email<span style="color:red"> *</span></label>
                            <input type="email" readonly="" class="form-control form-control-rounded" name="usr_email" placeholder="Masukan Email" value="{{$student_edit->usr_email}}">                        
                        </div>
                    </div>


                    <h4 class="form-header text-uppercase">
                        <i class="  "></i>
                        Data Siswa
                    </h4>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label>Nama Lengkap<span style="color:red"> *</span></label>
                            <input type="text" class="form-control form-control-rounded" id="input-10" name="stu_candidate_name" placeholder="Masukan Nama Lengkap" value="{{$student_edit->stu_candidate_name}}">

                        </div>

                        <div class="col-sm-4">
                            <label> Jenis Kelamin <span style="color:red"> *</span></label>

                            <select name="usr_gender" class="form-control form-control-rounded">
                                <option value="{{$student_edit->usr_gender}}" selected=""> {{$student_edit->usr_gender}} </option>
                                <option value="Laki-laki"> Laki Laki </option>
                                <option value="Perempuan"> Perempuan </option>
                            </select>                        
                        </div>

                        <div class="col-sm-4">
                            <label> Nomor Identitas Kependudukan (NIK) <span style="color:red"> *</span></label>
                            <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" name="personal[nik]" class="form-control form-control-rounded @error('personal.nik') is-invalid @enderror" placeholder="Masukan Nomor NIK" value="@if(isset($student_edit->personal['nik'])){{$student_edit->personal['nik']}}@endif">
                            @error('personal.nik')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <p style="font-size: 12px;"> Sesuaikan dengan kartu keluarga </p>
                        </div>

                    </div>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label> NISN <span style="color:red"> *</span></label>
                            <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" class="form-control form-control-rounded" name="stu_nisn" placeholder="Masukan Nomor NISN" value="{{$student_edit->stu_nisn}}">
                        </div>

                        <div class="col-sm-4">
                            <label> Nomor Telepon<span style="color:red"> *</span></label>
                            <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" class="form-control form-control-rounded" name="usr_phone_number" placeholder="Masukan Nomor Telepon" value="{{$student_edit->usr_phone_number}}">
                        </div>
                        <div class="col-sm-4">
                            <label> No. WhatsApp <span style="color:red"> *</span></label>
                            <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" class="form-control form-control-rounded" name="usr_whatsapp_number" placeholder="Masukan No. WhatsApp" value="{{$student_edit->usr_whatsapp_number}}">
                        </div>

                 </div>


                 <div class="form-group row">

                    <div class="col-sm-4">
                         <label> Tempat Lahir <span style="color:red"> *</span></label>
                         <input type="text" name="usr_place_of_birth" class="form-control form-control-rounded"  placeholder="Masukan Tempat Lahir" value="{{$student_edit->usr_place_of_birth}}">
                    </div>

                    <div class="col-sm-4">
                        <label> Tanggal Lahir <span style="color:red"> *</span></label>
                        <input id="autoclose-datepicker" type="text" placeholder="Masukan Tanggal Lahir" value="{{$student_edit->usr_date_of_birth}}" name="usr_date_of_birth" class="form-control form-control-rounded" id="input-11">
                    </div>

                    <div class="col-sm-4">
                        <label> No Registrasi Akta Lahir </label>
                        
                        <input type="text" class="form-control form-control-rounded" name="personal[birth_certificate_registration_no]" 
                        placeholder="Masukan No Registrasi Akta Lahir" value="@if(isset($student_edit->personal['birth_certificate_registration_no'])){{$student_edit->personal['birth_certificate_registration_no']}}@endif">
                    </div>

                </div>  


                <div class="form-group row">

                    <div class="col-sm-4">
                        <label> Tinggal Bersama <span style="color:red"> *</span></label>
                        <select class="form-control form-control-rounded" name="personal[living_together]" value="">          
                            @if(isset($student_edit->personal['living_together']))                  
                            <option value="{{$student_edit->personal['living_together']}}" selected="">{{$student_edit->personal['living_together']}}</option>
                            @else
                            <option value="" disabled="" selected=""> Pilih </option>
                            @endif
                            <option value="Orang Tua"> Orang Tua </option>
                            <option value="Wali"> Wali </option>
                            <option value="Kos"> Kos </option>
                            <option value="Asrama"> Asrama </option>
                            <option value="Panti Asuhan"> Panti Asuhan </option>
                            <option value="Pesantren"> Pesantren </option>
                        </select>
                    </div>

                    <div class="col-sm-4">
                        <label> Asal Sekolah <span style="color:red"> *</span></label>
                        <input type="text" name="stu_school_origin" class="form-control form-control-rounded" placeholder="Masukan Asal Sekolah" value="{{$student_edit->stu_school_origin}}">

                    </div>

                    <div class="col-sm-4">
                        <label> NPSN Asal Sekolah <span style="color:red"> *</span></label>
                        <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" name="school_origin[npsn]" class="form-control form-control-rounded @error('school_origin.npsn') is-invalid @enderror" placeholder="Masukan NPSN" value="@if(isset($student_edit->school_origin['npsn'])){{$student_edit->school_origin['npsn']}}@endif">
                        @error('school_origin.npsn')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-4">
                        <label> Jurusan yang diminati <span style="color:red"> *</span></label>
                        <select class="form-control form-control-rounded" name="stu_major_id">
                            @foreach($majors as $major)
                            <option {{ $major->mjr_id == $student_edit->stu_major_id ? 'selected' : '' }} value="{{ $major->mjr_id }}">{{ $major->mjr_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-sm-2">
                        <label> Anak Ke</label>                        
                        <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" name="personal[child]" class="form-control form-control-rounded @error('personal.child') is-invalid @enderror" placeholder="Masukan Anak Ke" value="@if(isset($student_edit->personal['child'])){{$student_edit->personal['child']}}@endif">
                    </div>

                    <div class="col-sm-2">
                        <label> Agama <span style="color:red"> *</span></label>
                        <select class="form-control form-control-rounded @error('usr_religion') is-invalid @enderror" name="usr_religion">
                            <option value="{{$student_edit->usr_religion}}" selected=""> {{$student_edit->usr_religion}} </option>
                            <option value="Islam"> Islam </option>
                            <option value="Protestan"> Protestan </option>
                            <option value="Katolik"> Katolik </option>
                            <option value="Hindu"> Hindu </option>
                            <option value="Budha"> Budha </option>
                            <option value="Khonghucu"> Khonghucu </option>
                        </select>   
                    </div>
                </div>

                <label>Foto siswa<span style="color:red"> *</span></label>    
                <div class="form-group row">
                 <div class="col-sm-4">
                        @if(isset($student_edit->usr_profile_picture))
                        <img src="{{ asset($student_edit->usr_profile_picture) }}" class="img-thumbnail" id="tampil_picture" style="object-fit: cover; height: 200px; width: 200px"/>
                        @else
                        <img src="{{ asset('images/default_profile_picture_20210228.png') }}" class="img-thumbnail" id="tampil_picture" style="object-fit: cover; height: 200px; width: 200px"/>
                        @endif
                        <input type="file" name="usr_profile_picture" id="preview_gambar" class=" @error('usr_profile_picture') is-invalid @enderror" accept="image/x-png,image/gif,image/jpeg" onchange="document.getElementById('usr_profile_picture').value=this.value" /><br>
                    </div>
                </div>


                <h4 class="form-header text-uppercase">
                    <i class=""></i>
                    Data Ayah
                </h4>

                <div class="form-group row">

                    <div class="col-sm-4">
                        <label> Nama Ayah Kandung <span style="color:red"> *</span></label>
                        <input type="text" name="father_data[name]" class="form-control form-control-rounded form-control-rounded" placeholder="Masukan Nama Ayah Kandung" value="@if(isset($student_edit->father_data['name'])){{$student_edit->father_data['name']}}@endif">
                    </div>

                    <div class="col-sm-4">
                        <label> Nama Ayah <span style="color:red"> *</span></label>
                        <input type="text" name="father_data[father_name]" class="form-control form-control-rounded @error('father_data.father_name') is-invalid @enderror" placeholder="Masukan Nama Lengkap" value="@if(isset($student_edit->father_data['father_name'])){{$student_edit->father_data['father_name']}}@endif">
                        @error('father_data.father_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <p style="font-size: 12px;">Nama ayah di ijazah sd/smp</p>

                    </div>

                    <div class="col-sm-4">
                        <label> Nomor Identitas Kependudukan (NIK) <span style="color:red"> *</span></label>
                        <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" name="father_data[nik]" class="form-control form-control-rounded form-control-rounded" placeholder="Masukan Nomor NIK" value="@if(isset($student_edit->father_data['nik'])){{$student_edit->father_data['nik']}}@endif">
                    </div>
                </div>

                <div class="form-group row">

                    <div class="col-sm-4">
                        <label> Tahun Lahir <span style="color:red"> *</span></label>                        
                        <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" class="form-control form-control-rounded form-control-rounded year_picker" name="father_data[year_of_birth]" placeholder="Masukan Tahun Lahir" value="@if(isset($student_edit->father_data['year_of_birth'])){{$student_edit->father_data['year_of_birth']}}@endif">
                    </div>

                    <div class="col-sm-4">
                        <label>Pendidikan Terakhir<span style="color:red"> *</span></label>                        
                        <select name="father_data[education]" class="form-control form-control-rounded form-control-rounded" id="basic-select" value="">                            
                            @if(isset($student_edit->father_data['education']))
                            <option selected="" value="{{$student_edit->father_data['education']}}"> {{$student_edit->father_data['education']}}</option>
                            @else
                            <option disabled="" selected="" value=""> Pilih </option>
                            @endif
                            <option value="SD - Sederajat"> SD - Sederajat </option>
                            <option value="SMP - Sederajat"> SMP - Sederajat </option>
                            <option value="SMA - Sederajat"> SMA - Sederajat </option>
                            <option value="KULIAH - Sederajat"> KULIAH - Sederajat </option>
                        </select>

                    </div>

                    <div class="col-sm-4">
                        <label>Pekerjaan<span style="color:red"> *</span></label>
                        <select name="father_data[profession]" class="form-control form-control-rounded form-control-rounded" value="">            
                            @if(isset($student_edit->father_data['profession']))                
                            <option selected="" value="{{$student_edit->father_data['profession']}}">{{$student_edit->father_data['profession']}}</option>
                            @else
                            <option disabled="" selected="" value=""> Pilih </option>
                            @endif
                            <option value="Buruh"> Buruh </option>
                            <option value="Wirausaha"> Wirausaha </option>
                            <option value="Wiraswasta"> Wiraswasta </option>
                        </select>

                    </div>

                </div>

                <div class="form-group row">

                    <div class="col-sm-4">
                        <label>Pendapatan Perbulan</label>
                        <select name="father_data[monthly_income]" class="form-control form-control-rounded form-control-rounded" value="">                            
                            @if(isset($student_edit->father_data['monthly_income'])) 
                            <option value="{{$student_edit->father_data['monthly_income']}}" selected="">{{$student_edit->father_data['monthly_income']}}</option>
                            @else
                            <option disabled="" value="" selected=""> Pilih </option>
                            @endif
                            <option value="kurang dari Rp. 500.000"> kurang dari Rp. 500.000 </option>
                            <option value="Rp. 500.000 - Rp.1.000.000"> Rp. 500.000 - Rp.1.000.000 </option> 
                            <option value="Rp. 1.000.000 - Rp. 2.000.000"> Rp. 1.000.000 - Rp. 2.000.000 </option>
                            <option value="Rp. 2.000.000 - Rp. 3.000.000"> Rp. 2.000.000 - Rp. 3.000.000 </option>
                            <option value="Rp. 3.000.000 - Rp. 4.000.000"> Rp. 3.000.000 - Rp. 4.000.000 </option>
                            <option value="lebih dari Rp. 4.000.000"> lebih dari Rp. 4.000.000 </option>
                        </select>
                    </div>

                    <div class="col-sm-4">
                        <label> Nomor Telepon <span style="color:red"> *</span></label>
                        <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" name="father_data[phone_number]" class="form-control form-control-rounded form-control-rounded" placeholder="Masukan Nomor Telepon" value="{{$student_edit->father_data['phone_number']}}">
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
                        <input type="text" name="mother_data[name]" class="form-control form-control-rounded" placeholder="Masukan Nama Ibu Kandung" value="{{$student_edit->mother_data['name']}}">
                    </div>

                    <div class="col-sm-4">
                        <label> Nomor Identitas Kependudukan (NIK) <span style="color:red"> *</span></label>
                        <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" name="mother_data[nik]" class="form-control form-control-rounded" placeholder="Masukan Nomor NIK" value="@if(isset($student_edit->mother_data['nik'])){{$student_edit->mother_data['nik']}}@endif">
                    </div>

                    <div class="col-sm-4">
                        <label> Tahun Lahir <span style="color:red"> *</span></label>                        
                        <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" name="mother_data[year_of_birth]" class="form-control form-control-rounded year_picker" placeholder="Masukan Tahun Lahir" value="@if(isset($student_edit->mother_data['year_of_birth'])) {{$student_edit->mother_data['year_of_birth']}} @endif">
                    </div>
                </div>


                <div class="form-group row">

                    <div class="col-sm-4">
                        <label>Pendidikan Terakhir<span style="color:red"> *</span></label>
                        <select name="mother_data[education]" class="form-control form-control-rounded" id="basic-select" value="">                    
                            @if(isset($student_edit->mother_data['education']))        
                            <option selected="" value="{{$student_edit->mother_data['education']}}"> {{$student_edit->mother_data['education']}}</option>
                            @else
                            <option disabled="" selected="" value=""> Pilih </option>
                            @endif
                            <option value="SD - Sederajat"> SD - Sederajat </option>
                            <option value="SMP - Sederajat"> SMP - Sederajat </option>
                            <option value="SMA - Sederajat"> SMA - Sederajat </option>
                            <option value="KULIAH - Sederajat"> KULIAH - Sederajat </option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <label> Pekerjaan <span style="color:red"> *</span></label>

                        <select name="mother_data[profession]" class="form-control form-control-rounded" id="basic-select" value="">                    
                            @if(isset($student_edit->mother_data['profession']))         
                            <option selected="" value="{{$student_edit->mother_data['profession']}}"> {{$student_edit->mother_data['profession']}}</option>
                            @else
                            <option disabled="" selected="" value=""> Pilih </option>
                            @endif
                            <option value="Buruh"> Buruh </option>
                            <option value="Wirausaha"> Wirausaha </option>
                            <option value="Wiraswasta"> Wiraswasta </option>
                            <option value="Ibu Rumah Tangga"> Ibu Rumah Tangga </option>
                        </select>

                    </div>
                    <div class="col-sm-4">
                        <label>Pendapatan Perbulan</label>
                        <select name="mother_data[monthly_income]" class="form-control form-control-rounded" id="basic-select" value="">                            
                            @if(isset($student_edit->mother_data['monthly_income'])) 
                            <option value="{{$student_edit->mother_data['monthly_income']}}" selected="">{{$student_edit->mother_data['monthly_income']}}</option>
                            @else
                            <option disabled="" value="" selected=""> Pilih </option>
                            @endif
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
                        <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" name="mother_data[phone_number]" class="form-control form-control-rounded @error('mother_data.phone_number') is-invalid @enderror" placeholder="Masukan Nomor Telepon" value="{{$student_edit->mother_data['phone_number']}}">
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
                    Data Wali (opsional)
                </h4>

                <div class="form-group row">

                    <div class="col-sm-4">
                        <label>Nama Wali Murid</label>                        
                        <input type="text" name="guardian_data[name]" class="form-control form-control-rounded" placeholder="Masukan Nama Wali Murid" value="@if(isset($student_edit->guardian_data['name'])) {{$student_edit->guardian_data['name']}} @endif">
                    </div>

                    <div class="col-sm-4">
                        <label>Nomor Identitas Kependudukan (NIK)</label>                        
                        <input type="text" name="guardian_data[nik]" class="form-control form-control-rounded" placeholder="Masukan Nomor NIK" value="@if(isset($student_edit->guardian_data['nik'])) {{$student_edit->guardian_data['nik']}} @endif">
                    </div>

                    <div class="col-sm-4">
                        <label>Tahun Lahir</label>
                        <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" name="guardian_data[year_of_birth]" class="form-control form-control-rounded year_picker" placeholder="Masukan Tahun Lahir" value="@if(isset($student_edit->guardian_data['year_of_birth'])) {{$student_edit->guardian_data['year_of_birth']}} @endif">
                    </div>
                </div>
                <div class="form-group row">

                    <div class="col-sm-4">
                        <label>Pendidikan Terakhir</label>
                        <select name="guardian_data[education]" class="form-control form-control-rounded" id="basic-select">                            
                            @if(isset($student_edit->guardian_data['education'])) 
                            <option selected="" value="{{$student_edit->guardian_data['education']}}">{{$student_edit->guardian_data['education']}}</option>
                            @else
                            <option disabled="" selected="" value=""> Pilih </option>
                            @endif
                            <option value="SD - Sederajat">SD - Sederajat</option>
                            <option value="SMP - Sederajat">SMP - Sederajat</option>
                            <option value="SMA - Sederajat">SMA - Sederajat</option>
                            <option value="KULIAH - Sederajat">KULIAH - Sederajat</option>

                        </select>
                    </div>
                    <div class="col-sm-4">
                        <label>Pekerjaan</label>

                        <select name="guardian_data[profession]" class="form-control form-control-rounded" id="basic-select">
                         @if(isset($student_edit->guardian_data['profession']))
                         <option selected="" value="{{$student_edit->guardian_data['profession']}}">{{$student_edit->guardian_data['profession']}}</option>
                         @else
                         <option disabled="" selected="" value=""> Pilih </option>
                         @endif
                         <option value="Buruh">Buruh</option>
                         <option value="Wirausaha">Wirausaha</option>
                     </select>

                 </div>
                 <div class="col-sm-4">
                    <label>Pendapatan Perbulan</label>
                    <select name="guardian_data[monthly_income]" class="form-control form-control-rounded" id="basic-select">              
                     @if(isset($student_edit->guardian_data['monthly_income']))       
                     <option selected="" value="{{$student_edit->guardian_data['monthly_income']}}">{{$student_edit->guardian_data['monthly_income']}}</option>
                     @else
                     <option disabled="" selected="" value=""> Pilih </option>
                     @endif
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
                <label> Nomor Telepon </label>                
                <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" name="guardian_data[phone_number]" class="form-control form-control-rounded @error('guardian_data.phone_number') is-invalid @enderror" placeholder="Masukan Nomor Telepon" value="@if(isset($student_edit->guardian_data['phone_number'])) {{$student_edit->guardian_data['phone_number']}} @endif">
                @error('guardian_data.phone_number')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="col-sm-4">
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
            Data Domisili
        </h4>

        @foreach($user as $user)
        <div class="form-group row">
            <div class="col-sm-4">
                <label> Provinsi <span style="color:red"> *</span></label>
                <select name="prv_name" class="form-control single-select form-control-rounded @error('prv_name') is-invalid @enderror" id="provinces">
                    <option checked="true" selected="true" value="{{$user->prv_id}}"> {{$user->prv_name}} </option>
                    @foreach($province as $data)
                    <option value="{{$data->prv_id}}">{{$data->prv_name}}</option>
                    @endforeach
                </select>
                @error('prv_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="col-sm-4">
                <label> Kabupaten/Kota <span style="color:red"> *</span></label>

                <select name="cit_name" class="form-control single-select form-control-rounded @error('cit_name') is-invalid @enderror" id="cities">
                    <option checked="true" selected="true" value="{{$user->cit_id}}"> {{$user->cit_name}} </option>
                </select>
                @error('cit_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="col-sm-4">
                <label> Kecamatan <span style="color:red"> *</span></label>

                <select name="dst_name" class="form-control single-select form-control-rounded @error('dst_name') is-invalid @enderror" id="districts">
                    <option checked="true" selected="true" value="{{$user->dst_id}}"> {{$user->dst_name}} </option>
                </select>
                @error('dst_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        @endforeach

        <div class="form-group row">


            <div class="col-sm-4">
                <label>Alamat<span style="color:red"> *</span></label>
                <input type="text" name="usr_address" value="{{$student_edit->usr_address}}" class="form-control form-control-rounded" placeholder="Masukan Alamat">
            </div>

            <div class="col-sm-2">
                <label>RT<span style="color:red"> *</span></label>
                <input type="text" name="usr_rt" value="{{$student_edit->usr_rt}}" class="form-control form-control-rounded" placeholder="Masukan Nomor RT">
            </div>

            <div class="col-sm-2">
                <label>RW<span style="color:red"> *</span></label>
                <input type="text" name="usr_rw" value="{{$student_edit->usr_rw}}" class="form-control form-control-rounded" placeholder="Masukan Nomor RW">
            </div>

            <div class="col-sm-4">
                <label>Desa/Kelurahan<span style="color:red"> *</span></label>
                <input type="text" name="usr_rural_name" value="{{$student_edit->usr_rural_name}}" class="form-control form-control-rounded" placeholder="Masukan Desa/Kelurahan">
            </div>

        </div>

        <div class="form-group row">
         <div class="col-sm-4">
            <label>Kode Pos<span style="color:red"> *</span></label>
            <input type="text" name="usr_postal_code" value="{{$student_edit->usr_postal_code}}" class="form-control form-control-rounded" placeholder="Masukan Kode Pos">
        </div>
        <div class="col-sm-4">
            <label>Telepon Rumah</label>            
            <input type="text" name="contact[landline_number]" value="@if(isset($student_edit->contact['landline_number'])) {{$student_edit->contact['landline_number']}} @endif" class="form-control form-control-rounded" placeholder="Masukan Nomor Telepon Rumah">
        </div>

        <div class="col-sm-4">
            <label>Email Rumah</label>            
            <input type="text" name="contact[email]" value="@if(isset($student_edit->contact['email'])) {{$student_edit->contact['email']}} @endif" class="form-control form-control-rounded" placeholder="Masukan Alamat Email Rumah">
        </div>

    </div>

    <h4 class="form-header text-uppercase">
        <i class=""></i>
        Prestasi Siswa (opsional)
    </h4>
    <div class="form-group row">


        <div class="col-sm-4">
            <label> Jenis </label>
            @if(isset($student_edit->achievement['type']))
            <div class="radio icheck-info">
                <input type="radio" {{ $student_edit->achievement['type']=='Sains'?'checked':'' }} id="achievementType1" value="Sains" name="achievement[type]">
                <label for="achievementType1"> Sains </label>
            </div>
            <div class="radio icheck-info">
                <input type="radio" {{ $student_edit->achievement['type']=='Seni'?'checked':'' }} id="achievementType2" value="Seni" name="achievement[type]">
                <label for="achievementType2"> Seni </label>
            </div>
            <div class="radio icheck-info">
                <input type="radio" {{ $student_edit->achievement['type']=='Olahraga'?'checked':'' }} id="achievementType3" value="Olahraga" name="achievement[type]">
                <label for="achievementType3"> Olahraga </label>
            </div>
            <div class="radio icheck-info">
                <input type="radio" {{ $student_edit->achievement['type']==''?'checked':'' }} id="achievementType4" value="" name="achievement[type]">
                <label for="achievementType4"> Tidak ada </label>
            </div>
            @else
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
                <input type="radio" id="achievementType4" value="" name="achievement[type]">
                <label for="achievementType4"> Tidak ada </label>
            </div>
            @endif
        </div>



        <div class="col-sm-4">
            <label> Tingkat</label>
            @if(isset($student_edit->achievement['achievement_level']))
            <div class="radio icheck-info">
                <input {{ $student_edit->achievement['achievement_level']=='Sekolah'?'checked':'' }} type="radio" id="achievementLevel1" value="Sekolah" name="achievement[achievement_level]">
                <label for="achievementLevel1"> Sekolah </label>
            </div>
            <div class="radio icheck-info">
                <input {{ $student_edit->achievement['achievement_level']=='Kecamatan'?'checked':'' }} type="radio" id="achievementLevel2" value="Kecamatan" name="achievement[achievement_level]">
                <label for="achievementLevel2"> Kecamatan </label>
            </div>
            <div class="radio icheck-info">
                <input {{ $student_edit->achievement['achievement_level']=='Kabupaten'?'checked':'' }} type="radio" id="achievementLevel3" value="Kabupaten" name="achievement[achievement_level]">
                <label for="achievementLevel3"> Kabupaten </label>
            </div>
            <div class="radio icheck-info">
                <input {{ $student_edit->achievement['achievement_level']=='Provinsi'?'checked':'' }} type="radio" id="achievementLevel4" value="Provinsi" name="achievement[achievement_level]">
                <label for="achievementLevel4"> Provinsi </label>
            </div>

            <div class="radio icheck-info">
                <input {{ $student_edit->achievement['achievement_level']=='Nasional'?'checked':'' }} type="radio" id="achievementLevel5" value="Nasional" name="achievement[achievement_level]">
                <label for="achievementLevel5"> Nasional </label>
            </div>

            <div class="radio icheck-info">
                <input {{ $student_edit->achievement['achievement_level']=='Internasional'?'checked':'' }} type="radio" id="achievementLevel6" value="Internasioanl" name="achievement[achievement_level]">
                <label for="achievementLevel6"> Internasional </label>
            </div>

            <div class="radio icheck-info">
                <input {{ $student_edit->achievement['achievement_level']==''?'checked':'' }} type="radio" id="achievementLevel7" value="" name="achievement[achievement_level]">
                <label for="achievementLevel7"> Tidak ada </label>
            </div>
            @else

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
                <input type="radio" id="achievementLevel4" value="Provinsi" name="achievement[achievement_level]">
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
                <input type="radio" id="achievementLevel7" value="" name="achievement[achievement_level]">
                <label for="achievementLevel7"> Tidak ada </label>
            </div>
            @endif

        </div>

        <div class="col-sm-4">
            <div>
                <label> Nama Prestasi </label>
                @if(isset($student_edit->achievement['achievement_name']))
                <input type="text" name="achievement[achievement_name]" class="form-control form-control-rounded" placeholder="Masukan Nama Prestasi" value="{{ $student_edit->achievement['achievement_name'] }}">
                @else
                <input type="text" name="achievement[achievement_name]" class="form-control form-control-rounded" placeholder="Masukan Nama Prestasi" value="">
                @endif
            </div>

            <div>
                <label> Tahun </label>
                @if(isset($student_edit->achievement['year']))
                <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" name="achievement[year]" class="form-control form-control-rounded" placeholder="Masukan Tahun" value="{{ $student_edit->achievement['year'] }}">
                @else
                <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" name="achievement[year]" class="form-control form-control-rounded" placeholder="Masukan Tahun" value="">
                @endif
            </div>

            <div>
                <label> Penyelenggara </label>
                @if(isset($student_edit->achievement['organizer']))
                <input type="text" name="achievement[organizer]" class="form-control form-control-rounded" placeholder="Masukan Nama Penyelenggara Kegiatan" value="{{ $student_edit->achievement['organizer'] }}">
                @else
                <input type="text" name="achievement[organizer]" class="form-control form-control-rounded" placeholder="Masukan Nama Penyelenggara Kegiatan" value="">
                @endif

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
            <select name="other[recomended_from]" class="form-control form-control-rounded @error('other.recomended_from') is-invalid @enderror" id="basic-select" value="">
                @if(isset($student_edit->other['recomended_from']))
                <option value="{{$student_edit->other['recomended_from']}}" selected=""> {{$student_edit->other['recomended_from']}} </option>
                @else
                <option value="" selected=""> Pilih </option>
                @endif
                <option value="Iklan"> Iklan (Poster, Banner, Dll) </option>
                <option value="Sosmed"> Sosmed (IG, FB, YT, dll) </option>
                <option value="Saudara"> Saudara </option>
                <option value="Tetangga"> Tetangga </option>
                <option value="Siswa/i Mahaputra"> Siswa/i Mahaputra </option>

            </select>
        </div>
        <div class="col-sm-4">
            <label>Jalur Masuk</label>
            <select name="stu_entry_type_id" class="form-control form-control-rounded @error('stu_entry_type_id') is-invalid @enderror" id="basic-select" value="{{ old('stu_entry_type_id') }}">

                @foreach($entry_types as $entry_type)
                <option {{ $entry_type->ent_id == $student_edit->stu_entry_type_id ? 'selected' : '' }} value="{{ $entry_type->ent_id }}">{{ $entry_type->ent_name }}</option>
                @endforeach
            </select>

            @error('stu_entry_type_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <h4 class="form-header text-uppercase">
        <i class=""></i>
        Dokumen <small>(Maksimal File Ukuran 2 MB)</small>

    </h4>

    <div class="row">
                <div class="col-sm-4">
                    <label class="col-form-label" for="exampleInputFile"> Upload Surat Tanda Kelulusan SMP dilegalisir <span style="color:red"> *</span></label>
                    @if(isset($student_edit->other['certificate_of_graduation']))
                    <p><a href="{{ url('download-file-student/'. $student_edit->other['certificate_of_graduation']) }}"><i class="fa fa-file-word"></i>{{$student_edit->other['certificate_of_graduation']}}</a></p>
                    @endif
                    <div class="custom-file">
                        <input accept="image/x-png,image/gif,image/jpeg, application/pdf, .doc,.docx,application/msword," onchange="document.getElementById('other[certificate_of_graduation]').value=this.value" type="file" name="other[certificate_of_graduation]" class="@error('other[certificate_of_graduation]') is-invalid @enderror" id="preview_gambar">
                        @error('other.certificate_of_graduation')
                        <p>
                        <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                        </p>
                        @enderror   
                    </div>
                </div>

                <div class="col-sm-4">
                    <label class="col-form-label" for="exampleInputFile"> Upload Ijazah SMP/MTs dilegalisir <span style="color:red"> *</span> </label>
                    @if(isset($student_edit->other['junior_high_school_diploma']))
                    <p><a href="{{ url('download-file-student/'. $student_edit->other['junior_high_school_diploma']) }}"><i class="fa fa-file-word"></i>{{$student_edit->other['junior_high_school_diploma']}}</a></p>
                     @endif
                    <div class="custom-file">
                        <input accept="image/x-png,image/gif,image/jpeg, application/pdf, .doc,.docx,application/msword," onchange="document.getElementById('other[junior_high_school_diploma]').value=this.value" type="file" name="other[junior_high_school_diploma]" class="@error('other[junior_high_school_diploma]') is-invalid @enderror" id="preview_gambar">
                        @error('other.junior_high_school_diploma')
                        <p>
                        <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                        </p>
                        @enderror
                    </div>
                </div>

                <div class="col-sm-4">
                    <label class="col-form-label" for="exampleInputFile"> Upload Ijazah SD/Mi dilegalisir <span style="color:red"> *</span></label>
                    @if(isset($student_edit->other['elementary_school_diploma']))
                     <p><a href="{{ url('download-file-student/'. $student_edit->other['elementary_school_diploma']) }}"><i class="fa fa-file-word"></i>{{$student_edit->other['elementary_school_diploma']}}</a></p>
                     @endif
                    <div class="custom-file">
                    <input accept="image/x-png,image/gif,image/jpeg, application/pdf, .doc,.docx,application/msword," onchange="document.getElementById('other[elementary_school_diploma]').value=this.value" type="file" name="other[elementary_school_diploma]" class="@error('other[elementary_school_diploma]') is-invalid @enderror" id="preview_gambar">
                    @error('other.elementary_school_diploma')
                    <p>
                    <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                    </p>
                    @enderror
                </div>
            </div>
            </div>
            
            <div class="row" style="margin-top: 40px;">
                <div class="col-sm-4">                    
                    <label class="col-form-label" for="exampleInputFile"> Upload Akte Kelahiran <span style="color:red"> *</span></label>
                     @if(isset($student_edit->other['birth_certificate']))
                     <p><a href="{{ url('download-file-student/'. $student_edit->other['birth_certificate']) }}"><i class="fa fa-file-word"></i>{{$student_edit->other['birth_certificate']}}</a></p>
                     @endif
                    <div class="custom-file">
                    <input accept="image/x-png,image/gif,image/jpeg, application/pdf, .doc,.docx,application/msword," onchange="document.getElementById('other[birth_certificate]').value=this.value" type="file" name="other[birth_certificate]" class="@error('other[birth_certificate]') is-invalid @enderror" id="preview_gambar">
                    @error('other.birth_certificate')
                    <p>
                        <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                    </p>
                    @enderror
                </div>
                </div>
                <div class="col-sm-4">
                    <label class="col-form-label" for="exampleInputFile"> Upload Kartu Keluarga <span style="color:red"> *</span> </label>
                     @if(isset($student_edit->other['family_card']))
                     <p><a href="{{ url('download-file-student/'. $student_edit->other['family_card']) }}"><i class="fa fa-file-word"></i>{{$student_edit->other['family_card']}}</a></p>
                     @endif
                    <div class="custom-file">
                    <input accept="image/x-png,image/gif,image/jpeg, application/pdf, .doc,.docx,application/msword," onchange="document.getElementById('other[family_card]').value=this.value" type="file" name="other[family_card]" class="@error('other[family_card]') is-invalid @enderror" id="preview_gambar">
                    @error('other.family_card')
                    <p>
                        <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                    </p>
                    @enderror
                </div>
                </div>
                <div class="col-sm-4">
                    <label class="col-form-label" for="exampleInputFile"> Upload Keterangan Domisili </label>
                     @if(isset($student_edit->other['domicile_statement']))
                     <p><a href="{{ url('download-file-student/'.$student_edit->other['domicile_statement']) }}"><i class="fa fa-file-word"></i>{{$student_edit->other['domicile_statement']}}</a></p>
                     @endif
                    <div class="custom-file">
                    <input accept="image/x-png,image/gif,image/jpeg, application/pdf, .doc,.docx,application/msword," onchange="document.getElementById('other[domicile_statement]').value=this.value" type="file" name="other[domicile_statement]" class="@error('other[domicile_statement]') is-invalid @enderror" id="preview_gambar">
                    @error('other.domicile_statement')
                    <p>
                        <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                    </p>
                    @enderror

                </div>
            </div>
            </div>

            <div class="row" style="margin-top: 20px;">
                <div class="col-sm-4">
                    <label class="col-form-label" for="exampleInputFile"> Upload KTP Ayah <span style="color:red"> *</span></label>
                     @if(isset($student_edit->other['id_card_father']))
                     <p><a href="{{ url('download-file-student/'.$student_edit->other['domicile_statement']) }}"><i class="fa fa-file-word"></i>{{$student_edit->other['id_card_father']}}</a></p>
                     @endif
                    <div class="custom-file">
                    <input accept="image/x-png,image/gif,image/jpeg, application/pdf, .doc,.docx,application/msword," onchange="document.getElementById('other[id_card_father]').value=this.value" type="file" name="other[id_card_father]" class="@error('other[id_card_father]') is-invalid @enderror" id="preview_gambar">
                    @error('other.id_card_father')
                    <p>
                        <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                    </p>
                    @enderror

                </div>
                </div>
                <div class="col-sm-4">
                    <label class="col-form-label" for="exampleInputFile"> Upload KTP Ibu <span style="color:red"> *</span></label>
                    @if(isset($student_edit->other['id_card_mother']))
                     <p><a href="{{ url('download-file-student/'. $student_edit->other['id_card_mother']) }}"><i class="fa fa-file-word"></i>{{$student_edit->other['id_card_mother']}}</a></p>
                     @endif
                    <div class="custom-file">
                    <input accept="image/x-png,image/gif,image/jpeg, application/pdf, .doc,.docx,application/msword," onchange="document.getElementById('other[id_card_mother]').value=this.value" type="file" name="other[id_card_mother]" class="@error('other[id_card_mother]') is-invalid @enderror" id="preview_gambar">
                    @error('other.id_card_mother')
                    <p>
                        <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                    </p>
                    @enderror
                </div>
                </div>
                <div class="col-sm-4">
                    <label class="col-form-label" for="exampleInputFile"> Upload Surat Kesehatan Badan </label>
                     @if(isset($student_edit->other['health_certificate']))
                     <p><a href="{{ url('download-file-student/'. $student_edit->other['health_certificate']) }}"><i class="fa fa-file-word"></i>{{$student_edit->other['health_certificate']}}</a></p>
                     @endif
                    <div class="custom-file">
                    <input accept="image/x-png,image/gif,image/jpeg, application/pdf, .doc,.docx,application/msword," onchange="document.getElementById('other[health_certificate]').value=this.value" type="file" name="other[health_certificate]" class="@error('other[health_certificate]') is-invalid @enderror" id="preview_gambar">
                    @error('other.health_certificate')
                    <p>
                        <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                    </p>
                    @enderror
                </div>
                </div>

            </div>

            <div class="row" style="margin-top: 30px;">
                <div class="col-sm-4">
                    <label class="col-form-label" for="exampleInputFile"> Upload Surat Kesehatan Mata </label>
                    @if(isset($student_edit->other['eye_health_letter']))
                     <p><a href="{{ url('download-file-student/'. $student_edit->other['eye_health_letter']) }}"><i class="fa fa-file-word"></i>{{$student_edit->other['eye_health_letter']}}</a></p>
                     @endif
                    <div class="custom-file">
                    <input accept="image/x-png,image/gif,image/jpeg, application/pdf, .doc,.docx,application/msword," onchange="document.getElementById('other[eye_health_letter]').value=this.value" type="file" name="other[eye_health_letter]" class="@error('other[eye_health_letter]') is-invalid @enderror" id="preview_gambar">
                    @error('other.eye_health_letter')
                    <p>
                        <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                    </p>
                    @enderror
                </div>
                </div>
                <div class="col-sm-4">
                    <label class="col-form-label" for="exampleInputFile"> Upload Kartu PIP/KIP/Keterangan Kematian </label>
                    @if(isset($student_edit->other['card']))
                     <p><a href="{{ url('download-file-student/'. $student_edit->other['card']) }}"><i class="fa fa-file-word"></i>{{$student_edit->other['card']}}</a></p>
                     @endif
                    <div class="custom-file">
                    <input accept="image/x-png,image/gif,image/jpeg, application/pdf, .doc,.docx,application/msword," onchange="document.getElementById('other[card]').value=this.value" type="file" name="other[card]" class="@error('other[card]') is-invalid @enderror" id="preview_gambar">
                    @error('other.card')
                    <p>
                        <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                    </p>
                    @enderror
                </div>
                </div>
                <div class="col-sm-4">      
                    <label class="col-form-label" for="exampleInputFile"> Upload Sertifikat/Piagam Penghargaan </label>
                     @if(isset($student_edit->other['certificate'])) 
                     <p><a href="{{ url('download-file-student/'. $student_edit->other['certificate']) }}"><i class="fa fa-file-word"></i>{{$student_edit->other['certificate']}}</a></p>
                     @endif
                    <div class="custom-file">
                    <input accept="image/x-png,image/gif,image/jpeg, application/pdf, .doc,.docx,application/msword," onchange="document.getElementById('other[certificate]').value=this.value" type="file" name="other[certificate]" class="@error('other[certificate]') is-invalid @enderror" id="preview_gambar">
                    @error('other.certificate')
                    <p>
                        <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                    </p>
                    @enderror
                </div>
                </div>
            </div>

    <div class="form-footer">
        <a href="{{url('students')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>  
        <button id="btnSubmit" type="reset" class="btn btn-danger"><i class="fa fa-times"></i> BATAL</button>
        <button id="btnSubmit" type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> SIMPAN</button>
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

<!-- script select2 -->
<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.single-select').select2();                 
    });

</script>
<!--Form Validatin Script-->
<script src="{{ asset('assets/plugins/jquery-validation/js/jquery.validate.min.js')}}"></script>

<script>
    $().ready(function() {
    $("#form-validate").validate({
        rules: {
            usr_name:{
                required: true
            },
            usr_email:{
                required: true
            },
            stu_major_id:{
                required: true
            },
            stu_candidate_name:{
                required: true
            },
            usr_place_of_birth:{
                required: true
            },
            usr_date_of_birth:{
                required: true
            },
            "personal[nik]":{
                required: true,
                minlength: 10
            },
            usr_gender:{
                required: true
            },
            stu_nisn:{
                required: true,
                minlength: 10
            },
            usr_whatsapp_number:{
                required: true,
                minlength: 10
            },
            usr_phone_number:{
                required:true,
                minlength: 10
            },
            usr_religion:{
                required: true
            },
            stu_school_origin:{
                required: true
            },
            "school_origin[npsn]":{
                required: true
            },
            prv_name:{
                required: true
            },
            cit_name:{
                required: true
            },
            dst_name:{
                required: true
            },
            usr_address:{
                required: true
            },
            usr_rt:{
                required: true
            },
            usr_rw:{
                required: true
            },
            usr_rural_name:{
                required: true
            },
            usr_postal_code:{
                required:true
            },
            "contact[email]": {
            required: true,
            },
            "personal[living_together]":{
                required: true
            },
            "personal[status_of_residence]":{
                required: true
            },
            "father_data[name]":{
                required: true
            },
            "father_data[phone_number]":{
                required: true,
                minlength: 10
            },
            "father_data[nik]":{
                required: true,
                minlength: 10
            },
            "father_data[year_of_birth]":{
                required: true
            },
            "father_data[education]":{
                required: true
            },
            "father_data[profession]":{
                required: true
            },
            "father_data[father_name]":{
                required: true
            },
            "mother_data[name]":{
                required: true
            },
            "mother_data[phone_number]":{
                required:true,
                minlength: 10
            },
             "mother_data[nik]":{
                required:true,
                minlength: 10
            },
            "mother_data[year_of_birth]":{
                required: true
            },
            "mother_data[education]":{
                required: true
            },
            "mother_data[profession]":{
                required: true
            },
            // "other[certificate_of_graduation]":{
            //     required: true
            // },
            // "other[junior_high_school_diploma]":{
            //     required: true
            // },
            // "other[elementary_school_diploma]":{
            //     required: true
            // },
            // "other[birth_certificate]":{
            //     required: true
            // },
            // "other[family_card]":{
            //     required: true
            // },
            // "other[id_card_father]":{
            //     required: true
            // },
            // "other[id_card_mother]":{
            //     required: true
            // },
            terms_and_conditions:{
                required: true
            },
        },  
        messages: {
            usr_name:{
                required: "Nama harus di isi"
            },
            usr_email:{
                required: "Email harus di isi"
            },
            stu_major_id:{
                required: "Jurusan harus di pilih"
            },
            stu_candidate_name:{
                required: "Nama lengkap harus di isi"
            },
            usr_place_of_birth:{
                required: "Tempat lahir harus di isi"
            },
            usr_date_of_birth:{
                required: "Tanggal lahir harus di isi"
            },
            "personal[nik]":{
                required: "Nomor NIK harus di isi",
                minlength: "Minimal 10 digit"
            },
            usr_gender:{
                required: "Jenis kelamin harus di pilih"
            },
            stu_nisn:{
                required: "NISN harus di isi",
                minlength: "Minimal 10 digit"
            },
            usr_whatsapp_number:{
                required: "No WhatsApp harus di isi",
                minlength: "Minimal 10 digit"
            },
            usr_phone_number:{
                required: "No Telepon harus di isi",
                minlength: "Minimal 10 digit"
            },
            usr_religion:{
                required: "Agama harus di pilih"
            },
            stu_school_origin:{
                required: "asal sekolah harus di isi"
            },
            "school_origin[npsn]":{
                required: "NPSN asal sekolah harus di isi"
            },
            prv_name:{
                required: "Provinsi harus di pilih"
            },
            cit_name:{
                required: "Kabupaten atau kota harus di pilih"
            },
            dst_name:{
                required: "Kecamatan harus di pilih"
            },
            usr_address:{
                required: "Alamat harus di isi"
            },
            usr_rt:{
                required: "RT harus di isi"
            },
            usr_rw:{
                required: "RW harus di isi"
            },
            usr_rural_name:{
                required: "Desa harus di isi"
            },
            usr_postal_code:{
                required: "Kode pos harus di isi"
            },
            "contact[email]": {
            required: "Alamat email harus di isi",
            email: "Email tidak valid"
            },
            "personal[living_together]":{
                required: "Tinggal bersama harus di pilih"
            },
            "personal[status_of_residence]":{
                required: "Status tinggal harus di pilih"
            },
            "father_data[name]":{
                required: "Nama ayah harus di isi"
            },
            "father_data[phone_number]":{
                required: "Nomor telepon ayah harus di isi",
                minlength: "Minimal 10 digit"
            },
            "father_data[nik]":{
                required: "NIK ayah harus di isi",
                 minlength: "Minimal 10 digit"
            },
            "father_data[year_of_birth]":{
                required: "tahun lahir harus di isi"
            },
            "father_data[education]":{
                required: "Pendidikan terakhir harus di pilih"
            },
            "father_data[profession]":{
                required: "pekerjaan harus di pilih"
            },
            "father_data[father_name]":{
                required: "Nama ayah sesuai ijazah harus di isi"
            },
            "mother_data[name]":{
                required: "Nama ibu harus di isi"
            },
            "mother_data[phone_number]":{
                required: "Nomor telepon ibu harus di isi",
                minlength: "Minimal 10 digit"
            },
            "mother_data[nik]":{
                required: "NIK ibu harus di isi",
                 minlength: "Minimal 10 digit"
            },
            "mother_data[year_of_birth]":{
                required: "tahun lahir harus di isi"
            },
            "mother_data[education]":{
                required: "Pendidikan terakhir harus di pilih"
            },
            "mother_data[profession]":{
                required: "pekerjaan harus di pilih"
            },
            // "other[certificate_of_graduation]":{
            //     required: "Surat tanda kelulusan smp harus di upload"
            // },
            // "other[junior_high_school_diploma]":{
            //     required: "Ijazah SMP harus di upload",
            // },
            // "other[elementary_school_diploma]":{
            //     required: "Ijazah SD harus di upload"
            // },
            // "other[birth_certificate]":{
            //     required: "Akte kelahiran harus di upload"
            // },
            // "other[family_card]":{
            //     required: "Kartu keluarga harus di upload"
            // },
            // "other[id_card_father]":{
            //     required: "KTP ayah harus di upload"
            // },
            // "other[id_card_mother]":{
            //     required: "KTP ibu harus di upload"
            // },
            terms_and_conditions:{
                required: "&nbsp S&K harus di centang"
            }
        }
    });
});
</script>
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

    $('#autoclose-datepicker').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    $('.year_picker').datepicker({
        autoclose: true,
        minViewMode: 2,
        format: 'yyyy'
    });
</script>

<script>
    $('#provinces').on('change', function (e) {
        console.log(e);
        var prov_id = e.target.value;
        $.get('{{URL::to('api/json-cities')}}/'+ prov_id  , function (variable) {
            console.log('variable');
            $('#cities').empty();
            $('#cities').append('<option value="">Pilih Kabupaten/Kota</option>');

            $.each(variable.cities, function (val, citiesObj) {
                $('#cities').append('<option value="'+citiesObj.cit_id+'">'+citiesObj.cit_name+'</option>');
            });

        });
    });

    $('#cities').on('change', function (e) {
        console.log(e);
        var cit_id = e.target.value;
        $.get('{{URL::to('api/json-districts')}}/'+ cit_id  , function (variable) {
            console.log('variable');
            $('#districts').empty();
            $('#districts').append('<option value="">Pilih Kecamatan</option>');

            $.each(variable.districts, function (val, districtsObj) {
                $('#districts').append('<option value="'+districtsObj.dst_id+'">'+districtsObj.dst_name+'</option>');
            });

        });
    });


</script>
@endpush
@endsection