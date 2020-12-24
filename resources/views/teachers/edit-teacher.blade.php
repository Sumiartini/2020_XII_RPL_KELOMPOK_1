@extends('layouts.master')

@push('title')
-Edit Guru
@endpush

@push('styles')

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Rocker - Bootstrap4 Admin Dashboard Template</title>
<!--favicon-->
<link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
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
        <h4 class="page-title">Edit Guru</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">SMK Mahaputra</a></li>
            <li class="breadcrumb-item"><a href="{{ url('teachers')}}">Daftar Guru</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Guru</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form id="signupForm" novalidate="novalidate">

                    <h4 class="form-header text-uppercase">
                        DATA PRIBADI
                    </h4>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" id="input-10" name="firstname" value="Siti Robiah Adawiyah S. Pd">
                        </div>
                        <div class="col-sm-4">
                            <label>NIK</label>
                            <input type="text" class="form-control" id="input-10" value="3204115208700009">
                        </div>
                        <div class="col-sm-4">
                            <label>NUPTK</label>
                            <input type="text" class="form-control" id="input-10" name="firstname" value="1144748649300010">
                        </div>

                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>NO GTK</label>
                            <input type="text" class="form-control" id="input-10" value="16.17.004">
                        </div>

                        <div class="col-sm-4">
                            <label>Kewarganegaraan</label>
                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">WNI</option>
                                <option>WNI</option>
                                <option>WNA</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label>Nama Negara</label>
                            <input type="text" class="form-control" id="input-10" value="Indonesia">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" id="input-10" name="firstname" value="Bandung">
                        </div>

                        <div class="col-sm-4">
                            <label>Tanggal Lahir</label>
                            <input type="text" id="autoclose-datepicker" class="form-control" value="12/10/1970 ">
                        </div>
                        <div class="col-sm-4">
                            <label>Jenis Kelamin</label>
                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">Perempuan</option>
                                <option>Laki Laki</option>
                                <option>Perempuan</option>
                            </select>

                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Agama</label>
                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">Islam</option>
                                <option value="Islam">Islam</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Khonghucu">Khonghucu</option>
                            </select>
                        </div>

                        <div class="col-sm-3">
                            <label>Status Perkawinan</label> <br>

                            <div class="radio icheck-info icheck-inline">
                                <input type="radio" checked="" id="info1" name="info">
                                <label for="info1">Sudah</label>
                            </div>
                            <div class="radio icheck-info icheck-inline">
                                <input type="radio"  id="info2" name="info">
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
                            <label>Provinsi</label>
                            <select class="form-control" id="basic-select" name="provinces">
                                <option disabled="" selected="">Jawa Barat</option>
                                <option value="Jawa Barat">Jawa Barat</option>
                                <option value="Jawa Timur">Jawa Timur</option>
                            </select>
                        </div>


                        <div class="col-sm-4">
                            <label>Kota/Kabupaten</label>
                            <select class="form-control" name="city" id="basic-select">
                                <option disabled="" selected="">Bandung</option>
                                <option value="Bandung">Bandung</option>
                                <option value="Jakarta">Jakarta</option>
                            </select>
                        </div>
                    </div>

                    
                    <div class="col-sm-4">
                            <label>Kecamatan</label>
                            <select class="form-control" name="usr_district" id="basic-select">
                                <option disabled="" selected="">Katapang</option>
                                <option value="Katapang">Katapang</option>
                                <option value="Arjasari">Arjasari</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label>Kode Pos</label>
                            <input type="text" name="usr_postal_code" class="form-control" id="input-10" value="40921">
                        </div>
                        <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Alamat</label>
                            <input type="text" name="usr_address" class="form-control" id="input-10" value="Kp. Citereup">
                        </div>                      

                    </div>

                        <div class="col-sm-2">
                            <label>RT</label>
                            <input type="text" class="form-control" name="usr_rt" id="input-10" value="02">
                        </div>
                        <div class="col-sm-2">
                            <label>RW</label>
                            <input type="text" class="form-control" id="input-10" name="usr_rw" value="07">
                        </div>

                        <div class="col-sm-4">
                            <label>No Telepon</label>
                            <input type="text" class="form-control" name="usr_phone_number" id="input-10" value="089613272481">
                        </div>
                        <div class="col-sm-4">
                            <label>Email</label>
                            <input type="text" class="form-control" id="input-10" name="usr_email" value="odney04@gmail.com">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                            <label>Kelurahan/Desa</label>
                            <input type="text" name="usr_village" class="form-control" id="input-10" value="Sukamukti">
                            </div>                      

                    </div>

                    <h4 class="form-header text-uppercase">
                       
                        DATA SUAMI/ISTERI
                    </h4>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Nama Suami/Isteri</label>
                            <input type="text" class="form-control" id="input-10" value="Agus Sofyan SE">
                        </div>
                        <div class="col-sm-4">
                            <label>NIK</label>
                            <input type="text" class="form-control" id="input-10" value="3204110308610004">
                        </div>
                        <div class="col-sm-4">
                            <label>NIP</label>
                            <input type="text" class="form-control" id="input-10" value="-">
                        </div>

                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Pekerjaan</label>
                            <input type="text" class="form-control" id="input-10" value="Bendahara TU">
                        </div>
                    </div>


                    <h4 class="form-header text-uppercase">
                       MENGAJAR DI SMK MAHAPUTRA
                    </h4>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label>NO SK</label>
                            <input type="text" class="form-control" id="input-10" value="181/102.10/SMK.MP/KS/VII/2018">
                        </div>

                        <div class="col-sm-4">
                            <label>Tahun Masuk</label>
                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">2016</option>
                                <option>2016</option>
                                <option>2017</option>
                                <option>2018</option>
                                <option>2019</option>
                                <option>2020</option>
                                <option>2021</option>
                            </select>
                        </div>


                        <div class="col-sm-4">
                            <label>Kontrak Mengajar</label>
                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">1 Tahun</option>
                                <option>1 Tahun</option>
                                <option>2 Tahun</option>
                                <option>3 Tahun</option>
                                <option>4 Tahun</option>
                                <option>5 Tahun</option>

                            </select>
                         </div>
                     </div>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Status Guru</label>
                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">Guru Tidak Tetap</option>
                                <option>Guru Tetap</option>
                                <option>Guru Tidak Tetap</option>
                            </select>
                        </div>

                        <div class="col-sm-4">
                            <label>NIP</label>
                            <input type="text" class="form-control" id="input-10" value="-">
                        </div>

                         <div class="col-sm-4">
                            <label>Mata Pelajaran</label>
                            <input type="text" class="form-control" id="input-10" value="PAB">
                        </div>
                    </div>

                    
                    <div class="form-group row">
                       
                        <div class="col-sm-4">
                            <label>Kelas</label>
                            <input type="text" class="form-control" id="input-10" value="XII">
                        </div>
                        <div class="col-sm-4">
                            <label>Jumlah Jam Mengajar</label>
                            <input type="text" class="form-control" id="input-10" value="10 Jam/Minggu">
                        </div>
                        <div class="col-sm-4">
                            <label>Tugas Tambahan</label>
                            <input type="text" class="form-control" id="input-10" value="Wali Kelas">
                        </div>
                    </div>


                     <h4 class="form-header text-uppercase">
                        RIWAYAT MENGAJAR DI SEKOLAH LAIN
                    </h4>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label>Nama Sekolah</label>
                            <input type="text" class="form-control" id="input-10" value="SMP Matlahul Anwar">
                        </div>
                        <div class="col-sm-6">
                            <label>Lama Mengajar</label>
                            <input type="text" class="form-control" id="input-10" value="18 Tahun">
                        </div>
                      
                    </div>

                     <div class="form-group row">
                        <div class="col-sm-6">
                            <label>Mata Pelajaran</label>
                            <input type="text" class="form-control" id="input-10" value="PAI">
                        </div>
                      
                         <div class="col-sm-6">
                                <label>Status</label>
                                <select class="form-control" id="basic-select">
                                    <option disabled="" selected="">Tidak Aktif</option>
                                    <option>Aktif</option>
                                    <option>Tidak Aktif</option>
                                 </select>
                            </div>
                     </div>


                    <h4 class="form-header text-uppercase">
                        RIWAYAT PENDIDIKAN
                    </h4>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Tahun SD/Sederajat</label>
                            <input type="text" class="form-control" id="input-10" value="1983">
                        </div>
                        <div class="col-sm-4">
                            <label>Nama SD/Sederajat</label>
                            <input type="text" class="form-control" id="input-10" value="SDN Angkasa 2">
                        </div>

                        <div class="col-sm-4">
                            <label>Tahun SMP/Sederajat</label>
                            <input type="text" class="form-control" id="input-10" value="1987">
                        </div>

                    </div>


                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Nama SMP/Sederajat</label>
                            <input type="text" class="form-control" id="input-10" value="MTs I'Anatut Thalibin">
                        </div>

                        <div class="col-sm-4">
                            <label>Tahun SMA/Sederajat</label>
                            <input type="text" class="form-control" id="input-10" value="1990">
                        </div>
                        <div class="col-sm-4">
                            <label>Nama SMA/Sederajat</label>
                            <input type="text" class="form-control" id="input-10" value="MA I'Anatut Thalibin">
                        </div>

                    </div>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label>Tahun Perguruan Tinggi</label>
                            <input type="text" class="form-control" id="input-10" value="1991">
                        </div>
                        <div class="col-sm-4">
                            <label>Nama Perguruan Tinggi</label>
                            <input type="text" class="form-control" id="input-10" value="UNINUS">
                        </div>
                        <div class="col-sm-4">
                            <label>Nama Fakultas</label>
                            <input type="text" class="form-control" id="input-10" value="FKIP">
                        </div>

                    </div>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label>Nama Jurusan</label>
                            <input type="text" class="form-control" id="input-10" value="S1 Bahasa Arab">
                        </div>
                        <div class="col-sm-4">
                            <label>Tahun Lulus</label>
                            <input type="text" class="form-control" id="input-10" value="1996">
                        </div>
                        <div class="col-sm-4">
                            <label>Gelar</label>
                            <input type="text" class="form-control" id="input-10" value="S. Pd">
                        </div>

                    </div>

                    <h4 class="form-header text-uppercase">
                        SERTIFIKASI
                    </h4>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Status</label>
                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">Belum</option>
                                <option>Sudah</option>
                                <option>Belum</option>
                            </select>
                        </div>

                        <div class="col-sm-4">
                            <label>Tahun</label>
                            <input type="text" class="form-control" id="input-10" value="-">
                        </div>

                        <div class="col-sm-4">
                            <label>No Sertifikat</label>
                            <input type="text" class="form-control" id="input-10" value="-">
                        </div>
                    </div>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label>Bidang studi</label>
                            <input type="text" class="form-control" id="input-10" value="-">
                        </div>

                        <div class="col-sm-4">
                            <label>Penyelenggara</label>
                            <input type="text" class="form-control" id="input-10" value="-">
                        </div>
                    </div>


                    <div class="form-footer">
                        <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
                        <a href="/teacher/1" class="btn btn-success"><i class="fa fa-check-square-o"></i> SAVE</a>
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