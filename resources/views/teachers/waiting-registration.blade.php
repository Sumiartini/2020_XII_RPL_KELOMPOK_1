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
        </div>
    </div>
</div>
</center>

<div class="row">
        <div class="col-lg-5">
          <div class="card haha">
            <div class="card-body">
              <h5 class="card-title">Biodata Diri</h5>
              <div class="table-responsive">
               <table class=" table table-active">
                
                <tbody>
                  <tr>
                    <th >Nama Lengkap</th>
                    <td>:</td>
                    <td>{{ $teacher_prospective->usr_name }}</td>
                  </tr>
                  @if(isset($teacher_prospective->personal['nik']))
                  <tr>
                      <th>NIK</th>
                      <td>:</td>
                      <td>{{ $teacher_prospective->personal['nik']}}</td>
                  </tr>
                  @endif
                  @if(isset($teacher_prospective->tcr_nuptk))
                  <tr>
                      <th>NUPTK</th>
                      <td>:</td>
                      <td>{{ $teacher_prospective->tcr_nuptk }}</td>
                  </tr>
                  @endif
                  <tr>
                      <th>Tempat Lahir</th>
                      <td>:</td>
                      <td>{{ $teacher_prospective->usr_place_of_birth}}</td>
                  </tr>

                  <tr>
                      <th>Tanggal Lahir</th>
                      <td>:</td>
                      <td>{{ $teacher_prospective->usr_date_of_birth}}</td>
                  </tr>

                  <tr>
                      <th>Agama</th>
                      <td>:</td>
                      <td>{{ $teacher_prospective->usr_religion}}</td>
                  </tr>

                  <tr>
                      <th>Jenis Kelamin</th>
                      <td>:</td>
                      <td>{{ $teacher_prospective->usr_gender}}</td>
                  </tr>
                 
                  <tr>
                      <th>No. WhatsApp</th>
                      <td>:</td>
                      <td>{{ $teacher_prospective->usr_whatsapp_number}}</td>
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
                  @foreach($teacher as $data)
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
                    <td>{{ $teacher_prospective->usr_address }}</td>
                  </tr>

                  <tr>
                    <th >RT</th>
                    <td>:</td>
                    <td>{{ $teacher_prospective->usr_rt }}</td>
                  </tr>
                  <tr>
                    <th>RW</th>
                    <td>:</td>
                    <td>{{ $teacher_prospective->usr_rw }}</td>
                  </tr>

                  <tr>
                    <th >Desa/Kelurahan</th>
                    <td>:</td>
                    <td>{{ $teacher_prospective->usr_rural_name }}</td>
                  </tr>
                  <tr>
                    <th>Kode pos</th>
                    <td>:</td>
                    <td>{{ $teacher_prospective->usr_postal_code }}</td>
                  </tr>
                  
                </tbody>
            </table>
        </div>
        </div>

            <div class="card-body">
                <h5 class="card-title"> Riwayat Pendidikan </h5>
                <div class="table-responsive">
                <table class="table table-active">
                  <tbody>
                    @if(isset($teacher_prospective->educational_background['year_grade_school']))
                    <tr>
                        <th>Tahun SD/Sederajat</th>
                        <td>:</td>
                        <td>{{ $teacher_prospective->educational_background['year_grade_school'] }}</td>
                    </tr>
                    @endif
                    @if(isset($teacher_prospective->educational_background['grade_school']))
                    <tr>
                        <th>Nama SD/Sederajat</th>
                        <td>:</td>
                        <td>{{ $teacher_prospective->educational_background['grade_school'] }}</td>
                    </tr>
                    @endif
                    @if(isset($teacher_prospective->educational_background['year_junior_high_school']))
                    <tr>
                        <th>Tahun SMP/Sederajat</th>
                        <td>:</td>
                        <td>{{ $teacher_prospective->educational_background['year_junior_high_school'] }}</td>
                    </tr>
                    @endif
                    @if(isset($teacher_prospective->educational_background['junior_high_school']))
                    <tr>
                        <th>Nama SMP/Sederajat</th>
                        <td>:</td>
                        <td>{{ $teacher_prospective->educational_background['junior_high_school'] }}</td>
                    </tr>
                    @endif
                    @if(isset($teacher_prospective->educational_background['year_senior_high_school']))
                    <tr>
                        <th>Tahun SMA/Sederajat</th>
                        <td>:</td>
                        <td>{{ $teacher_prospective->educational_background['year_senior_high_school'] }}</td>
                    </tr>
                    @endif
                    @if(isset($teacher_prospective->educational_background['senior_high_school']))
                    <tr>
                        <th>Nama SMA/Sederajat</th>
                        <td>:</td>
                        <td>{{ $teacher_prospective->educational_background['senior_high_school'] }}</td>
                    </tr>
                    @endif
                    @if(isset($teacher_prospective->educational_background['year']))
                    <tr>
                        <th>Tahun Perguruan Tinggi</th>
                        <td>:</td>
                        <td>{{ $teacher_prospective->educational_background['year'] }}</td>
                    </tr>
                    @endif
                    @if(isset($teacher_prospective->educational_background['faculty_name']))
                    <tr>
                        <th>Nama Fakultas</th>
                        <td>:</td>
                        <td>{{ $teacher_prospective->educational_background['faculty_name'] }}</td>
                    </tr>
                    @endif
                    @if(isset($teacher_prospective->educational_background['faculty_major']))
                    <tr>
                        <th>Nama Jurusan</th>
                        <td>:</td>
                        <td>{{ $teacher_prospective->educational_background['faculty_major'] }}</td>
                    </tr>
                    @endif
                    @if(isset($teacher_prospective->educational_background['year']))
                    <tr>
                        <th>Tahun Lulus</th>
                        <td>:</td>
                        <td>{{ $teacher_prospective->educational_background['year'] }}</td>
                    </tr>
                    @endif
                    @if(isset($teacher_prospective->educational_background['degree']))
                    <tr>
                        <th>Gelar</th>
                        <td>:</td>
                        <td>{{ $teacher_prospective->educational_background['degree'] }}</td>
                    </tr>
                    @endif
                  </tbody>
                </table>
                </div>
            </div>
          </div>
        </div>

        <div class="col-lg-5">
          <div class="card hihi">
            <div class="card-body">
                <h5 class="card-title"> Riwayat Mengajar </h5>
                <div class="table-responsive">
                <table class="table table-active">
                  <tbody>
                    @if(isset($teacher_prospective->teaching_history['school_name']))
                    <tr>
                        <th>Nama Sekolah</th>
                        <td>:</td>
                        <td>{{ $teacher_prospective->teaching_history['school_name']}}</td>
                    </tr>
                    @endif
                    @if(isset($teacher_prospective->teaching_history['subject']))
                    <tr>
                        <th>Mata Pelajaran</th>
                        <td>:</td>
                        <td>{{ $teacher_prospective->teaching_history['subject']}}</td>
                    </tr>
                    @endif
                    @if(isset($teacher_prospective->teaching_history['grade_or_level']))
                    <tr>
                        <th>Kelas/Tingkat</th>
                        <td>:</td>
                        <td>{{ $teacher_prospective->teaching_history['grade_or_level']}}</td>
                    </tr>
                    @endif
                    @if(isset($teacher_prospective->teaching_history['number_of_hours']))
                    <tr>
                        <th>Jumlah Jam</th>
                        <td>:</td>
                        <td>{{ $teacher_prospective->teaching_history['number_of_hours']}}</td>
                    </tr>
                    @endif
                    @if(isset($teacher_prospective->teaching_history['from_year_to_year']))
                    <tr>
                        <th>Dari Tahun/Sampai</th>
                        <td>:</td>
                        <td>{{ $teacher_prospective->teaching_history['from_year_to_year']}}</td>
                    </tr>
                    @endif
                    @if(isset($teacher_prospective->teaching_history['status']))
                    <tr>
                        <th>Status</th>
                        <td>:</td>
                        <td>{{ $teacher_prospective->teaching_history['status']}}</td>
                    </tr>
                    @endif
                  </tbody>
                </table>
                </div>
            </div>

            <div class="card-body">
              <h5 class="card-title"> Lainnya </h5>
              <div class="table-responsive">
                <table class="table table-active">
                  <body>
                       <tr>
                        <th scope="row">
                            Foto Calon Guru</th>
                        <td>:</td>
                        <td><img src="{{ asset($teacher_prospective->usr_profile_picture)}}" class="img-thumbnail profile" alt="Profile Picture"/></td>
                    </tr>
                  </body>
                </table>
              </div>
            </div>

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

      
