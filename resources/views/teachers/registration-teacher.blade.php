<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SMK Mahaputra - Formulir Guru</title>
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
    <header class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
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

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">


                        <form id="submitForm" autocomplete="off" method="POST" action="{{ url('teacher-registration') }}" novalidate="novalidate" enctype="multipart/form-data">
                            @csrf
                            <h4 class="form-header text-uppercase">
                                <i class=""></i>
                                Biodata Diri
                            </h4>

                            <div class="form-group row">

                                <div class="col-sm-4">
                                    <label>Nama Lengkap <span style="color:red;">*</span></label>
                                    <input type="text" class="form-control form-control-rounded @error('usr_name') is-invalid @enderror" id="input-10" name="usr_name" placeholder="Masukan Nama Lengkap" value="{{ old('usr_name') }}">
                                    @error('usr_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <label>NIK <span style="color:red;">*</span></label>
                                    <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" class="form-control form-control-rounded @error('usr_nik') is-invalid @enderror" id="input-10" name="usr_nik" placeholder="Masukan NIK" value="{{ old('usr_nik') }}">
                                    @error('usr_nik')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <label>NUPTK</label>
                                    <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" class="form-control form-control-rounded @error('tcr_nuptk') is-invalid @enderror" id="input-10" name="tcr_nuptk" placeholder="Masukan NUPTK" value="{{ old('tcr_nuptk') }}">
                                    @error('tcr_nuptk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <p style="font-size: 12px;">Boleh di isi boleh tidak</p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label>Tempat Lahir <span style="color:red;">*</span></label>
                                    <input type="text" class="form-control form-control-rounded @error('usr_place_of_birth') is-invalid @enderror" id="input-10" name="usr_place_of_birth" placeholder="Masukan Tempat Lahir" value="{{ old('usr_place_of_birth') }}">
                                    @error('usr_place_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-sm-4">
                                    <label>Tanggal Lahir <span style="color:red;">*</span></label>
                                    <input type="text" id="autoclose-datepicker" class="form-control form-control-rounded @error('usr_date_of_birth') is-invalid @enderror" name="usr_date_of_birth" placeholder="Tanggal/Bulan/Tahun" value="{{ old('usr_date_of_birth') }}">
                                    @error('usr_date_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-sm-4">
                                    <label> Agama <span style="color:red"> *</span></label>
                                    <select class="form-control form-control-rounded @error('usr_religion') is-invalid @enderror" name="usr_religion" id="basic-select" value="{{ old('usr_religion') }}">
                                        <option disabled="" {{ old('usr_religion') == "" ? 'selected' : '' }}> Pilih </option>
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
                                    <select name="usr_gender" class="form-control form-control-rounded @error('usr_gender') is-invalid @enderror" id="basic-select">
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
                                    <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" class="form-control form-control-rounded @error('usr_whatsapp_number') is-invalid @enderror" name="usr_whatsapp_number" placeholder="Masukan No. WhatsApp" value="{{ old('usr_whatsapp_number') }}" value="{{ old('usr_whatsapp_number') }}">
                                    @error('usr_whatsapp_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <h4 class="form-header text-uppercase">
                                <i class=""></i>
                                Data Persuratan
                            </h4>

                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label> Provinsi <span style="color:red"> *</span></label>

                                    <select name="prv_name" class="form-control form-control-rounded @error('prv_name') is-invalid @enderror" id="provinces">
                                        <option disabled="true" selected="true"> Pilih Provinsi </option>
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
                                        <option disabled checked="true" selected="true"> Pilih Kabupaten/Kota </option>
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
                                        <option disabled checked="true" selected="true"> Pilih Kecamatan </option>
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
                                    <input type="text" name="usr_rural_name" class="form-control form-control-rounded @error('usr_rural_name') is-invalid @enderror" placeholder="Masukan Desa/Kelurahan" value="{{ old('usr_rural_name') }}">
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
                            </div>


                            <h4 class="form-header text-uppercase">
                                <i class=""></i>
                                Riwayat Pendidikan
                            </h4>

                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label>Tahun SD/Sederajat <span style="color:red;">*</span></label>
                                    <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" class="form-control form-control-rounded @error('educational_background.year_grade_school') is-invalid @enderror" id="input-10" name="educational_background[year_grade_school]" placeholder="Masukan Tahun SD/Sederajat" value="{{ old('educational_background.year_grade_school') }}">
                                    @error('educational_background.year_grade_school')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <label>Nama SD/Sederajat <span style="color:red;">*</span></label>
                                    <input type="text" class="form-control form-control-rounded @error('educational_background.grade_school') is-invalid @enderror" id="input-10" name="educational_background[grade_school]" placeholder="Masukan Nama SD/Sederajat" value="{{ old('educational_background.grade_school') }}">
                                    @error('educational_background.grade_school')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-sm-4">
                                    <label>Tahun SMP/Sederajat <span style="color:red;">*</span></label>
                                    <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" class="form-control form-control-rounded @error('educational_background.year_junior_high_school') is-invalid @enderror" id="input-10" name="educational_background[year_junior_high_school]" placeholder="Masukan Tahun SMP/Sederajat" value="{{ old('educational_background.year_junior_high_school') }}">
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
                                    <input type="text" class="form-control form-control-rounded @error('educational_background.junior_high_school') is-invalid @enderror" id="input-10" name="educational_background[junior_high_school]" placeholder="Masukan Nama SMP/Sederajat" value="{{ old('educational_background.junior_high_school') }}">
                                    @error('educational_background.junior_high_school')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-sm-4">
                                    <label>Tahun SMA/Sederajat <span style="color:red;">*</span></label>
                                    <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" class="form-control form-control-rounded @error('educational_background.year_senior_high_school') is-invalid @enderror" id="input-10" name="educational_background[year_senior_high_school]" placeholder="Masukan Tahun SMA/Sederajat" value="{{ old('educational_background.year_senior_high_school') }}">
                                    @error('educational_background.year_senior_high_school')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <label>Nama SMA/Sederajat <span style="color:red;">*</span></label>
                                    <input type="text" class="form-control form-control-rounded @error('educational_background.senior_high_school') is-invalid @enderror" id="input-10" name="educational_background[senior_high_school]" placeholder="Masukan Nama SMA/Sederajat" value="{{ old('educational_background.senior_high_school') }}">
                                    @error('educational_background.senior_high_school')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>

                            <div class="form-group row">

                                <div class="col-sm-4">
                                    <label>Tahun Perguruan Tinggi<span style="color:red;">*</span></label>
                                    <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" class="form-control form-control-rounded @error('educational_background.year') is-invalid @enderror" id="input-10" name="educational_background[year]" placeholder="Masukan Tahun Perguruan Tinggi" value="{{ old('educational_background.year') }}">
                                    @error('educational_background.year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <label>Nama Perguruan Tinggi<span style="color:red;">*</span></label>
                                    <input type="text" class="form-control form-control-rounded @error('educational_background.college') is-invalid @enderror" id="input-10" name="educational_background[college]" placeholder="Masukan Nama Perguruan Tinggi" value="{{ old('educational_background.college') }}">
                                    @error('educational_background.college')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <label>Nama Fakultas<span style="color:red;">*</span></label>
                                    <input type="text" class="form-control form-control-rounded @error('educational_background.faculty_name') is-invalid @enderror" id="input-10" name="educational_background[faculty_name]" placeholder="Masukan Nama Fakultas" value="{{ old('educational_background.faculty_name') }}">
                                    @error('educational_background.faculty_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>

                            <div class="form-group row">

                                <div class="col-sm-4">
                                    <label>Nama Jurusan<span style="color:red;">*</span></label>
                                    <input type="text" class="form-control form-control-rounded @error('educational_background.faculty_major') is-invalid @enderror" id="input-10" name="educational_background[faculty_major]" placeholder="Masukan Nama Jurusan" value="{{ old('educational_background.faculty_major') }}">
                                    @error('educational_background.faculty_major')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <label>Tahun Lulus<span style="color:red;">*</span></label>
                                    <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" class="form-control form-control-rounded @error('educational_background.year') is-invalid @enderror" id="input-10" name="educational_background[year]" placeholder="Masukan Tahun Lulus" value="{{ old('educational_background.year') }}">
                                    @error('educational_background.year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <label>Gelar<span style="color:red;">*</span></label>
                                    <input type="text" class="form-control form-control-rounded @error('educational_background.degree') is-invalid @enderror" id="input-10" name="educational_background[degree]" placeholder="Masukan Gelar" value="{{ old('educational_background.degree') }}">
                                    @error('educational_background.degree')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <h4 class="form-header text-uppercase">
                                <i class=""></i>
                                RIWAYAT MENGAJAR
                            </h4>

                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label>Nama Sekolah</label>
                                    <input type="text" class="form-control form-control-rounded @error('teaching_history.school_name') is-invalid @enderror" id="input-10" name="teaching_history[school_name]" placeholder="Masukan Nama Sekolah" value="{{ old('teaching_history.school_name') }}">
                                    @error('teaching_history.school_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-sm-4">
                                    <label>Mata Pelajaran</label>
                                    <input type="text" class="form-control form-control-rounded @error('teaching_history.subject') is-invalid @enderror" id="input-10" name="teaching_history[subject]" placeholder="Masukan Mata Pelajaran" value="{{ old('teaching_history.subject') }}">
                                    @error('teaching_history.subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-sm-4">
                                    <label>Kelas/Tingkat</label>
                                    <input type="text" class="form-control form-control-rounded @error('teaching_history.grade_or_level') is-invalid @enderror" id="input-10" name="teaching_history[grade_or_level]" placeholder="Masukan Kelas/Tingkat" value="{{ old('teaching_history.grade_or_level') }}">
                                    @error('teaching_history.grade_or_level')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-sm-4">
                                    <label>Jumlah Jam</label>
                                    <input type="text" class="form-control form-control-rounded @error('teaching_history.number_of_hours') is-invalid @enderror" id="input-10" name="teaching_history[number_of_hours]" placeholder="Masukan Jumlah Jam" value="{{ old('teaching_history.number_of_hours') }}">
                                    @error('teaching_history.number_of_hours')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <label>Dari Tahun/Sampai</label>
                                    <input type="text" class="form-control form-control-rounded @error('teaching_history.from_year_to_year') is-invalid @enderror" id="input-10" name="teaching_history[from_year_to_year]" placeholder="Masukan Dari Tahun/Sampai" value="{{ old('teaching_history.from_year_to_year') }}">
                                    @error('teaching_history.from_year_to_year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <label>Status</label>
                                    <select class="form-control form-control-rounded @error('teaching_history.status') is-invalid @enderror" id="basic-select" name="teaching_history[status]">
                                        <option value="" {{ old('teaching_history.status') == "" ? 'selected' : '' }}>Pilih</option>
                                        <option value="Aktif" {{ old('teaching_history.status') == "Aktif" ? 'selected' : '' }}>Aktif</option>
                                        <option value="Tidak aktif" {{ old('teaching_history.status') == "Tidak aktif" ? 'selected' : '' }}>Tidak Aktif</option>
                                    </select>

                                    @error('teaching_history.status')
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
                                    <label> Upload Kartu Tanda Penduduk (KTP) <span style="color:red"> *</span></label>
                                    <input type="file" name="other[identity_card]">
                                    @error('other.identity_card')
                                    <p>
                                        <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                                    </p>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <label> Upload Kartu Keluarga <span style="color:red"> *</span></label>
                                    <input type="file" name="other[family_card]">
                                    @error('other.family_card')
                                    <p>
                                        <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                                    </p>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <label> Upload Ijazah Minimal D4/S1 dilegalisir <span style="color:red"> *</span></label>
                                    <input type="file" name="other[senior_high_school_diploma]">
                                    @error('other.senior_high_school_diploma')
                                    <p>
                                        <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                                    </p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row" style="margin-top: 30px;">
                                <div class="col-sm-4">
                                    <label> Upload Curriculum vitae (CV) <span style="color:red"> *</span></label>
                                    <input type="file" name="other[curriculum_vitae]">
                                    @error('other.curriculum_vitae')
                                    <p>
                                        <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                                    </p>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <label> Upload Surat Lamaran <span style="color:red"> *</span></label>
                                    <input type="file" name="other[application_letter]">
                                    @error('other.application_letter')
                                    <p>
                                        <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                                    </p>
                                    @enderror
                                </div>
                                <div class="col-sm-3">
                                    <label> Upload Resume <span style="color:red"> *</span></label>
                                    <input type="file" name="other[resume]">
                                    @error('other.resume')
                                    <p>
                                        <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                                    </p>
                                    @enderror
                                </div>
                            </div>

                            <label style="margin-top: 30px;">Foto calon Guru<span style="color:red"> *</span></label>
                            <div class="form-group row">

                                <div class="col-sm-4">
                                    <img class="img-thumbnail" id="tampil_picture" style="object-fit: cover; height: 200px; width: 200px" />
                                    <input type="file" name="usr_profile_picture" id="preview_gambar" class="img-thumbnail @error('isr_profile_picture') is-invalid @enderror" accept="image/x-png,image/gif,image/jpeg" style="display:none" onchange="document.getElementById('usr_profile_picture').value=this.value" /><br>

                                    <button type="button" id="usr_profile_picture" class="btn btn-outline-primary btn-sm waves-effect waves-light m-2" onclick="document.getElementById('preview_gambar').click()"> Pilih Gambar </button>
                                    @error('usr_profile_picture')
                                    <p>
                                        <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                                    </p>
                                    @enderror
                                </div>

                            </div>

                            <div class="form-footer">
                                <button id="btnSubmit" type="reset" class="btn btn-danger"><i class="fa fa-times"></i> BATAL</button>
                                <button id="btnSubmit" type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> SIMPAN</button>
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
                Copyright © 2018 Rocker Admin
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