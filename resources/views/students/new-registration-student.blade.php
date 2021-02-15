<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SMK Mahaputra - Formulir Siswa</title>
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
    <style>
        footer {
            color: #272727;
            text-align: center;
            padding: 12px 30px;
            margin-bottom: -10px;
            margin-top: 10px;
            border-top: 1px solid rgb(223, 223, 255);
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }
    </style>
</head>

<body>
    <header class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('assets/images/mahaputra.jfif') }}" style="width: 50px;" height="50px;"> {{ config('app.name', 'Laravel') }}
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ __('Register') }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('register-student') }}">Siswa</a>
                            <a class="dropdown-item" href="{{ url('register-teacher') }}">Guru</a>
                            <a class="dropdown-item" href="{{ url('register-staff') }}">Staff TU</a>
                        </div>
                    </li>
                    @endif
                    @else


                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->usr_name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</header><br>


<div class="container-fluid" style="margin-top: 80px">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form id="form-validate" autocomplete="off" method="POST" action="{{ url('student-registration') }}" novalidate="novalidate" enctype="multipart/form-data">
                        @csrf
                        <h4 style="text-align: center;">FORMULIR PESERTA DIDIK BARU TAHUN PELAJARAN 2021-2022</h4>
                         <div class="form-group row">
                          <div class="col-sm-4">
                                <label> Jurusan yang diminati <span style="color:red"> *</span></label>
                                <select class="form-control form-control-rounded @error('stu_major_id') is-invalid @enderror" name="stu_major_id" id="basic-select" value="{{ old('stu_major_id') }}">

                                    <option disabled="" {{ old('stu_major_id') == "" ? 'selected' : '' }}> Pilih </option>
                                    @foreach($majors as $major)
                                    <option {{ old('stu_major_id') == $major->mjr_id ? 'selected' : '' }} value="{{ $major->mjr_id }}">{{ $major->mjr_name }}</option>
                                    @endforeach

                                </select>
                                @error('stu_major_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <h4 class="form-header text-uppercase" style="margin-top: 20px">
                            <i class="  "></i>
                            Data Calon Peserta Didik
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
                                <label> Nomor Identitas Kependudukan (NIK) <span style="color:red"> *</span></label>
                                <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" name="personal[nik]" class="form-control form-control-rounded @error('personal.nik') is-invalid @enderror" placeholder="Masukan Nomor NIK" value="{{ old('personal.nik') }}">
                                @error('personal.nik')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <p style="font-size: 12px;"> Sesuaikan dengan kartu keluarga </p>
                            </div>


                            <div class="col-sm-4">
                                <label> Jenis Kelamin <span style="color:red"> *</span></label>
                                <select name="usr_gender" class="form-control form-control-rounded @error('usr_gender') is-invalid @enderror">
                                    <option disabled="" {{ old('usr_gender') == "" ? 'selected' : '' }}> Pilih </option>
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
                                <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" class="form-control form-control-rounded @error('usr_whatsapp_number') is-invalid @enderror" name="usr_whatsapp_number" placeholder="Masukan No. WhatsApp" value="{{ old('usr_whatsapp_number') }}">
                                @error('usr_whatsapp_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">

                             <div class="col-sm-4">
                                <label> No Telepon siswa <span style="color:red"> *</span></label>
                                <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" class="form-control form-control-rounded @error('usr_phone_number') is-invalid @enderror" name="usr_phone_number" placeholder="Masukan No. WhatsApp" value="{{ old('usr_phone_number') }}">
                                @error('usr_phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-sm-4">
                                <label> Agama <span style="color:red"> *</span></label>
                                <select class="form-control form-control-rounded @error('usr_religion') is-invalid @enderror" name="usr_religion" value="{{ old('usr_religion') }}">
                                    <option disabled="" {{ old('usr_religion') == "" ? 'selected' : '' }} > Pilih </option>
                                    <option {{ old('usr_religion') == "Islam" ? 'selected' : '' }}  value="Islam"> Islam </option>
                                    <option {{ old('usr_religion') == "Protestan" ? 'selected' : '' }}  value="Protestan"> Protestan </option>
                                    <option {{ old('usr_religion') == "Katolik" ? 'selected' : '' }}  value="Katolik"> Katolik </option>
                                    <option {{ old('usr_religion') == "Hindu" ? 'selected' : '' }}  value="Hindu"> Hindu </option>
                                    <option {{ old('usr_religion') == "Budha" ? 'selected' : '' }}  value="Budha"> Budha </option>
                                    <option {{ old('usr_religion') == "Khonghucu" ? 'selected' : '' }}  value="Khonghucu"> Khonghucu </option>
                                </select>
                                @error('usr_religion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                           
                        </div>


                        <h4 class="form-header text-uppercase">
                            <i class=""></i>
                            Sekolah Asal (Sekolah SMP/MTS)
                        </h4>

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label> Nama Sekolah <span style="color:red"> *</span></label>
                                <input type="text" name="stu_school_origin" class="form-control form-control-rounded @error('stu_school_origin') is-invalid @enderror" placeholder="Masukan Asal Sekolah" value="{{ old('stu_school_origin') }}">
                                @error('stu_school_origin')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-sm-4">
                                <label> NPSN <span style="color:red"> *</span></label>
                                <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" name="school_origin[npsn]" class="form-control form-control-rounded @error('school_origin.npsn') is-invalid @enderror" placeholder="Masukan NPSN" value="{{ old('school_origin.npsn') }}">
                                @error('school_origin.npsn')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                        </div>

                        <h4 class="form-header text-uppercase">
                            <i class=""></i>
                            Tempat Tinggal
                        </h4>

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label> Provinsi <span style="color:red"> *</span></label>

                                <select name="prv_name" class="form-control form-control-rounded @error('prv_name') is-invalid @enderror" id="provinces">
                                    <option disabled="true" selected="true"> Pilih </option>
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

                                <select name="cit_name" class="form-control form-control-rounded @error('cit_name') is-invalid @enderror" id="cities">
                                    <option disabled checked="true" selected="true"> Pilih </option>
                                </select>
                                @error('cit_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-sm-4">
                                <label> Kecamatan <span style="color:red"> *</span></label>

                                <select name="dst_name" class="form-control form-control-rounded @error('dst_name') is-invalid @enderror" id="districts">
                                    <option disabled checked="true" selected="true"> Pilih  </option>
                                </select>
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
                            <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" name="usr_postal_code" value="" class="form-control form-control-rounded @error('usr_postal_code') is-invalid @enderror" placeholder="Masukan Kode Pos" value="{{ old('usr_postal_code') }}">
                            @error('usr_postal_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                         <div class="col-sm-4">
                                <label> Tinggal Bersama <span style="color:red"> *</span></label>
                                <select class="form-control form-control-rounded @error('personal.living_together') is-invalid @enderror" name="personal[living_together]">
                                    <option disabled=""  {{ old('personal.living_together') == "" ? 'selected' : '' }}> Pilih </option>
                                    <option {{ old('personal.living_together') == "Orang Tua" ? 'selected' : '' }}  value="Orang Tua"> Orang Tua </option>
                                    <option {{ old('personal.living_together') == "Wali" ? 'selected' : '' }}  value="Wali"> Wali </option>
                                    <option {{ old('personal.living_together') == "Kos" ? 'selected' : '' }}  value="Kos"> Kos </option>
                                    <option {{ old('personal.living_together') == "Asrama" ? 'selected' : '' }}  value="Asrama"> Asrama </option>
                                    <option {{ old('personal.living_together') == "Panti Asuhan" ? 'selected' : '' }}  value="Panti Asuhan"> Panti Asuhan </option>
                                    <option {{ old('personal.living_together') == "Pesantren" ? 'selected' : '' }}  value="Pesantren"> Pesantren </option>
                                </select>
                                @error('personal.living_together')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                        <div class="col-sm-4">
                            <label> Status Tempat Tinggal <span style="color:red"> *</span> </label>
                            <select class="form-control form-control-rounded @error('personal.status_of_residence') is-invalid @enderror" name="personal[status_of_residence]">
                                <option disabled=""  {{ old('personal.status_of_residence') == "" ? 'selected' : '' }}> Pilih </option>
                                <option  {{ old('personal.status_of_residence') == "Milik Pribadi" ? 'selected' : '' }} value="Milik Sendiri"> Milik Pribadi </option>
                                <option  {{ old('personal.status_of_residence') == "Sewa" ? 'selected' : '' }} value="Sewa"> Sewa </option>
                            </select>
                            @error('personal.status_of_residence')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                    </div>
                       
                        <h4 class="form-header text-uppercase">
                            <i class=""></i>
                            Data Orang Tua
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
                                <p style="font-size: 12px;">sesuai akta kelahiran</p>
                            </div>


                            <div class="col-sm-4">
                                <label> Nomor Telepon Ayah <span style="color:red"> *</span></label>
                                <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  type="text" name="father_data[phone_number]" class="form-control form-control-rounded @error('mother_data.phone_number') is-invalid @enderror" placeholder="Masukan Nama Lengkap" value="{{ old('mother_data.phone_number') }}">
                                @error('mother_data.phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                            <div class="col-sm-4">
                                <label> Nama Ayah <span style="color:red"> *</span></label>
                                <input type="text" name="father_data[father_name]" class="form-control form-control-rounded @error('father_data.father_name') is-invalid @enderror" placeholder="Masukan Nama Lengkap" value="{{ old('father_data.father_name') }}">
                                @error('father_data.father_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <p style="font-size: 12px;">Nama ayah di ijazah sd/smp</p>
                                
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-sm-4">
                                <label> Nama Ibu Kandung <span style="color:red"> *</span></label>
                                <input type="text" name="mother_data[name]" class="form-control form-control-rounded @error('mother_data.name') is-invalid @enderror" placeholder="Masukan Nama Lengkap" value="{{ old('mother_data.name') }}">
                                @error('mother_data.name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <p style="font-size: 12px;">sesuai akta kelahiran</p>
                            </div>


                            <div class="col-sm-4">
                                <label> Nomor Telepon <span style="color:red"> *</span></label>
                                <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  type="text" name="mother_data[phone_number]" class="form-control form-control-rounded @error('mother_data.phone_number') is-invalid @enderror" placeholder="Masukan Nama Lengkap" value="{{ old('mother_data.phone_number') }}">
                                @error('mother_data.phone_number')
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

                    <div class="row">
                        <div class="col-sm-4">
                            <label> Upload Surat Tanda Kelulusan SMP dilegalisir <span style="color:red"> *</span></label>
                            <input accept="image/x-png,image/gif,image/jpeg, application/pdf, .doc,.docx,application/msword," type="file" name="other[certificate_of_graduation]">
                            @error('other.certificate_of_graduation')
                            <p>
                                <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                            </p>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <label> Upload Ijazah SMP/MTs dilegalisir <span style="color:red"> *</span></label>
                            <input accept="image/x-png,image/gif,image/jpeg, application/pdf, .doc,.docx,application/msword," type="file" name="other[junior_high_school_diploma]">
                            @error('other.junior_high_school_diploma')
                            <p>
                                <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                            </p>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <label> Upload Ijazah SD/Mi dilegalisir <span style="color:red"> *</span></label>
                            <input accept="image/x-png,image/gif,image/jpeg, application/pdf, .doc,.docx,application/msword," type="file" name="other[elementary_school_diploma]">
                            @error('other.elementary_school_diploma')
                            <p>
                                <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                            </p>
                            @enderror
                        </div>
                    </div>


                    <div class="row" style="margin-top: 40px;">
                        <div class="col-sm-4">
                            <label> Upload Akte Kelahiran <span style="color:red"> *</span></label>
                            <input accept="image/x-png,image/gif,image/jpeg, application/pdf, .doc,.docx,application/msword," type="file" name="other[birth_certificate]">
                            @error('other.birth_certificate')
                            <p>
                                <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                            </p>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <label> Upload Kartu Keluarga <span style="color:red"> *</span></label>
                            <input accept="image/x-png,image/gif,image/jpeg, application/pdf, .doc,.docx,application/msword," type="file" name="other[family_card]">
                            @error('other.family_card')
                            <p>
                                <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                            </p>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <label> Upload Keterangan Domisili</label>
                            <input accept="image/x-png,image/gif,image/jpeg, application/pdf, .doc,.docx,application/msword," type="file" name="other[domicile_statement]">
                            @error('other.domicile_statement')
                            <p>
                                <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                            </p>
                            @enderror
                            <p style="font-size: 12px;">(Apabila tempat tinggal tidak sesuai dengan kartu keluarga)</p>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 20px;">
                        <div class="col-sm-4">
                            <label> Upload KTP Ayah <span style="color:red"> *</span></label>
                            <input accept="image/x-png,image/gif,image/jpeg, application/pdf, .doc,.docx,application/msword," type="file" name="other[id_card_father]">
                            @error('other.id_card_father')
                            <p>
                                <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                            </p>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <label> Upload KTP Ibu <span style="color:red"> *</span></label>
                            <input accept="image/x-png,image/gif,image/jpeg, application/pdf, .doc,.docx,application/msword," type="file" name="other[id_card_mother]">
                            @error('other.id_card_mother')
                            <p>
                                <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                            </p>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <label> Upload Surat Kesehatan Badan </label>
                            <input accept="image/x-png,image/gif,image/jpeg, application/pdf, .doc,.docx,application/msword," type="file" name="other[health_certificate]">
                            @error('other.health_certificate')
                            <p>
                                <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                            </p>
                            @enderror
                            <p style="font-size: 12px;">(Keterangan disesuaikan keadaan yang sebenar-benarnya)</p>
                        </div>

                    </div>

                    <div class="row" style="margin-top: 30px;">
                        <div class="col-sm-4">
                            <label> Upload Surat Kesehatan Mata </label>
                            <input accept="image/x-png,image/gif,image/jpeg, application/pdf, .doc,.docx,application/msword," type="file" name="other[eye_health_letter]">
                            @error('other.eye_health_letter')
                            <p>
                                <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                            </p>
                            @enderror
                            <p style="font-size: 12px;">(Keterangan disesuaikan keadaan yang sebenar-benarnya)</p>
                        </div>
                        <div class="col-sm-4">
                            <label> Upload Kartu PIP/KIP/Keterangan Kematian </label>
                            <input accept="image/x-png,image/gif,image/jpeg, application/pdf, .doc,.docx,application/msword," type="file" name="other[card]">
                             @error('other.card')
                            <p>
                                <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                            </p>
                            @enderror
                            <p style="font-size: 12px;">(Apabila ada)</p>
                        </div>
                        <div class="col-sm-4">
                            <label> Upload Sertifikat/Piagam Penghargaan </label>
                            <input accept="image/x-png,image/gif,image/jpeg, application/pdf, .doc,.docx,application/msword," type="file" name="other[certificate]">
                             @error('other.certificate')
                            <p>
                                <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                            </p>
                            @enderror
                            <p style="font-size: 12px;">(Apabila ada)</p>
                        </div>
                    </div>

                    <label for="input-8" style="margin-top: 30px;">Foto calon siswa<span style="color:red"> *</span></label>
                        <div class="form-group row">

                            <div class="col-sm-4">
                                <img class="img-thumbnail" id="tampil_picture" style="object-fit: cover; height: 200px; width: 200px"/> 
                                <input type="file" name="usr_profile_picture" id="preview_gambar" class=" @error('usr_profile_picture') is-invalid @enderror" accept="image/x-png,image/gif,image/jpeg" onchange="document.getElementById('usr_profile_picture').value=this.value" /><br>

                                <!-- <button type="button" id="usr_profile_picture" class="btn btn-outline-primary btn-sm waves-effect waves-light m-2" onclick="document.getElementById('preview_gambar').click()"> Pilih Gambar </button> -->
                                @error('usr_profile_picture')
                                <p>
                                    <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                                </p>
                                @enderror
                            </div>

                        </div>

                    <input type="checkbox" name="terms_and_conditions">
                       <label>Demikian formulir ini saya buat dengan sebenar-benarnya sesuai dengan petunjuk pengisian dan dapat dipertanggung jawabkan di kemudian hari </label>
                
                    <div class="form-footer">    
                        <button type="reset" class="btn btn-danger"><i class="fa fa-times"></i> BATAL </button>
                        <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> SIMPAN </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<footer>
    <div class="container">
        <div class="text-center">
            Copyright © 2021 PPDB Mahaputra
        </div>
    </div>
</footer>


<!--Start Back To Top Button-->
<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
<!--End Back To Top Button-->

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
    $().ready(function() {

    //   $(".submitForm").submit(function(e) {
    //     $(this).find("button[type='submit']").prop('disabled', true);
    //     $(".btnSubmit").attr("disabled", true);
    //     return true;
    // });

    $("#form-validate").validate({
        rules: {
            stu_major_id:{
                required: true
            },
            stu_candidate_name:{
                required: true
            },
            usr_place_of_birth:{
                required: true,
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
            "other[certificate_of_graduation]":{
                required: true
            },
            "other[junior_high_school_diploma]":{
                required: true,
            },
            "other[elementary_school_diploma]":{
                required: true
            },
            "other[birth_certificate]":{
                required: true
            },
            "other[family_card]":{
                required: true
            },
            "other[id_card_father]":{
                required: true
            },
            "other[id_card_mother]":{
                required: true
            },
            usr_profile_picture:{
                required:true
            },
            terms_and_conditions:{
                required: true
            },

        },  
        messages: {
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
                required: "Data lahir harus di isi"
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
            usr_phone_number:{
                required: "No Hp harus di isi",
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
            "father_data[father_name]":{
                required: "Nama ayah sesuai ijazah harus di isi"
            },
            "mother_data[name]":{
                required: "Nama ibu wajib di isi"
            },
            "mother_data[phone_number]":{
                required: "Nomor telepon ibu wajib di isi",
                minlength: "Minimal 10 digit"
            },
            "other[certificate_of_graduation]":{
                required: "Surat tanda kelulusan smp harus di upload"
            },
            "other[junior_high_school_diploma]":{
                required: "Ijazah SMP harus di upload",
            },
            "other[elementary_school_diploma]":{
                required: "Ijazah SD harus di upload"
            },
            "other[birth_certificate]":{
                required: "Akte kelahiran harus di upload"
            },
            "other[family_card]":{
                required: "Kartu keluarga harus di upload"
            },
            "other[id_card_father]":{
                required: "KTP ayah harus di upload"
            },
            "other[id_card_mother]":{
                required: "KTP ibu harus di upload"
            },
            usr_profile_picture:{
                required: "Foto calon siswa tidak boleh kosong"
            },
            terms_and_conditions:{
                required: "&nbsp S&K harus di centang"
            }

        }
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


</body>

</html>