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
            padding: 12px 30px;
            margin-bottom: -10px;
            margin-top: 10px;
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
                  <tr class="table-active">
                    <th >Nama Lengkap</th>
                    <td>:</td>
                    <td>Ahmad Suherman</td>
                  </tr>
                  <tr>
                    <th scope="row">Jenis Kelamin</th>
                    <td>:</td>
                    <td>Laki-laki</td>
                  </tr>

                  <tr class="table-active">
                    <th>NISN</th>
                    <td>:</td>
                    <td>1234567899</td>
                  </tr>
                  <tr>
                    <th scope="row">No Telepon</th>
                    <td>:</td>
                    <td>089543221123</td>
                  </tr>


                  <tr class="table-active">
                    <th >No WhattsApp</th>
                    <td>:</td>
                    <td>089543221123</td>
                  </tr>
                  <tr>
                    <th scope="row">Tempat Lahir</th>
                    <td>:</td>
                    <td>Bandung</td>
                  </tr>


                  <tr class="table-active">
                    <th>Tanggal Lahir</th>
                    <td>:</td>
                    <td>20-04-2003</td>
                  </tr>
                  <tr>
                    <th scope="row">No Registrasi Akta Lahir</th>
                    <td>:</td>
                    <td>123455666788</td>
                  </tr>


                  <tr class="table-active">
                    <th>Tinggal Bersama</th>
                    <td>:</td>
                    <td>Orang Tua</td>
                  </tr>
                  <tr>
                    <th scope="row">Asal Sekolah</th>
                    <td>:</td>
                    <td>SMPN 2 Katapang</td>
                  </tr>

                  <tr class="table-active">
                    <th>Jurusan yang diminati</th>
                    <td>:</td>
                    <td>Multimedia</td>
                  </tr>
                  <tr>
                    <th scope="row">Anak Ke</th>
                    <td>:</td>
                    <td>1</td>
                  </tr>

                  <tr class="table-active">
                    <th>Agama</th>
                    <td>:</td>
                    <td>Islam</td>
                  </tr>
                </tbody>
              </table>
            </div>
            </div>

            <div class="card-body">
              <h5 class="card-title">Data Persuratan</h5>
              <div class="table-responsive">
               <table class=" table table-active">       
                <tbody>
                  <tr class="table-active">
                    <th >Provinsi</th>
                    <td>:</td>
                    <td>Jawa Barat</td>
                  </tr>
                  <tr>
                    <th scope="row">Kota/Kabupaten</th>
                    <td>:</td>
                    <td>Bandung</td>
                  </tr>

                  <tr class="table-active">
                    <th >Kecamatan</th>
                    <td>:</td>
                    <td>Katapang</td>
                  </tr>
                  <tr>
                    <th scope="row">Alamat</th>
                    <td>:</td>
                    <td>Kp. Sompok</td>
                  </tr>

                  <tr class="table-active">
                    <th >Rt</th>
                    <td>:</td>
                    <td>01</td>
                  </tr>
                  <tr>
                    <th scope="row">Rw</th>
                    <td>:</td>
                    <td>02</td>
                  </tr>

                  <tr class="table-active">
                    <th >Desa/Kelurahan</th>
                    <td>:</td>
                    <td>Sangkanhurip</td>
                  </tr>
                  <tr>
                    <th scope="row">Kode pose</th>
                    <td>:</td>
                    <td>90876</td>
                  </tr>

                  <tr class="table-active">
                    <th >Telepon rumah</th>
                    <td>:</td>
                    <td>09876564323</td>
                  </tr>
                  <tr>
                    <th scope="row">email</th>
                    <td>:</td>
                    <td>rumah@gmail.com</td>
                  </tr>
                </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>
        

      <div class="col-lg-5">
          <div class="card hihi">
            <div class="card-body">
              <h5 class="card-title"> Data Ayah </h5>
              <div class="table-responsive">
                <table class="table table-active">
                  
                  <tbody>
                  <tr class="table-active">
                    <th>Nama Ayah kandung</th>
                    <td>:</td>
                    <td>Ayah</td>
                  </tr>
                  <tr>
                    <th scope="row">NIK</th>
                    <td>:</td>
                    <td>123456789</td>
                  </tr>

                  <tr class="table-active">
                    <th>Tahun lahir</th>
                    <td>:</td>
                    <td>1978</td>
                  </tr>
                  <tr>
                    <th scope="row">Pendidikan terakhir</th>
                    <td>:</td>
                    <td>SMA sederajat</td>
                  </tr>

                  <tr class="table-active">
                    <th>Pekerjaan</th>
                    <td>:</td>
                    <td>Buruh</td>
                  </tr>
                  <tr>
                    <th scope="row">Pendapatan perbulan</th>
                    <td>:</td>
                    <td>Rp. 1.0000.000</td>
                  </tr>

                  <tr class="table-active">
                    <th>Nomor telepon</th>
                    <td>:</td>
                    <td>0383382778897</td>
                  </tr>
                  <tr>
                    <th scope="row">Disabilitas</th>
                    <td>:</td>
                    <td>tidak</td>
                  </tr>                  
               </tbody>
                </table>
              </div>
            </div>

             <div class="card-body">
              <h5 class="card-title"> Data Ibu </h5>
              <div class="table-responsive">
                <table class="table table-active">
                  
                  <tbody>
                  <tr class="table-active">
                    <th>Nama Ibu kandung</th>
                    <td>:</td>
                    <td>Ibu</td>
                  </tr>
                  <tr>
                    <th scope="row">NIK</th>
                    <td>:</td>
                    <td>123456789</td>
                  </tr>

                  <tr class="table-active">
                    <th>Tahun lahir</th>
                    <td>:</td>
                    <td>1978</td>
                  </tr>
                  <tr>
                    <th scope="row">Pendidikan terakhir</th>
                    <td>:</td>
                    <td>SMA sederajat</td>
                  </tr>

                  <tr class="table-active">
                    <th>Pekerjaan</th>
                    <td>:</td>
                    <td>Ibu Rumah Tangga</td>
                  </tr>
                  <tr>
                    <th scope="row">Pendapatan perbulan</th>
                    <td>:</td>
                    <td>-</td>
                  </tr>

                  <tr class="table-active">
                    <th>Nomor telepon</th>
                    <td>:</td>
                    <td>0383382778897</td>
                  </tr>
                  <tr>
                    <th scope="row">Disabilitas</th>
                    <td>:</td>
                    <td>tidak</td>
                  </tr>              
                </tbody>
                </table>
              </div>
            </div>

            <div class="card-body">
              <h5 class="card-title"> Prestasi </h5>
              <div class="table-responsive">
                <table class="table table-active">     
                  <tbody>
                  <tr class="table-active">
                    <th>Jenis</th>
                    <td>:</td>
                    <td>Olahraga</td>
                  </tr>
                  <tr>
                    <th scope="row">Tingkat</th>
                    <td>:</td>
                    <td>Internasioanl</td>
                  </tr>

                    <tr class="table-active">
                    <th>Nama prestasi</th>
                    <td>:</td>
                    <td>Basket</td>
                  </tr>
                  <tr>
                    <th scope="row">Tahun</th>
                    <td>:</td>
                    <td>2020</td>
                  </tr>

                    <tr class="table-active">
                    <th>Penyelenggara</th>
                    <td>:</td>
                    <td>pemerintah</td>
                  </tr>
                 
              </tbody>
          </table>
      </div>
    </div>


</div>
</div>

</div>
<script src="{{ asset('assets/js/jquery.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>

</body>

</html>

      
