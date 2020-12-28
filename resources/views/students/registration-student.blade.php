<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Formulir Siswa</title>
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
                    <form id="submitForm" autocomplete="off" method="POST" action="{{ url('student-registration') }}" novalidate="novalidate">
                        @csrf
                        <h4 class="form-header text-uppercase">
                            <i class="  "></i>
                            Data Calon Siswa
                        </h4>

                        <div class="form-group row">

                            <div class="col-sm-4">
                                <label> Nama Lengkap <span style="color:red"> *</span></label>
                                <input type="text" class="form-control form-control-rounded @error('usr_name') is-invalid @enderror" id="input-10" name="usr_name" placeholder="Masukan Nama Lengkap" value="{{ old('usr_name') }}">
                                <p style="font-size: 12px;"> Sesuaikan dengan nama di ijazah SD/SMP </p>
                                @error('usr_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
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
                                <input type="text" class="form-control form-control-rounded @error('std_nisn') is-invalid @enderror" id="input-10" name="std_nisn" placeholder="Masukan Nomor NISN" value="{{ old('std_nisn') }}">
                                @error('std_nisn')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                        </div>


                        <div class="form-group row">

                            <div class="col-sm-4">
                                <label> Nomor Telepon<span style="color:red"> *</span></label>
                                <input type="text" class="form-control form-control-rounded @error('usr_phone_number') is-invalid @enderror" id="input-10" name="usr_phone_number" placeholder="Masukan Nomor Telepon" value="{{ old('usr_phone_number') }}">
                                @error('usr_phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-sm-4">
                                <label> No. WhatsApp <span style="color:red"> *</span></label>
                                <input type="text" class="form-control form-control-rounded @error('usr_whatsapp_number') is-invalid @enderror" id="input-10" name="usr_whatsapp_number" placeholder="Masukan No. WhatsApp" value="{{ old('usr_whatsapp_number') }}">>
                                @error('usr_whatsapp_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-sm-4">
                                <label> Tempat Lahir <span style="color:red"> *</span></label>
                                <input type="text" name="usr_place_of_birth" class="form-control form-control-rounded @error('usr_place_of_birth') is-invalid @enderror" id="input-10" placeholder="Masukan Tempat Lahir" value="{{ old('usr_place_of_birth') }}">
                                @error('usr_place_of_birth')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label> Tanggal Lahir <span style="color:red"> *</span></label>
                                <input type="text" name="usr_date_of_birth" id="autoclose-datepicker" class="form-control form-control-rounded @error('usr_date_of_birth') is-invalid @enderror" placeholder="Tanggal/Bulan/Tahun" value="{{ old('usr_date_of_birth') }}">
                                @error('usr_date_of_birth')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-sm-4">
                                <label> No Registrasi Akta Lahir </label>
                                <input type="text" class="form-control form-control-rounded @error('personal[birth_certificate_registration_no]') is-invalid @enderror" id="input-10" name="personal[birth_certificate_registration_no]" placeholder="Masukan No Registrasi Akta Lahir" value="{{ old('personal[birth_certificate_registration_no]') }}">
                                @error('personal[birth_certificate_registration_no]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-sm-4">
                                <label> Tinggal Bersama <span style="color:red"> *</span></label>
                                <select class="form-control form-control-rounded @error('personal[living_together]') is-invalid @enderror" name="personal[living_together]" id="basic-select" value="{{ old('personal[living_together]') }}">
                                    <option disabled="" selected=""> Pilih </option>
                                    <option value="Orang Tua"> Orang Tua </option>
                                    <option value="Wali"> Wali </option>
                                    <option value="Kos"> Kos </option>
                                    <option value="Asrama"> Asrama </option>
                                    <option value="Panti Asuhan"> Panti Asuhan </option>
                                    <option value="Pesantren"> Pesantren </option>
                                </select>
                                @error('personal[living_together]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                        </div>


                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label> Asal Sekolah <span style="color:red"> *</span></label>
                                <input type="text" name="stu_school_origin" class="form-control form-control-rounded @error('stu_school_origin') is-invalid @enderror" id="basic-select" placeholder="Masukan Asal Sekolah" value="{{ old('stu_school_origin') }}">
                                @error('stu_school_origin')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-sm-4">
                                <label> Jurusan <span style="color:red"> *</span></label>
                                <select class="form-control form-control-rounded @error('stu_major') is-invalid @enderror" name="stu_major" id="basic-select" value="{{ old('stu_major') }}">
                                    <option disabled="" selected=""> Pilih </option>
                                    <option value="Rekayasa Perangkat Lunak"> Rekayasa Perangkat Lunak </option>
                                    <option value="Multimedia"> Multimedia </option>
                                </select>
                                @error('stu_major')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-sm-2">
                                <label> Anak Ke <span style="color:red"> *</span></label>
                                <input type="text" name="personal[child]" class="form-control form-control-rounded @error('personal[child]') is-invalid @enderror" id="input-10" placeholder="Anak Ke" value="{{ old('personal[child]') }}">
                                @error('personal[child]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
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
                                @error('usr_religion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                        </div>

                        <h4 class="form-header text-uppercase">
                            <i class=""></i>
                            Data Ayah
                        </h4>

                        <div class="form-group row">

                            <div class="col-sm-6">
                                <label> Nama Ayah Kandung <span style="color:red"> *</span></label>
                                <input type="text" name="father_data[name]" class="form-control form-control-rounded @error('father_data[name]') is-invalid @enderror" id="input-10" placeholder="Masukan Nama Lengkap" value="{{ old('father_data[name]') }}">
                                @error('father_data[name]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-sm-4">
                                <label> Nomor Identitas (NIK) <span style="color:red"> *</span></label>
                                <input type="text" name="father_data[nik]" class="form-control form-control-rounded @error('father_data[nik]') is-invalid @enderror" id="input-10" placeholder="Masukan Nomor NIK" value="{{ old('father_data[nik]') }}">
                                @error('father_data[nik]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-sm-2">
                                <label> Tahun Lahir <span style="color:red"> *</span></label>
                                <select class="form-control form-control-rounded @error('father_data[year_of_birth]') is-invalid @enderror" name="father_data[year_of_birth]" id="basic-select" value="{{ old('father_data[year_of_birth]') }}">
                                    <option disabled="" selected=""> Pilih </option>
                                    <option value="2000"> 2000 </option>
                                    <option value="2001"> 2001 </option>
                                </select>
                                @error('father_data[year_of_birth]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label>Pendidikan Terakhir<span style="color:red"> *</span></label>
                                <select name="father_data[education]" class="form-control form-control-rounded @error('father_data[education]') is-invalid @enderror" id="basic-select" value="{{ old('father_data[education]') }}">
                                    <option disabled="" selected=""> Pilih </option>
                                    <option value="SD - Sederajat"> SD - Sederajat </option>
                                    <option value="SMP - Sederajat"> SMP - Sederajat </option>
                                    <option value="SMA - Sederajat"> SMA - Sederajat </option>
                                    <option value="KULIAH - Sederajat"> KULIAH - Sederajat </option>
                                </select>
                                @error('father_data[education]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-sm-4">
                                <label>Pekerjaan<span style="color:red"> *</span></label>
                                <select name="father_data[profession]" class="form-control form-control-rounded @error('father_data[profession]') is-invalid @enderror" id="basic-select" value="{{ old('father_data[profession]') }}">
                                    <option disabled="" selected="">Pilih</option>
                                    <option value="Buruh"> Buruh </option>
                                    <option value="Wirausaha"> Wirausaha </option>
                                </select>
                                @error('father_data[profession]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                            <div class="col-sm-4">
                                <label>Pendapatan Perbulan<span style="color:red"> *</span></label>
                                <select name="father_data[monthly_income]" class="form-control form-control-rounded @error('father_data[monthly_income]') is-invalid @enderror" id="basic-select" value="{{ old('father_data[monthly_income]') }}">
                                    <option disabled="" selected="">Pilih</option>
                                    <option value="kurang dari Rp. 500.000"> kurang dari Rp. 500.000 </option>
                                    <option value="Rp. 500.000 - Rp.1.000.000"> Rp. 500.000 - Rp.1.000.000 </option> 
                                    <option value="Rp. 1.000.000 - Rp. 2.000.000"> Rp. 1.000.000 - Rp. 2.000.000 </option>
                                    <option value="Rp. 2.000.000 - Rp. 3.000.000"> Rp. 2.000.000 - Rp. 3.000.000 </option>
                                    <option value="Rp. 3.000.000 - Rp. 4.000.000"> Rp. 3.000.000 - Rp. 4.000.000 </option>
                                    <option value="lebih dari Rp. 4.000.000"> lebih dari Rp. 4.000.000 </option>
                                </select>
                                @error('father_data[monthly_income]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-sm-4">
                                <label> Nomor Telepon <span style="color:red"> *</span></label>
                                <input type="text" name="father_data[phone_number]" class="form-control form-control-rounded @error('father_data[phone_number]') is-invalid @enderror" id="input-10" placeholder="Masukan Nomor Telepon" value="{{ old('father_data[phone_number]') }}">
                                @error('father_data[phone_number]')
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

                            <div class="col-sm-6">
                                <label> Nama Ibu Kandung <span style="color:red"> *</span></label>
                                <input type="text" name="mother_data[name]" class="form-control form-control-rounded @error('mother_data[name]') is-invalid @enderror" id="input-10" placeholder="Masukan Nama Lengkap" value="{{ old('mother_data[name]') }}">
                                @error('mother_data[name]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-sm-4">
                                <label> Nomor Identitas (NIK) <span style="color:red"> *</span></label>
                                <input type="text" name="mother_data[nik]" class="form-control form-control-rounded @error('mother_data[nik]') is-invalid @enderror" id="input-10" placeholder="Masukan Nomor NIK" value="{{ old('mother_data[nik]') }}">
                                @error('mother_data[nik]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-sm-2">
                                <label> Tahun Lahir <span style="color:red"> *</span></label>
                                <select name="mother_data[year_of_birth]" class="form-control form-control-rounded @error('mother_data[year_of_birth') is-invalid @enderror" id="basic-select" value="{{ old('mother_data[year_of_birth]') }}">
                                    <option disabled="" selected=""> Pilih </option>
                                    <option value="2000"> 2000 </option>
                                    <option value="2001"> 2001 </option>
                                </select>
                                @error('mother_data[year_of_birth]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-sm-4">
                                <label>Pendidikan Terakhir<span style="color:red"> *</span></label>
                                <select name="mother_data[education]" class="form-control form-control-rounded @error('mother_data[education]') is-invalid @enderror" id="basic-select" value="{{ old('mother_data[education]') }}">
                                    <option disabled="" selected="">Pilih</option>
                                    <option value="SD - Sederajat"> SD - Sederajat </option>
                                    <option value="SMP - Sederajat"> SMP - Sederajat </option>
                                    <option value="SMA - Sederajat"> SMA - Sederajat </option>
                                    <option value="KULIAH - Sederajat"> KULIAH - Sederajat </option>
                                </select>
                                @error('mother_data[education]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-sm-4">
                                <label> Pekerjaan <span style="color:red"> *</span></label>

                                <select name="mother_data[profession]" class="form-control form-control-rounded @error('mother_data[profession]') is-invalid @enderror" id="basic-select" value="{{ old('mother_data[profession]') }}">
                                    <option disabled="" selected=""> Pilih </option>
                                    <option value="Buruh"> Buruh </option>
                                    <option value="Wirausaha"> Wirausaha </option>
                                    <option value="Ibu Rumah Tangga"> Ibu Rumah Tangga </option>
                                </select>
                                @error('mother_data[profession]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                            <div class="col-sm-4">
                                <label>Pendapatan Perbulan<span style="color:red"> *</span></label>
                                <select name="mother_data[monthly_income]" class="form-control form-control-rounded @error('mother_data[monthly_income]') is-invalid @enderror" id="basic-select" value="{{ old('mother_data[monthly_income]') }}">
                                    <option disabled="" selected="">Pilih</option>
                                    <option value="kurang dari Rp. 500.000"> kurang dari Rp. 500.000 </option>
                                    <option value="Rp. 500.000 - Rp.1.000.000"> Rp. 500.000 - Rp.1.000.000 </option> 
                                    <option value="Rp. 1.000.000 - Rp. 2.000.000"> Rp. 1.000.000 - Rp. 2.000.000 </option>
                                    <option value="Rp. 2.000.000 - Rp. 3.000.000"> Rp. 2.000.000 - Rp. 3.000.000 </option>
                                    <option value="Rp. 3.000.000 - Rp. 4.000.000"> Rp. 3.000.000 - Rp. 4.000.000 </option>
                                    <option value="lebih dari Rp. 4.000.000"> lebih dari Rp. 4.000.000 </option>
                                </select>
                                @error('mother_data[monthly_income]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label> Nomor Telepon <span style="color:red"> *</span></label>
                                <input type="text" name="mother_data[phone_number]" class="form-control form-control-rounded @error('mother_data[phone_number') is-invalid @enderror" id="input-10" placeholder="Masukan Nomor Telepon" value="{{ old('mother_data[phone_number]') }}">
                                @error('mother_data[phone_number]')
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

                            <div class="col-sm-6">
                                <label> Nama Lengkap </label>
                                <input type="text" name="guardian_data[name]" class="form-control form-control-rounded @error('guardian_data[name]') is-invalid @enderror" id="input-10" name="firstname" placeholder="Masukan Nama Lengkap" value="{{ old('guardian_data[name]') }}">
                                @error('guardian_data[name]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-sm-4">
                                <label> Nomor Identitas (NIK) </label>
                                <input type="text" name="guardian_data[nik]" class="form-control form-control-rounded @error('guardian_data[nik]') is-invalid @enderror" id="input-10" name="firstname" placeholder="Masukan Nomor NIK" value="{{ old('guardian_data[nik]') }}">
                                @error('guardian_data[nik]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-sm-2">
                                <label> Tahun Lahir </label>
                                <select name="guardian_data[year_of_birth]" class="form-control form-control-rounded @error('guardian_data[year_of_birth]') is-invalid @enderror" id="basic-select" value="{{ old('guardian_data[year_of_birth]') }}">
                                    <option disabled="" selected="">Pilih</option>
                                    <option value="2000"> 2000 </option>
                                    <option value="2001"> 2001 </option>
                                </select>
                                @error('guardian_data[year_of_birth]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">

                            <div class="col-sm-4">
                                <label>Pendidikan Terakhir</label>
                                <select name="guardian_data[education]" class="form-control form-control-rounded @error('guardian_data[education]') is-invalid @enderror" id="basic-select" value="{{ old('guardian_data[education]') }}"> 
                                    <option disabled="" selected="">Pilih</option>
                                    <option value="SD - Sederajat"> SD - Sederajat </option>
                                    <option value="SMP - Sederajat"> SMP - Sederajat </option>
                                    <option value="SMA - Sederajat"> SMA - Sederajat </option>
                                    <option value="KULIAH - Sederajat"> KULIAH - Sederajat </option>
                                </select>
                                @error('guardian_data[education]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-sm-4">
                                <label> Pekerjaan </label>
                                <select name="guardian_data[profession]" class="form-control form-control-rounded @error('guardian_data[profession]') is-invalid @enderror" id="basic-select" value="{{ old('guardian_data[profession]') }}">
                                    <option disabled="" selected=""> Pilih </option>
                                    <option value="Buruh"> Buruh </option>
                                    <option value="Wirausaha"> Wirausaha </option>
                                </select>
                                @error('guardian_data[profession]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-sm-4">
                                <label>Pendapatan Perbulan</label>
                                <select name="guardian_data[monthly_income]" class="form-control form-control-rounded @error('guardian_data[monthly_income]') is-invalid @enderror" id="basic-select" value="{{ old('guardian_data[monthly_income]') }}">
                                    <option disabled="" selected="">Pilih</option>
                                    <option value="kurang dari Rp. 500.000"> kurang dari Rp. 500.000 </option>
                                    <option value="Rp. 500.000 - Rp.1.000.000"> Rp. 500.000 - Rp.1.000.000 </option> 
                                    <option value="Rp. 1.000.000 - Rp. 2.000.000"> Rp. 1.000.000 - Rp. 2.000.000 </option>
                                    <option value="Rp. 2.000.000 - Rp. 3.000.000"> Rp. 2.000.000 - Rp. 3.000.000 </option>
                                    <option value="Rp. 3.000.000 - Rp. 4.000.000"> Rp. 3.000.000 - Rp. 4.000.000 </option>
                                    <option value="lebih dari Rp. 4.000.000"> lebih dari Rp. 4.000.000 </option>
                                </select>
                                @error('guardian_data[monthly_income]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label> Nomor Telepon <span style="color:red"> *</span></label>
                                <input type="text" name="guardian_data[phone_number]" class="form-control form-control-rounded @error('guardian_data[phone_number]') is-invalid @enderror" id="input-10" placeholder="Masukan Nomor Telepon" value="{{ old('guardian_data[phone_number]') }}">
                                @error('guardian_data[phone_number]')
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
                            informasi Kontak
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
                                <label> Kota <span style="color:red"> *</span></label>
                                <input type="text" name="cit_name" class="form-control form-control-rounded @error('cit_name') is-invalid @enderror" id="" placeholder="Masukan Kota" value="{{ old('cit_name') }}">
                                @error('cit_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-sm-4">
                                <label> Kabupaten <span style="color:red"> *</span></label>
                                <input type="text" name="dst_name" class="form-control form-control-rounded @error('dst_name') is-invalid @enderror" id="" placeholder="Masukan Kabupaten" value="{{ old('dst_name') }}">
                                @error('dst_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-sm-6">
                                <label> Alamat <span style="color:red"> *</span></label>
                                <input type="text" name="usr_address" class="form-control form-control-rounded @error('usr_address') is-invalid @enderror" id="input-10" placeholder="Masukan Alamat" value="{{ old('usr_address') }}">
                                @error('usr_address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-sm-2">
                                <label> Kode Pos <span style="color:red"> *</span></label>
                                <input type="text" name="usr_postal_code" class="form-control form-control-rounded @error('usr_postal_code') is-invalid @enderror" id="input-10" placeholder="Masukan Kode Pos" value="{{ old('usr_postal_code') }}">
                                @error('usr_postal_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-sm-2">
                                <label> RT <span style="color:red"> *</span></label>
                                <input type="text" name="usr_rt" class="form-control form-control-rounded @error('usr_rt') is-invalid @enderror" id="input-10" placeholder="Masukan Nomor RT" value="{{ old('usr_rt') }}">
                                @error('usr_rt')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-sm-2">
                                <label> RW <span style="color:red"> *</span></label>
                                <input type="text" name="usr_rw" class="form-control form-control-rounded @error('usr_rw') is-invalid @enderror" id="input-10" placeholder="Masukan Nomor RW" value="{{ old('usr_rw') }}">
                                @error('usr_rw')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-sm-6">
                                <label> Telepon Rumah </label>
                                <input type="text" name="contact[landline_number]" class="form-control form-control-rounded @error('contact[landline_number]') is-invalid @enderror" id="input-10" placeholder="Masukan Nomor Telepon Rumah" value="{{ old('contact[landline_number]') }}">
                                @error('contact[landline_number]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-sm-6">
                                <label> Email </label>
                                <input type="text" name="contact[email]" class="form-control form-control-rounded @error('contact[email]') is-invalid @enderror" id="input-10" placeholder="Masukan Alamat Email" value="{{ old('contact[email]') }}">
                                <p style="font-size: 12px;"  > Email anggota keluarga yang aktif </p>
                                @error('contact[email])
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                        </div>

                        <div class="form-group row">

                            <div class="col-sm-4">
                                <label> Berapa KM <span style="color:red"> *</span></label>
                                <select name="periodic_data[many_km]" class="form-control form-control-rounded @error('periodic_data[many_km]') is-invalid @enderror" id="basic-select" value="{{ old('periodic_data[many_km]') }}">
                                    <option disabled="" selected=""> Pilih </option>
                                    <option value="0,5"> 0,5 KM </option>
                                    <option value="1"> 1 KM </option>
                                </select>
                                @error('periodic_data[many_km]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-sm-4">
                                <label> Waktu Tempuh <span style="color:red"> *</span></label>
                                <input type="text" name="periodic_data[travel_time_to_school]" class="form-control form-control-rounded @error('periodic_data[travel_time_to_school]') is-invalid @enderror" id="input-10" placeholder="Masukan Dalam Satuan Jam/Menit" value="{{ old('periodic_data[travel_time_to_school]') }}">
                                @error('periodic_data[travel_time_to_school]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-sm-4">
                                <label> Jumlah Saudara Kandung <span style="color:red"> *</span></label>
                                <input type="text" name="periodic_data[number_of_sibling]" class="form-control form-control-rounded @error('periodic_data[number_of_sibling]') is-invalid @enderror" id="input-10" placeholder="Masukan Jumlah Saudara Kandung" value="{{ old('periodic_data[number_of_sibling]') }}"> 
                                @error('periodic_data[number_of_sibling]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                        </div>

                        <h4 class="form-header text-uppercase">
                            <i class=""></i>
                            Prestasi
                        </h4>
                        <div class="form-group row">

                            <div class="col-sm-3">
                                <label> Jenis </label> <br>

                                <div class="col-md-2 col-sm-4 col-xs-6 demo-col">
                                    <div class="icheck-primary">
                                        <input name="achievement[type]" value="Sains" type="checkbox" id="primary1" name="primary" />
                                        <label for="primary1"> Sains </label>
                                    </div>
                                    <div class="icheck-primary">
                                        <input name="achievement[type]" value="Seni" type="checkbox" id="primary2" name="primary" />
                                        <label for="primary2"> Seni </label>
                                    </div>
                                    <div class="icheck-primary">
                                        <input name="achievement[type]" value="Olahraga" type="checkbox" id="primary3" name="primary" />
                                        <label for="primary3"> Olahraga </label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <label> Dan lain-lain </label>
                                    <input type="text" name="achievement[type]" class="form-control form-control-rounded @error('usr_email') is-invalid @enderror" id="input-10" placeholder="Masukkan jenis prestasi" value="{{ old('mother_data[name]') }}">
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <label> Tingkat </label> <br>

                                <div class="col-md-2 col-sm-4 col-xs-6 demo-col">
                                    <div class="icheck-primary">
                                        <input type="checkbox" id="tingkat1" value="Sekolah" name="achievement[achievement_level]" />
                                        <label for="tingkat1"> Sekolah </label>
                                    </div>
                                    <div class="icheck-primary">
                                        <input type="checkbox" id="tingkat2" value="Kecamatan" name="achievement[achievement_level]" />
                                        <label for="tingkat2"> Kecamatan </label>
                                    </div>
                                    <div class="icheck-primary">
                                        <input type="checkbox" id="tingkat3" value="Kabupaten" name="achievement[achievement_level]" />
                                        <label for="tingkat3"> Kabupaten </label>
                                    </div>
                                    <div class="icheck-primary">
                                        <input type="checkbox" id="tingkat4" value="Provinsi" name="achievement[achievement_level]" />
                                        <label for="tingkat4"> Provinsi </label>
                                    </div>
                                    <div class="icheck-primary">
                                        <input type="checkbox" id="tingkat5" value="Nasional" name="achievement[achievement_level]" />
                                        <label for="tingkat5"> Nasional </label>
                                    </div>
                                    <div class="icheck-primary">
                                        <input type="checkbox" id="tingkat6" value="Internasional" name="achievement[achievement_level]" />
                                        <label for="tingkat6"> Internasional </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div>
                                <label> Nama Prestasi </label>
                                <input type="text" name="achievement[achievement_name]" class="form-control form-control-rounded @error('achievement[achievement_name]') is-invalid @enderror col-sm-12" id="input-10" placeholder="Nama Prestasi" value="{{ old('achievement[achievement_name]') }}">
                                @error('achievement_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                </div>

                                <div>
                                <label> Tahun </label>
                                <input type="text" name="achievement[year]" class="form-control form-control-rounded @error('achievement[year]') is-invalid @enderror col-sm-3" id="input-10" placeholder="Tahun" value="{{ old('achievement[year]') }}">
                                @error('achievement[year]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                </div>
                                
                                <div>
                                <label> Penyelenggara </label>
                                <input type="text" name="achievement[organizer]" class="form-control form-control-rounded @error('achievement[organizer]') is-invalid @enderror col-sm-12" id="input-10" placeholder="Nama Penyelenggara Kegiatan" value="{{ old('achievement[organizer]') }}">
                                @error('achievement[organizer]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                </div>
                            </div>
                        </div>

                        <h4 class="form-header text-uppercase">
                            <i class="fa fa-image-o"></i>
                            Lainnya<span style="color:red"> *</span>
                        </h4>

                        <div class="form-group row">

                            <div class="col-sm-4">
                                <img src="#" class="img-thumbnail" id="tampil_picture" style="object-fit: cover; height: 200px; width: 200px"/> 
                                <input type="file" name="usr_profile_picture" id="preview_gambar" class="img-thumbnail" accept="image/x-png,image/gif,image/jpeg" style="display:none" onchange="document.getElementById('usr_profile_picture').value=this.value" /><br>

                                <button type="button" id="usr_profile_picture" class="btn btn-outline-primary btn-sm waves-effect waves-light m-2" onclick="document.getElementById('preview_gambar').click()"> Pilih Gambar </button>

                            </div>



                        </div>

                        <div class="form-footer">
                            <button type="reset" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL </button>
                            <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> SAVE </button>
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
    $().ready(function() {

        $("#personal-info").validate();

            // validate signup form on keyup and submit
            $("#signupForm").validate({
                rules: {
                    firstname: "required",
                    lastname: "required",
                    username: {
                        required: true,
                        minlength: 2
                    },
                    password: {
                        required: true,
                        minlength: 5
                    },
                    confirm_password: {
                        required: true,
                        minlength: 5,
                        equalTo: "#password"
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    contactnumber: {
                        required: true,
                        minlength: 10
                    },
                    topic: {
                        required: "#newsletter:checked",
                        minlength: 2
                    },
                    agree: "required"
                },
                messages: {
                    firstname: "Please enter your firstname",
                    lastname: "Please enter your lastname",
                    username: {
                        required: "Please enter a username",
                        minlength: "Your username must consist of at least 2 characters"
                    },
                    password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long"
                    },
                    confirm_password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long",
                        equalTo: "Please enter the same password as above"
                    },
                    email: "Please enter a valid email address",
                    contactnumber: "Please enter your 10 digit number",
                    agree: "Please accept our policy",
                    topic: "Please select at least 2 topics"
                }
            });

        });
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
        todayHighlight: true
    });

    $('#inline-datepicker').datepicker({
        todayHighlight: true
    });

    $('#dateragne-picker .input-daterange').datepicker({});
</script>


</body>

</html>