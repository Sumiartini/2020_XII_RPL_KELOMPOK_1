@extends('layouts.master')

@push('title')
- Edit Staf
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
        <h4 class="page-title">Edit Staf</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">{{ env('APP_NAME') }}</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Kelola Staf</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Staf</li>
        </ol>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form id="form-validate" autocomplete="off" method="POST" action="{{ url('staff/edit/'.$staff_edit->stf_id) }}" novalidate="novalidate" enctype="multipart/form-data">
                    @csrf
                    <h4 class="form-header text-uppercase">
                        <i class="  "></i>
                        Data Akun
                    </h4>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Alamat Email<span style="color:red"> *</span></label>
                            <input type="email" disabled="" class="form-control form-control-rounded @error('usr_email') is-invalid @enderror" name="usr_email" placeholder="Masukan Alamat Email" value="{{ $staff_edit->usr_email }}">
                            @error('usr_email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror                       
                        </div>
                        <div class="col-sm-4">
                            <label>Nomor Telepon<span style="color:red"> *</span></label>
                            <input  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" class="form-control form-control-rounded @error('usr_phone_number') is-invalid @enderror" name="usr_phone_number" placeholder="Masukan Nomor Telepon" value="{{  $staff_edit->usr_phone_number }}">
                            @error('usr_phone_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <h4 class="form-header text-uppercase">
                        Data Staf
                    </h4>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label>Nama Lengkap<span style="color:red"> *</span></label>
                            <input type="text" class="form-control form-control-rounded @error('usr_name') is-invalid @enderror" id="input-10" name="usr_name" value="{{ $staff_edit->usr_name}}">
                            @error('usr_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <label>NIK <span style="color:red;">*</span></label>
                            <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" class="form-control form-control-rounded @error('personal.nik') is-invalid @enderror" name="personal[nik]" placeholder="Masukan NIK" value="@if(isset($staff_edit->personal['nik'])){{$staff_edit->personal['nik']}}@endif">
                            @error('personal.nik')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <label>NUPTK</label>
                            <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" class="form-control form-control-rounded @error('tcr_nuptk') is-invalid @enderror" name="stf_nuptk" placeholder="Masukan NUPTK" value="{{ $staff_edit->stf_nuptk }}">                            
                            <p style="font-size: 12px;">Boleh di isi boleh tidak</p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Tempat Lahir <span style="color:red;">*</span></label>
                            <input type="text" class="form-control form-control-rounded @error('usr_place_of_birth') is-invalid @enderror" name="usr_place_of_birth" placeholder="Masukan Tempat Lahir" value="{{  $staff_edit->usr_place_of_birth }}">
                            @error('usr_place_of_birth')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-sm-4">
                            <label>Tanggal Lahir <span style="color:red;">*</span></label>
                            <input type="text" id="autoclose-datepicker" class="form-control form-control-rounded @error('usr_date_of_birth') is-invalid @enderror" name="usr_date_of_birth" placeholder="Tanggal/Bulan/Tahun" value="{{  $staff_edit->usr_date_of_birth }}">
                            @error('usr_date_of_birth')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-sm-4">
                            <label> Agama <span style="color:red"> *</span></label>
                            <select class="form-control form-control-rounded @error('usr_religion') is-invalid @enderror" name="usr_religion" value="{{ old('usr_religion') }}">
                                <option value="{{$staff_edit->usr_religion}}" selected=""> {{$staff_edit->usr_religion}} </option>                                
                                <option {{ old('usr_religion') == "Islam" ? 'selected' : '' }} value="Islam"> Islam </option>
                                <option {{ old('usr_religion') == "Protestan" ? 'selected' : '' }} value="Protestan"> Protestan </option>
                                <option {{ old('usr_religion') == "Katolik" ? 'selected' : '' }} value="Katolik"> Katolik </option>
                                <option {{ old('usr_religion') == "Hindu" ? 'selected' : '' }} value="Hindu"> Hindu </option>
                                <option {{ old('usr_religion') == "Budha" ? 'selected' : '' }} value="Budha"> Budha </option>
                                <option {{ old('usr_religion') == "Khonghucu" ? 'selected' : '' }} value="Khonghucu"> Khonghucu </option>
                            </select>
                            @error('usr_religion')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label> Jenis Kelamin <span style="color:red"> *</span></label>
                            <select name="usr_gender" class="form-control form-control-rounded @error('usr_gender') is-invalid @enderror">
                                <option value="{{$staff_edit->usr_gender}}" selected=""> {{$staff_edit->usr_gender}} </option>                                
                                <option {{ old('usr_gender') == "Laki-Laki" ? 'selected' : '' }} value="Laki-laki"> Laki Laki </option>
                                <option {{ old('usr_gender') == "Perempuan" ? 'selected' : '' }} value="Perempuan"> Perempuan </option>
                            </select>
                            @error('usr_gender')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <label> No. WhatsApp <span style="color:red"> *</span></label>
                            <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" class="form-control form-control-rounded @error('usr_whatsapp_number') is-invalid @enderror" name="usr_whatsapp_number" placeholder="Masukan No. WhatsApp" value="{{ $staff_edit->usr_whatsapp_number }}" value="{{ $staff_edit->usr_whatsapp_number }}">
                            @error('usr_whatsapp_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    
                    <label style="margin-top: 20px;">Foto calon Guru<span style="color:red"> *</span></label>
                    <div class="form-group row">
                        <div class="col-sm-4">
                            @if(isset($staff_edit->usr_profile_picture))
                            <img src="{{ asset($staff_edit->usr_profile_picture) }}" class="img-thumbnail" id="tampil_picture" style="object-fit: cover; height: 200px; width: 200px"/>
                            @else
                            <img src="{{ asset('images/default_profile_picture_20210228.png') }}" class="img-thumbnail" id="tampil_picture" style="object-fit: cover; height: 200px; width: 200px"/>
                            @endif
                            <input type="file" name="usr_profile_picture" id="preview_gambar" class=" @error('isr_profile_picture') is-invalid @enderror" accept="image/x-png,image/gif,image/jpeg" onchange="document.getElementById('usr_profile_picture').value=this.value" /><br>
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
                            <label> Alamat <span style="color:red"> *</span></label>
                            <input type="text" name="usr_address" class="form-control form-control-rounded @error('usr_address') is-invalid @enderror" placeholder="Masukan Alamat" value="{{ $staff_edit->usr_address }}">
                            @error('usr_address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-sm-2">
                            <label> RT <span style="color:red"> *</span></label>
                            <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" name="usr_rt" class="form-control form-control-rounded @error('usr_rt') is-invalid @enderror" placeholder="Masukan Nomor RT" value="{{ $staff_edit->usr_rt }}">
                            @error('usr_rt')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-2">
                            <label> RW <span style="color:red"> *</span></label>
                            <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" name="usr_rw" class="form-control form-control-rounded @error('usr_rw') is-invalid @enderror" placeholder="Masukan Nomor RW" value="{{ $staff_edit->usr_rw }}">
                            @error('usr_rw')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <label>Desa/Kelurahan<span style="color:red"> *</span></label>
                            <input type="text" name="usr_rural_name" class="form-control form-control-rounded @error('usr_rural_name') is-invalid @enderror" placeholder="Masukan Desa/Kelurahan" value="{{ $staff_edit->usr_rural_name }}">
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
                            <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" name="usr_postal_code" class="form-control form-control-rounded @error('usr_postal_code') is-invalid @enderror" placeholder="Masukan Kode Pos" value="{{ $staff_edit->usr_postal_code }}">
                            @error('usr_postal_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>


                    <h4 class="form-header text-uppercase">
                        <i class=""></i>
                        Riwayat Pendidikan
                    </h4>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Tahun SD/Sederajat <span style="color:red;">*</span></label>
                            <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" class="form-control form-control-rounded @error('educational_background.year_grade_school') is-invalid @enderror year_picker" name="educational_background[year_grade_school]" placeholder="Masukan Tahun SD/Sederajat" value="@if(isset($staff_edit->educational_background['year_grade_school'])){{$staff_edit->educational_background['year_grade_school']}}@endif">
                            @error('educational_background.year_grade_school')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <label>Nama SD/Sederajat <span style="color:red;">*</span></label>
                            <input type="text" class="form-control form-control-rounded @error('educational_background.grade_school') is-invalid @enderror" name="educational_background[grade_school]" placeholder="Masukan Nama SD/Sederajat" value="@if(isset($staff_edit->educational_background['grade_school'])){{$staff_edit->educational_background['grade_school']}}@endif">
                            @error('educational_background.grade_school')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-sm-4">
                            <label>Tahun SMP/Sederajat <span style="color:red;">*</span></label>
                            <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" class="form-control form-control-rounded @error('educational_background.year_junior_high_school') is-invalid @enderror year_picker" name="educational_background[year_junior_high_school]" placeholder="Masukan Tahun SMP/Sederajat" value="@if(isset($staff_edit->educational_background['year_junior_high_school'])){{$staff_edit->educational_background['year_junior_high_school']}}@endif">
                            @error('educational_background.year_junior_high_school')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Nama SMP/Sederajat <span style="color:red;">*</span></label>
                            <input type="text" class="form-control form-control-rounded @error('educational_background.junior_high_school') is-invalid @enderror" name="educational_background[junior_high_school]" placeholder="Masukan Nama SMP/Sederajat" value="@if(isset($staff_edit->educational_background['junior_high_school'])){{$staff_edit->educational_background['junior_high_school']}}@endif">
                            @error('educational_background.junior_high_school')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-sm-4">
                            <label>Tahun SMA/Sederajat <span style="color:red;">*</span></label>
                            <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" class="form-control form-control-rounded @error('educational_background.year_senior_high_school') is-invalid @enderror year_picker" name="educational_background[year_senior_high_school]" placeholder="Masukan Tahun SMA/Sederajat" value="@if(isset($staff_edit->educational_background['year_senior_high_school'])){{$staff_edit->educational_background['year_senior_high_school']}}@endif">
                            @error('educational_background.year_senior_high_school')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <label>Nama SMA/Sederajat <span style="color:red;">*</span></label>
                            <input type="text" class="form-control form-control-rounded @error('educational_background.senior_high_school') is-invalid @enderror" name="educational_background[senior_high_school]" placeholder="Masukan Nama SMA/Sederajat" value="@if(isset($staff_edit->educational_background['senior_high_school'])){{$staff_edit->educational_background['senior_high_school']}}@endif">
                            @error('educational_background.senior_high_school')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                    </div>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label>Tahun Perguruan Tinggi</label>
                            <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" class="form-control form-control-rounded @error('educational_background.year_entry') is-invalid @enderror year_picker" name="educational_background[year_entry]" placeholder="Masukan Tahun Perguruan Tinggi" value="@if(isset($staff_edit->educational_background['year_entry'])){{$staff_edit->educational_background['year_entry']}}@endif">
                            @error('educational_background.year_entry')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <label>Nama Perguruan Tinggi</label>
                            <input type="text" class="form-control form-control-rounded @error('educational_background.college') is-invalid @enderror" name="educational_background[college]" placeholder="Masukan Nama Perguruan Tinggi" value="@if(isset($staff_edit->educational_background['college'])){{$staff_edit->educational_background['college']}}@endif">
                            @error('educational_background.college')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <label>Nama Fakultas</label>
                            <input type="text" class="form-control form-control-rounded @error('educational_background.faculty_name') is-invalid @enderror" name="educational_background[faculty_name]" placeholder="Masukan Nama Fakultas" value="@if(isset($staff_edit->educational_background['faculty_name'])){{$staff_edit->educational_background['faculty_name']}}@endif">
                            @error('educational_background.faculty_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                    </div>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label>Nama Jurusan</label>
                            <input type="text" class="form-control form-control-rounded @error('educational_background.faculty_major') is-invalid @enderror" name="educational_background[faculty_major]" placeholder="Masukan Nama Jurusan" value="@if(isset($staff_edit->educational_background['faculty_major'])){{$staff_edit->educational_background['faculty_major']}}@endif">
                            @error('educational_background.faculty_major')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <label>Tahun Lulus</label>
                            <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" class="form-control form-control-rounded @error('educational_background.year_graduated') is-invalid @enderror year_picker" name="educational_background[year_graduated]" placeholder="Masukan Tahun Lulus" value="@if(isset($staff_edit->educational_background['year_graduated'])){{$staff_edit->educational_background['year_graduated']}}@endif">
                            @error('educational_background.year_graduated')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <label>Gelar</label>
                            <input type="text" class="form-control form-control-rounded @error('educational_background.degree') is-invalid @enderror" name="educational_background[degree]" placeholder="Masukan Gelar" value="@if(isset($staff_edit->educational_background['degree'])){{$staff_edit->educational_background['degree']}}@endif">
                            @error('educational_background.degree')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <h4 class="form-header text-uppercase">
                        <i class=""></i>
                        Riwayat Bekerja
                    </h4>

                    <div class="form-group row">

                        <div class="col sm-4">
                            <label>Nama Pekerjaan </label>
                            <input type="text" class="form-control form-control-rounded @error('history_job.name') is-invalid @enderror"  name="history_job[name]" placeholder="Masukan Nama Pekerjaan" value="@if(isset($staff_edit->history_job['name'])){{$staff_edit->history_job['name']}}@endif">    
                            @error('history_job.name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col sm-4">
                            <label>Dari tahun/sampai </label>
                            <input type="text" class="form-control form-control-rounded @error('history_job.lenght_of_work') is-invalid @enderror"  name="history_job[lenght_of_work]" placeholder="Masukan Tahun" value="@if(isset($staff_edit->history_job['lenght_of_work'])){{$staff_edit->history_job['lenght_of_work']}}@endif">    
                            @error('history_job.lenght_of_work')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <h4 class="form-header text-uppercase">
                        <i class=""></i>
                        Keahlian
                    </h4>

                    <div class="form-group row">

                     <div class="col sm-4">
                         <label>Nama Keahlian </label>
                         <input type="text" class="form-control form-control-rounded @error('expertise.name') is-invalid @enderror"  name="expertise[name]" placeholder="Masukan Nama Keahlian" value="@if(isset($staff_edit->expertise['name'])){{$staff_edit->expertise['name']}}@endif">                                        
                         @error('expertise.name')
                         <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>                            

                    <div class="col sm-4">
                     <label>Nama Istansi/Lembaga </label>
                     <input type="text" class="form-control form-control-rounded @error('expertise.name_of_agency') is-invalid @enderror"  name="expertise[name_of_agency]" placeholder="Masukan Nama Istansi/Lembaga" value="@if(isset($staff_edit->expertise['name_of_agency'])){{$staff_edit->expertise['name_of_agency']}}@endif">                                        
                     @error('expertise.name_of_agency')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div> 
            </div>

            <h4 class="form-header text-uppercase">
                <i class=""></i>
                Lainnya <small>(Maksimal File Ukuran 2 MB)</small>
            </h4>

            <div class="row" style="margin-top: 30px;">
                <div class="col-sm-4">
                    <label class="col-form-label" for="exampleInputFile"> Upload Kartu Tanda Penduduk (KTP) <span style="color:red;">*</span></label>
                    @if(isset($staff_edit->other['identity_card']))
                    <p><a href="{{ url('download-file-staff/'. $staff_edit->other['identity_card']) }}"><i class="fa fa-file-word"></i>{{$staff_edit->other['identity_card']}}</a></p>
                    @endif
                    <div class="custom-file">
                        <input accept="image/x-png,image/gif,image/jpeg, application/pdf, .doc,.docx,application/msword," onchange="document.getElementById('other[identity_card]').value=this.value" type="file" name="other[identity_card]" class="@error('other[identity_card]') is-invalid @enderror" id="preview_gambar">
                        @error('other.identity_card')
                        <p>
                        <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                        </p>
                        @enderror   
                    </div>
                </div>

                <div class="col-sm-4">
                    <label class="col-form-label" for="exampleInputFile"> Upload Kartu Keluarga <span style="color:red;">*</span></label>
                    @if(isset($staff_edit->other['family_card']))
                    <p><a href="{{ url('download-file-staff/'. $staff_edit->other['family_card']) }}"><i class="fa fa-file-word"></i>{{$staff_edit->other['family_card']}}</a></p>
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
                    <label class="col-form-label" for="exampleInputFile"> Upload Ijazah Minimal SMA/SEDERAJAT Dilegalisir<span style="color:red;">*</span></label>
                    @if(isset($staff_edit->other['scholar_diploma']))
                    <p><a href="{{ url('download-file-staff/'. $staff_edit->other['scholar_diploma']) }}"><i class="fa fa-file-word"></i>{{$staff_edit->other['scholar_diploma']}}</a></p>
                    @endif
                    <div class="custom-file">
                    <input accept="image/x-png,image/gif,image/jpeg, application/pdf, .doc,.docx,application/msword," onchange="document.getElementById('other[scholar_diploma]').value=this.value" type="file" name="other[scholar_diploma]" class="@error('other[scholar_diploma]') is-invalid @enderror" id="preview_gambar">
                    @error('other.scholar_diploma')
                    <p>
                        <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                    </p>
                    @enderror
                </div>
            </div>
        </div>

            <div class="row" style="margin-top: 30px;">
                <div class="col-sm-4">
                    <label class="col-form-label" for="exampleInputFile"> Upload Curriculum vitae (CV)<span style="color:red;">*</span> </label>
                    @if(isset($staff_edit->other['curriculum_vitae']))
                    <p><a href="{{ url('download-file-staff/'. $staff_edit->other['curriculum_vitae']) }}"><i class="fa fa-file-word"></i>{{$staff_edit->other['curriculum_vitae']}}</a></p>
                    @endif
                    <div class="custom-file">
                    <input accept="image/x-png,image/gif,image/jpeg, application/pdf, .doc,.docx,application/msword," onchange="document.getElementById('other[curriculum_vitae]').value=this.value" type="file" name="other[curriculum_vitae]" class="@error('other[curriculum_vitae]') is-invalid @enderror" id="preview_gambar">
                    @error('other.curriculum_vitae')
                    <p>
                        <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                    </p>
                    @enderror
                </div>
                </div> 

                <div class="col-sm-4">
                    <label class="col-form-label" for="exampleInputFile"> Upload Surat Lamaran <span style="color:red;">*</span></label>
                    @if(isset($staff_edit->other['application_letter']))
                    <p><a href="{{ url('download-file-staff/'. $staff_edit->other['application_letter']) }}"><i class="fa fa-file-word"></i>{{$staff_edit->other['application_letter']}}</a></p>
                    @endif
                    <div class="custom-file">
                    <input accept="image/x-png,image/gif,image/jpeg, application/pdf, .doc,.docx,application/msword," onchange="document.getElementById('other[application_letter]').value=this.value" type="file" name="other[application_letter]" class="@error('other[application_letter]') is-invalid @enderror" id="preview_gambar">
                    @error('other.application_letter')
                    <p>
                        <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                    </p>
                    @enderror
                </div>
                </div>

                <div class="col-sm-4">
                    <label class="col-form-label" for="exampleInputFile"> Upload Resume <span style="color:red;">*</span></label>
                    @if(isset($staff_edit->other['resume']))
                    <p><a href="{{ url('download-file-staff/'. $staff_edit->other['resume']) }}"><i class="fa fa-file-word"></i>{{$staff_edit->other['resume']}}</a></p>
                    @endif
                    <div class="custom-file">
                    <input accept="image/x-png,image/gif,image/jpeg, application/pdf, .doc,.docx,application/msword," onchange="document.getElementById('other[resume]').value=this.value" type="file" name="other[resume]" class="@error('other[resume]') is-invalid @enderror" id="preview_gambar">
                    @error('other.resume')
                    <p>
                        <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                    </p>
                    @enderror
                </div>
            </div>
        </div>
    
                    <div class="form-footer">
                        <a href="{{url('staffs')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>   
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

    //   $(".submitForm").submit(function(e) {
    //     $(this).find("button[type='submit']").prop('disabled', true);
    //     $(".btnSubmit").attr("disabled", true);
    //     return true;
    // });

    $("#form-validate").validate({
        rules: {
            usr_email:{
                required: true
            },
            usr_phone_number:{
                required: true
            },
            usr_name:{
                required: true
            },
            "personal[nik]":{
                required: true,
                minlength: 10
            },
            usr_place_of_birth:{
                required: true,
            },
            usr_date_of_birth:{
                required: true
            },
            usr_gender:{
                required: true
            },
            usr_whatsapp_number:{
                required: true,
                minlength: 10
            },
            usr_religion:{
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
            "educational_background[year_grade_school]":{
                required: true,
                maxlength: 4
            },
            "educational_background[grade_school]":{
                required: true
            },
            "educational_background[year_junior_high_school]":{
                required: true,
                maxlength: 4
            },
            "educational_background[junior_high_school]":{
                required: true
            },
            "educational_background[year_senior_high_school]":{
                required: true,
                maxlength: 4,
            },
            "educational_background[senior_high_school]":{
                required: true
            },
            "educational_background[year_entry]":{
                maxlength: 4
            },
            "educational_background[year_graduated]":{
                maxlength: 4
            },
        },  
        messages: {
            usr_email:{
                required: "Email harus di isi"
            },
            usr_phone_number:{
                required: "Nomor Telepon harus di isi"
            },
            usr_name:{
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
            usr_whatsapp_number:{
                required: "No WhatsApp harus di isi",
                minlength: "Minimal 10 digit"
            },
            usr_religion:{
                required: "Agama harus di pilih"
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
            "educational_background[year_grade_school]":{
                required: "Tahun lulus SD sederajat harus di isi",
                maxlength: "Maksimal 4 digit"
            },
            "educational_background[grade_school]":{
                required: "Nama SD sederajat harus di isi"
            },
            "educational_background[year_junior_high_school]":{
                required: "Tahun lulus SMP sederajat harus di isi",
                maxlength: "Maksimal 4 digit"
            },
            "educational_background[junior_high_school]":{
                required: "Nama SMP sederajat harus di isi"
            },
            "educational_background[year_senior_high_school]":{
                required: "Tahun lulus SMA sederajat harus di isi",
                maxlength: "Maksimal 4 digit"
            },
            "educational_background[senior_high_school]":{
                required: "Nama SMA sederajat harus di isi"
            },
            "educational_background[year_entry]":{
                maxlength: "Maksimal 4 digit"
            },
            "educational_background[year_graduated]":{
                maxlength: "Maksimal 4 digit"
            },
        }
    });
});
</script>

<script>
    function bacaGambar(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#tampil_picture').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#preview_gambar").change(function() {
        bacaGambar(this);
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

<!--Bootstrap Datepicker Js-->
<script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script>
    $('#autoclose-datepicker').datepicker({
        autoclose: true,
        todayHighlight: true,
        format: "yyyy-mm-dd"
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