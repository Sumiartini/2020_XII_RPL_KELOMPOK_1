<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SMK Mahaputra - Tunggu Konfirmasi</title>
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
        html , body{
        max-width: 100%;
        overflow-x: hidden;
        }
        footer {
            color: #272727;
            text-align: center;
            margin-top: 10px;
            margin-bottom: 10px;
            border-top: 1px solid rgb(223, 223, 255);
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }
        .atas{
           padding: 20px 5px;
        }
        .haha {
            margin-right:40px;
            margin-left:40px;
          }
        .hihi {
          margin-right:40px;
          margin-left:40px;
        }
        .profile{
            object-fit: cover;
            width: 200px;
            height: 200px;
        }
        h4, h5{
          font-size: 18px;
        }
        /*desktop version*/
        @media (min-width: 992px){

        .haha {
            margin-left: 50px;
            margin-right: -110px;
          }
        .hihi {
          margin-left:120px;
          margin-right: -180px;
        }

        }

        /* Untuk Smartphone */
        @media all and (max-width: 670px) {
          .profile{
              object-fit: cover;
              width: 145px;
              height: 140px;
          }
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
</header>
<center>
<div style="margin-top:90px; " class="col-lg-10">
    <div class="card " style="box-shadow: 10px 10px 8px skyblue;">
        <div class="card-body atas" style="background-color: #599be2;">
            <h4 style="color: white; text-shadow: 1px 1px 2px white;"> DATA ANDA SUDAH TERSIMPAN</h4>
            <h5 style="color: white; text-shadow: 1px 1px 2px white;" >Data anda akan di proses, Mohon tunggu konfirmasi dari pihak sekolah.</h5>
            <h5 style="color: white; text-shadow: 1px 1px 2px white;" >Info lebih lanjut silahkan klik <a href="{{ url('download/download-file') }}"><i style="color: white;"><u>Disini</u></i></a></h5>
        </div>
    </div>
</div>
</center>

<div class="row">
        <div class="col-lg-5">
          <div class="card haha">
            <div class="card-body">
              <h5 class="card-title">Data Calon Siswa</h5>
              <div class="table-responsive">
               <table class=" table table-active">
                
                <tbody>
                  <tr>
                    <th >Nama Lengkap</th>
                    <td>:</td>
                    <td>{{ $student_prospective->stu_candidate_name }}</td>
                  </tr>

                  <tr>
                    <th>Email</th>
                    <td>:</td>
                    <td>{{ $student_prospective->usr_email }}</td>
                  </tr>

                  <tr>
                    <th>Jenis Kelamin</th>
                    <td>:</td>
                    <td>{{ $student_prospective->usr_gender }}</td>
                  </tr>
                  @if(isset($student_prospective->personal['nik']))
                  <tr>
                    <th>NIK Siswa</th>
                    <td>:</td>
                    <td>{{ $student_prospective->personal['nik'] }}</td>
                  </tr>
                  @endif
                  @if(isset($student_prospective->stu_nisn))
                  <tr>
                    <th>NISN</th>
                    <td>:</td>
                    <td>{{ $student_prospective->stu_nisn }}</td>
                  </tr>
                  @endif
                  <tr>
                    <th>No Telepon</th>
                    <td>:</td>
                    <td>{{ $student_prospective->usr_phone_number }}</td>
                  </tr>

                  <tr>
                    <th >No WhattsApp</th>
                    <td>:</td>
                    <td>{{ $student_prospective->usr_whatsapp_number }}</td>
                  </tr>
                  <tr>
                    <th>Tempat Lahir</th>
                    <td>:</td>
                    <td>{{ $student_prospective->usr_place_of_birth }}</td>
                  </tr>

                  <tr>
                    <th>Tanggal Lahir</th>
                    <td>:</td>
                    <td>{{ date('d M Y', strtotime($student_prospective->usr_date_of_birth )) }}</td>
                  </tr>

                  @if(isset($student_prospective->personal['birth_certificate_registration_no']))
                  <tr>
                    <th>No Registrasi Akta Lahir</th>
                    <td>:</td>
                    <td>{{ $student_prospective->personal['birth_certificate_registration_no'] }}</td>
                  </tr>
                  @endif
                  @if(isset($student_prospective->personal['living_together']))
                  <tr>
                    <th>Tinggal Bersama</th>
                    <td>:</td>
                    <td>{{ $student_prospective->personal['living_together'] }}</td>
                  </tr>
                  @endif
                  @if(isset($student_prospective->personal['status_of_residence']))
                  <tr>
                    <th>Status Tempat Tinggal</th>
                    <td>:</td>
                    <td>{{ $student_prospective->personal['status_of_residence'] }}</td>
                  </tr>
                  @endif
                  <tr>
                    <th>Asal Sekolah</th>
                    <td>:</td>
                    <td>{{ $student_prospective->stu_school_origin }}</td>
                  </tr> 
                  @if(isset($student_prospective->school_origin['npsn']))
                  <tr>
                    <th>NPSN Sekolah asal</th>
                    <td>:</td>
                    <td>{{ $student_prospective->school_origin['npsn'] }}</td>
                  </tr>
                  @endif
                  <tr>
                    <th>Jurusan yang diminati</th>
                    <td>:</td>
                    <td>{{ $student_prospective->mjr_name }}</td>
                  </tr>
                  @if(isset($student_prospective->personal['child']))
                  <tr>
                    <th>Anak Ke</th>
                    <td>:</td>
                    <td>{{ $student_prospective->personal['child'] }}</td>
                  </tr>
                  @endif
                  <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td>{{ $student_prospective->usr_religion }}</td>
                  </tr>
                  @if(isset($student_prospective->other['recomended_form']))
                  <tr>
                    <th>Rekomendasi Dari</th>
                    <td>:</td>
                    <td>{{ $student_prospective->other['recomended_from'] }}</td>
                  </tr>
                  @endif
                  <tr>
                    <th scope="row">
                      Foto Calon siswa</th>
                    <td>:</td>
                    <td><img src="{{ url('$student_prospective->usr_profile_picture')}}" class="img-thumbnail profile" alt="Profile Picture"/></td>
                  </tr>
                </tbody>
              </table>
            </div>
            </div>
            <div class="card-body">
              <h5 class="card-title">Data Persuratan</h5>
              <div class="table-responsive">
               <table class="table table-active">       
                <tbody>
                  @foreach($student as $data)
                  <tr>
                    <th >Provinsi</th>
                    <td>:</td>
                    <td>{{$data->prv_name}}</td>
                  </tr>
                  <tr>
                    <th>Kota/Kabupaten</th>
                    <td>:</td>
                    <td>{{$data->cit_name}}</td>
                  </tr>

                  <tr>
                    <th >Kecamatan</th>
                    <td>:</td>
                    <td>{{$data->dst_name}}</td>
                  </tr>
                  @endforeach
                  <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td>{{ $student_prospective->usr_address }}</td>
                  </tr>

                  <tr>
                    <th >RT</th>
                    <td>:</td>
                    <td>{{ $student_prospective->usr_rt }}</td>
                  </tr>
                  <tr>
                    <th>RW</th>
                    <td>:</td>
                    <td>{{ $student_prospective->usr_rw }}</td>
                  </tr>

                  <tr>
                    <th >Desa/Kelurahan</th>
                    <td>:</td>
                    <td>{{ $student_prospective->usr_rural_name }}</td>
                  </tr>
                  <tr>
                    <th>Kode pos</th>
                    <td>:</td>
                    <td>{{ $student_prospective->usr_postal_code }}</td>
                  </tr>
                  @if(isset($student_prospective->contact['living_together']))
                  <tr>
                    <th >Telepon rumah</th>
                    <td>:</td>
                    <td>{{ $student_prospective->contact['living_together'] }}</td>
                  </tr>
                  @endif
                  @if(isset($student_prospective->contact['email']))
                  <tr>
                    <th>Email rumah</th>
                    <td>:</td>
                    <td>{{ $student_prospective->contact['email'] }}</td>
                  </tr>
                  @endif
                </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>
        
    @if(isset($student_prospective->father_data))
      <div class="col-lg-5">
          <div class="card hihi">
            <div class="card-body">
              <h5 class="card-title"> Data Ayah </h5>
              <div class="table-responsive">
                <table class="table table-active">
                  <tbody>
                  @if(isset($student_prospective->father_data['name']))
                  <tr>
                    <th>Nama Ayah kandung</th>
                    <td>:</td>
                    <td>{{ $student_prospective->father_data['name'] }}</td>
                  </tr>
                  @endif

                  @if(isset($student_prospective->father_data['father_name']))
                  <tr>
                    <th>Nama Ayah Sesuai Ijazah</th>
                    <td>:</td>
                    <td>{{ $student_prospective->father_data['father_name'] }}</td>
                  </tr>
                  @endif

                  @if(isset($student_prospective->father_data['nik']))
                  <tr>
                    <th>NIK</th>
                    <td>:</td>
                    <td>{{ $student_prospective->father_data['nik'] }}</td>
                  </tr>
                  @endif
                  @if(isset($student_prospective->father_data['year_of_birth']))
                  <tr>
                    <th>Tahun lahir</th>
                    <td>:</td>
                    <td>{{ $student_prospective->father_data['year_of_birth'] }}</td>
                  </tr>
                  @endif

                  @if(isset($student_prospective->father_data['education']))
                  <tr>
                    <th>Pendidikan terakhir</th>
                    <td>:</td>
                    <td>{{ $student_prospective->father_data['education'] }}</td>
                  </tr>
                  @endif
                  @if(isset($student_prospective->father_data['profession']))
                  <tr>
                    <th>Pekerjaan</th>
                    <td>:</td>
                    <td>{{ $student_prospective->father_data['profession'] }}</td>
                  </tr>
                  @endif
                  @if(isset($student_prospective->father_data['monthly_income']))
                  <tr>
                    <th>Pendapatan perbulan</th>
                    <td>:</td>
                    <td>{{ $student_prospective->father_data['monthly_income'] }}</td>
                  </tr>
                  @endif
                  @if(isset($student_prospective->father_data['phone_number']))
                  <tr>
                    <th>Nomor telepon</th>
                    <td>:</td>
                    <td>{{ $student_prospective->father_data['phone_number'] }}</td>
                  </tr>
                  @endif
                  @if(isset($student_prospective->father_data['disability']))
                  <tr>
                    <th>Disabilitas</th>
                    <td>:</td>
                    <td>{{ $student_prospective->father_data['disability'] }}</td>
                  </tr>   
                  @endif               
               </tbody>
                </table>
              </div>
            </div>
            @endif
            @if(isset($student_prospective->mother_data))
             <div class="card-body">
              <h5 class="card-title"> Data Ibu </h5>
              <div class="table-responsive">
                <table class="table table-active">
                  <tbody>
                  @if(isset($student_prospective->mother_data['name']))
                  <tr>
                    <th>Nama Ibu kandung</th>
                    <td>:</td>
                    <td>{{ $student_prospective->mother_data['name'] }}</td>
                  </tr>
                  @endif
                  @if(isset($student_prospective->mother_data['nik']))
                  <tr>
                    <th>NIK</th>
                    <td>:</td>
                    <td>{{ $student_prospective->mother_data['nik'] }}</td>
                  </tr>
                  @endif
                  @if(isset($student_prospective->mother_data['year_of_birth']))
                  <tr>
                    <th>Tahun lahir</th>
                    <td>:</td>
                    <td>{{ $student_prospective->mother_data['year_of_birth'] }}</td>
                  </tr>
                  @endif
                  @if(isset($student_prospective->mother_data['education']))
                  <tr>
                    <th>Pendidikan terakhir</th>
                    <td>:</td>
                    <td>{{ $student_prospective->mother_data['education'] }}</td>
                  </tr>
                  @endif
                  @if(isset($student_prospective->mother_data['profession']))
                  <tr>
                    <th>Pekerjaan</th>
                    <td>:</td>
                    <td>{{ $student_prospective->mother_data['profession'] }}</td>
                  </tr>
                  @endif
                  @if(isset($student_prospective->mother_data['monthly_income']))
                  <tr>
                    <th>Pendapatan perbulan</th>
                    <td>:</td>
                    <td>{{ $student_prospective->mother_data['monthly_income'] }}</td>
                  </tr>
                  @endif
                  @if(isset($student_prospective->mother_data['phone_number']))
                  <tr>
                    <th>Nomor telepon</th>
                    <td>:</td>
                    <td>{{ $student_prospective->mother_data['phone_number'] }}</td>
                  </tr>
                  @endif
                  @if(isset($student_prospective->mother_data['disability']))
                  <tr>
                    <th>Disabilitas</th>
                    <td>:</td>
                    <td>{{ $student_prospective->mother_data['disability'] }}</td>
                  </tr> 
                  @endif             
                </tbody>
                </table>
              </div>
            </div>
            @endif
            @if(isset($student_prospective->guardian_data))
             <div class="card-body">
              <h5 class="card-title"> Data Wali </h5>
              <div class="table-responsive">
                <table class="table table-active">
                  
                  <tbody>
                  @if(isset($student_prospective->guardian_data['name']))
                  <tr>
                    <th>Nama</th>
                    <td>:</td>
                    <td>{{ $student_prospective->guardian_data['name'] }}</td>
                  </tr>
                  @endif
                  @if(isset($student_prospective->guardian_data['nik']))
                  <tr>
                    <th>NIK</th>
                    <td>:</td>
                    <td>{{ $student_prospective->guardian_data['nik'] }}</td>
                  </tr>
                  @endif
                  @if(isset($student_prospective->guardian_data['year_of_birth']))
                  <tr>
                    <th>Tahun lahir</th>
                    <td>:</td>
                    <td>{{ $student_prospective->guardian_data['year_of_birth'] }}</td>
                  </tr>
                  @endif
                  @if(isset($student_prospective->guardian_data['education']))
                  <tr>
                    <th>Pendidikan terakhir</th>
                    <td>:</td>
                    <td>{{ $student_prospective->guardian_data['education'] }}</td>
                  </tr>
                  @endif
                  @if(isset($student_prospective->guardian_data['profession']))

                  <tr>
                    <th>Pekerjaan</th>
                    <td>:</td>
                    <td>{{ $student_prospective->guardian_data['profession'] }}</td>
                  </tr>
                  @endif
                  @if(isset($student_prospective->guardian_data['monthly_income']))
                  <tr>
                    <th>Pendapatan perbulan</th>
                    <td>:</td>
                    <td>{{ $student_prospective->guardian_data['monthly_income'] }}</td>
                  </tr>
                  @endif
                  @if(isset($student_prospective->guardian_data['phone_number']))
                  <tr>
                    <th>Nomor telepon</th>
                    <td>:</td>
                    <td>{{ $student_prospective->guardian_data['phone_number'] }}</td>
                  </tr>
                  @endif
                  @if(isset($student_prospective->guardian_data['disability']))
                  <tr>
                    <th>Disabilitas</th>
                    <td>:</td>
                    <td>{{ $student_prospective->guardian_data['disability'] }}</td>
                  </tr> 
                  @endif             
                </tbody>
                </table>
              </div>
            </div>
            @endif
            @if(isset($student_prospective->achievement))
            <div class="card-body">
              <h5 class="card-title"> Prestasi </h5>
              <div class="table-responsive">
                <table class="table table-active">     
                  <tbody>
                  @if(isset($student_prospective->achievement['type']))
                  <tr>
                    <th>Jenis / Tipe prestasi</th>
                    <td>:</td>
                    <td>{{ $student_prospective->achievement['type'] }}</td>
                  </tr>
                  @endif
                  @if(isset($student_prospective->achievement['achievement_level']))
                  <tr>
                    <th scope="row">Tingkat</th>
                    <td>:</td>
                    <td>{{ $student_prospective->achievement['achievement_level'] }}</td>
                  </tr>
                  @endif
                  @if(isset($student_prospective->achievement['achievement_name']))
                  <tr>
                    <th>Nama prestasi</th>
                    <td>:</td>
                    <td>{{ $student_prospective->achievement['achievement_name'] }}</td>
                  </tr>
                  @endif
                  @if(isset($student_prospective->achievement['year']))
                  <tr>
                    <th>Tahun</th>
                    <td>:</td>
                    <td>{{ $student_prospective->achievement['year'] }}</td>
                  </tr>
                  @endif
                  @if(isset($student_prospective->achievement['organizer']))
                  <tr>
                    <th>Penyelenggara</th>
                    <td>:</td>
                    <td>{{ $student_prospective->achievement['organizer'] }}</td>
                  </tr>
                  @endif
              </tbody>
          </table>
      </div>
    </div>
    @endif
</div>
</div>

</div>

<footer>
    <div class="container">
        <div class="text-center" style="margin-top: 10px;">
            Copyright © 2021 PPDB Mahaputra
        </div>
    </div>
</footer>
<script src="{{ asset('assets/js/jquery.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>

</body>

</html>

      
