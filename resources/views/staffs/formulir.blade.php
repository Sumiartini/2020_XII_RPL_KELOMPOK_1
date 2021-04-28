<!DOCTYPE html>
<html>
<head>
   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SMK MAHAPUTRA</title>
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
                <form id="signupForm" enctype="multipart/form-data" autocomplete="off" method="POST" action="{{ url('staffs/create') }}" novalidate="novalidate">
                    @csrf

                    <h4 class="form-header text-uppercase">
                        <i class="fa fa-address-book-o"></i>
                        Data Pribadi
                    </h4>
                    <div class="form-group row">

                        <div class="col-sm-4">
                        <img src="#" class="img-thumbnail" id="tampil_picture" style="object-fit: cover; height: 200px; width: 200px"/> 
                        <input type="file" name="usr_profile_picture" id="preview_gambar" class="img-thumbnail" accept="image/x-png,image/gif,image/jpeg" style="display:none" onchange="document.getElementById('usr_profile_picture').value=this.value" /><br>
                 
                        <button type="button" id="usr_profile_picture" class="btn btn-outline-primary btn-sm waves-effect waves-light m-2" onclick="document.getElementById('preview_gambar').click()">Pilih Gambar</button>
                        </div>

                    </div>


                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label>Nama Lengkap <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" id="input-10" name="usr_name" placeholder="Masukan Nama Lengkap">
                        </div>
                        <div class="col-sm-4">
                            <label>NIK <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" id="input-10" name="usr_nik" placeholder="Masukan NIK">
                        </div>
                        <div class="col-sm-4">
                            <label>NUPTK</label>
                            <input type="text" class="form-control" id="input-10" name="stf_nuptk" placeholder="Masukan NUPTK">
                            <p style="font-size: 12px;">opsional</p>
                        </div>
                        
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Tempat Lahir <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" id="input-10" name="usr_place_of_birth" placeholder="Masukan Tempat Lahir">
                        </div>

                        <div class="col-sm-4">
                            <label>Tanggal Lahir <span style="color:red;">*</span></label>
                            <input type="text" id="autoclose-datepicker" class="form-control" name="usr_date_of_birth" placeholder="Tanggal/Bulan/Tahun">
                        </div>

                        <div class="col-sm-4">
                            <label>Agama <span style="color:red;">*</span></label>
                            <select class="form-control" name="usr_religion" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option value="Islam">Islam</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Khonghucu">Khonghucu</option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Kewarganegaraan <span style="color:red;">*</span></label>
                            <select class="form-control" name="" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option>WNI</option>
                                <option>WNA</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label>Nama Negara <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" id="input-10" name="country_name" placeholder="Masukan Nama Negara">
                        </div>
                        <div class="col-sm-4">
                            <label>Jenis Kelamin <span style="color:red;">*</span></label>
                            <select class="form-control" name="usr_gender" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option>Laki Laki</option>
                                <option>Perempuan</option>
                            </select>

                        </div>
                        
                        <div class="col-sm-3">
                            <label>Status Nikah <span style="color:red;">*</span></label> <br>

                            <div class="radio icheck-info icheck-inline">
                                <input type="radio" id="info1" name="info">
                                <label for="info1">Sudah</label>
                            </div>
                            <div class="radio icheck-info icheck-inline">
                                <input type="radio" checked="" id="info2" name="info">
                                <label for="info2">Belum</label>
                            </div>
                        </div>
                    </div>
                    <h4 class="form-header text-uppercase">
                        <i class="fa fa-address-book-o"></i>
                        INFORMASI KONTAK
                    </h4>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Provinsi <span style="color:red;">*</span></label>
                            <select class="form-control" name="provinces" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option>Jawa Barat</option>
                                <option>Jawa Timur</option>
                            </select>
                        </div>


                        <div class="col-sm-4">
                            <label>Kabupaten <span style="color:red;">*</span></label>
                            <select class="form-control" name="usr_district" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option>Bandung</option>
                                <option>Jakarta</option>
                            </select>
                        </div>

                        <div class="col-sm-4">
                            <label>Kecamatan <span style="color:red;">*</span></label>
                            <select class="form-control" name="usr_district" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option>Katapang</option>
                                <option>Arjasari</option>
                            </select>
                        </div>

                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Alamat <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" name="usr_address" id="input-10" placeholder="Masukan Alamat">
                        </div>

                        <div class="col-sm-4">
                            <label>Kode Pos <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" name="usr_postal_code" id="input-10" placeholder="Masukan Kode Pos">
                        </div>

                        <div class="col-sm-4">
                            <label>RT <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" name="usr_rt" id="input-10" placeholder="Masukan Nomor RT">
                        </div>

                    </div>


                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>RW <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" id="input-10" name="usr_rw" placeholder="Masukan Nomor RW">
                        </div>

                        <div class="col-sm-4">
                            <label>No Telepon <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" id="input-10" name="usr_phone" placeholder="Masukan Nomor Telepon">
                        </div>
                        <div class="col-sm-4">
                            <label>Email <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" id="input-10" name="usr_email" placeholder="Masukan Email">
                        </div>
                    </div>

                    <h4 class="form-header text-uppercase">
                        <i class="fa fa-address-book-o"></i>
                        DATA SUAMI/ISTERI
                    </h4>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Nama Suami/Isteri <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" id="input-10" name="husband_wife[name]" placeholder="Masukan Nama Suami/Isteri">
                        </div>
                        <div class="col-sm-4">
                            <label>NIK <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" id="input-10" name="husband_wife[nik]" placeholder="Masukan NIK">
                        </div>
                        <div class="col-sm-4">
                            <label>NIP</label>
                            <input type="text" class="form-control" id="input-10" name="husband_wife[nip]" placeholder="Masukan NIP">
                        </div>

                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Pekerjaan <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" id="input-10" name="husband_wife[profession]" placeholder="Masukan Nama Pekerjaan">
                        </div>
                    </div>
                    <h4 class="form-header text-uppercase">
                        <i class="fa fa-address-book-o"></i>
                        RIWAYAT PENDIDIKAN
                    </h4>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Tahun SD/Sederajat <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" id="input-10" name="educational_background[year_grade_school]" placeholder="Masukan Tahun SD/Sederajat">
                        </div>
                        <div class="col-sm-4">
                            <label>Nama SD/Sederajat <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" id="input-10" name="educational_background[grade_school]" placeholder="Masukan Nama SD/Sederajat">
                        </div>

                        <div class="col-sm-4">
                            <label>Tahun SMP/Sederajat <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" id="input-10" name="educational_background[year_junior_high_school]" placeholder="Masukan Tahun SMP/Sederajat">
                        </div>

                    </div>


                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Nama SMP/Sederajat <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" id="input-10" name="educational_background[junior_high_school]" placeholder="Masukan Nama SMP/Sederajat">
                        </div>

                        <div class="col-sm-4">
                            <label>Tahun SMA/Sederajat <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" id="input-10" name="educational_background[year_senior_high_school]" placeholder="Masukan Tahun SMA/Sederajat">
                        </div>
                        <div class="col-sm-4">
                            <label>Nama SMA/Sederajat <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" id="input-10" name="educational_background[senior_high_school]" placeholder="Masukan Nama SMA/Sederajat">
                        </div>

                    </div>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label>Tahun Perguruan Tinggi</label>
                            <input type="text" class="form-control" id="input-10" name="educational_background[year]" placeholder="Masukan Tahun Perguruan Tinggi">
                        </div>
                        <div class="col-sm-4">
                            <label>Nama Perguruan Tinggi</label>
                            <input type="text" class="form-control" id="input-10" name="educational_background[college]" placeholder="Masukan Nama Perguruan Tinggi">
                        </div>
                        <div class="col-sm-4">
                            <label>Nama Fakultas</label>
                            <input type="text" class="form-control" id="input-10" name="educational_background[faculty]" placeholder="Masukan Nama Fakultas">
                        </div>

                    </div>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label>Nama Jurusan</label>
                            <input type="text" class="form-control" id="input-10" name="educational_background[majors]" placeholder="Masukan Nama Jurusan">
                        </div>
                        <div class="col-sm-4">
                            <label>Tahun Lulus</label>
                            <input type="text" class="form-control" id="input-10" name="educational_background[year]" placeholder="Masukan Tahun Lulus">
                        </div>
                        <div class="col-sm-4">
                            <label>Gelar</label>
                            <input type="text" class="form-control" id="input-10" name="educational_background[degree]" placeholder="Masukan Gelar">
                        </div>

                    </div>

                    <h4 class="form-header text-uppercase">
                        <i class="fa fa-address-book-o"></i>
                        SERTIFIKASI
                    </h4>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Status</label>
                            <select class="form-control" name="certification[status]" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option>Sudah</option>
                                <option>Belum</option>
                            </select>
                        </div>

                        <div class="col-sm-4">
                            <label>Tahun</label>
                            <input type="text" class="form-control" id="input-10" name="certification[year]" placeholder="Masukan Tahun">
                        </div>

                        <div class="col-sm-4">
                            <label>No Sertifikat</label>
                            <input type="text" class="form-control" id="input-10" name="certification[certificate_no]" placeholder="Masukan No Sertifikat">
                        </div>
                    </div>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label>Bidang studi</label>
                            <input type="text" class="form-control" id="input-10" name="certification[field_of_study]" placeholder="Masukan Bidang studi">
                        </div>

                        <div class="col-sm-4">
                            <label>Penyelenggara</label>
                            <input type="text" class="form-control" id="input-10" name="certification[organizer]" placeholder="Masukan Penyelenggara">
                        </div>
                    </div>


                    <div class="form-footer">
                        <a href="" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</a>
                        <a href="" type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> SAVE</a>
                    </div>
                    <footer class="footer">
                    <div class="container">
                        <div class="text-center">
                        Copyright © 2018 Rocker Admin
                        </div>
                    </div>
                    </footer>

                </form>
            </div>
        </div>
    </div>
</div>
</div>

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
$(document).ready(function() {
            $("#submitForm").submit(function(e) {
                $(this).find("button[type='submit']").prop('disabled', true);
                $("#btnSubmit").attr("disabled", true);
                return true;
            });
        });

function bacaGambar(input) {
   if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
          $('#gambar_nodin').attr('src', e.target.result);
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


</body>
</html>
