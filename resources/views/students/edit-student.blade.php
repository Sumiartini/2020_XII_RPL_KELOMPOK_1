@extends('layouts.master')

@push('title')
- Edit Siswa
@endpush

@push('styles')

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Rocker - Bootstrap4 Admin Dashboard Template</title>
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
@endpush

@section('content')

<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">Tambah Siswa</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">SMK Mahaputra</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/students')}}">Daftar Siswa</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Siswa</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form id="signupForm" novalidate="novalidate">

                    <h4 class="form-header text-uppercase">
                        <i class="fa fa-address-book-o"></i>
                        Data Pribadi
                    </h4>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label>Nama Lengkap<span style="color:red"> *</span></label>
                            <input type="text" class="form-control" id="input-10" name="firstname" value="Ahmad Suherman">
                        </div>
                        <div class="col-sm-4">
                            <label>NIK / No. KITAS (untuk WNA)</label>
                            <input type="text" class="form-control" id="input-10" value="321044070027770007">
                        </div>
                        <div class="col-sm-4">
                            <label>No Registrasi Akta Lahir</label>
                            <input type="text" class="form-control" id="input-10" name="firstname" value="12345678">
                        </div>


                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>NISN</label>
                            <input type="text" class="form-control" id="input-10" value="0038614257">
                        </div>

                        <div class="col-sm-2">
                            <label>Kewarganegaraan</label>
                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">WNI</option>
                                <option>WNI</option>
                                <option>WNA</option>
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <label>Nama Negara</label>
                            <input type="text" class="form-control" id="input-10" value="INDONESIA">
                        </div>

                        <div class="col-sm-4">
                            <label>Agama</label>
                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">islam</option>
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
                            <label>Tempat Lahir<span style="color:red"> *</span></label>
                            <input type="text" class="form-control" id="input-10" name="firstname" value="Bandung">
                        </div>

                        <div class="col-sm-4">
                            <label>Tanggal Lahir</label>
                            <input type="text" id="autoclose-datepicker" class="form-control" value="05/05/2003">
                        </div>
                        <div class="col-sm-4">
                            <label>Jenis Kelamin</label>

                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">Laki Laki</option>
                                <option>Laki Laki</option>
                                <option>Perempuan</option>
                            </select>

                        </div>
                    </div>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label>Provinsi</label>
                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">Jawa Barat</option>
                                <option>Jawa Barat</option>
                                <option>Jawa Timur</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label>Kabupaten/Kota</label>
                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">Bndung</option>
                                <option>Bandung</option>
                                <option>Jakarta</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label>Kecamatan</label>
                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">Katapang</option>
                                <option>Katapang</option>
                                <option>Arjasari</option>
                            </select>
                        </div>

                    </div>

                    <div class="form-group row">
                    <div class="col-sm-4">
                            <label>Kode Pos</label>
                            <input type="text" class="form-control" id="input-10" value="40921">
                        </div>

                        <div class="col-sm-4">
                            <label>Alamat</label>
                            <input type="text" class="form-control" id="input-10" value="Kp.Cicangkudu">
                        </div>
                        <div class="col-sm-2">
                            <label>RT</label>
                            <input type="text" class="form-control" id="input-10" value="01">
                        </div>
                        <div class="col-sm-2">
                            <label>RW</label>
                            <input type="text" class="form-control" id="input-10" value="12">
                        </div>
                        

                    </div>
                    <div class="form-group row">
                    
                        <div class="col-sm-4">
                            <label>kelurahan/Desa<span style="color:red"> *</span></label>
                            <input type="text" class="form-control" id="input-10" value="Sukamukti">
                        </div>
                        <div class="col-sm-4">
                            <label>Telepon Rumah</label>
                            <input type="text" class="form-control" id="input-10" value="0123456789">
                        </div>

                        <div class="col-sm-4">
                            <label>Email Rumah</label>
                            <input type="text" class="form-control" id="input-10" value="rumah@gmail.com">
                        </div>
                        </div>


                    <h4 class="form-header text-uppercase">
                        <i class="fa fa-envelope-o"></i>
                        Data Ayah
                    </h4>

                    <div class="form-group row">

                        <div class="col-sm-6">
                            <label>Nama Ayah Kandung</label>
                            <input type="text" class="form-control" id="input-10" name="firstname" value="Maman">
                        </div>

                        <div class="col-sm-4">
                            <label>Nomor Identitas (NIK)</label>
                            <input type="text" class="form-control" id="input-10" name="firstname" value="32104407002777">
                        </div>

                        <div class="col-sm-2">
                            <label>Tahun Lahir</label>
                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">1970</option>
                                <option>2001</option>
                                <option>2000</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">

                        <div class="col-sm-3">
                            <label>Pendidikan Terakhir</label>
                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">SD - Sederajat</option>
                                <option>SD - Sederajat</option>
                                <option>SMP - Sederajat</option>
                                <option>SMA - Sederajat</option>
                                <option>KULIAH - Sederajat</option>

                            </select>
                        </div>
                        <div class="col-sm-3">
                            <label>Pekerjaan</label>

                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">Buruh</option>
                                <option>Buruh</option>
                                <option>Wirausaha</option>
                            </select>

                        </div>
                        <div class="col-sm-3">
                            <label>Pendapatan Perbulan</label>
                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">> Rp. 500.000</option>
                                <option>
                                    < Rp. 500.000</option> <option> > Rp. 500.000
                                </option>
                            </select>
                        </div>


                        <div class="col-sm-3">
                            <label>Disability</label> <br>

                            <div class="radio icheck-info icheck-inline">
                                <input type="radio" id="info1" name="info">
                                <label for="info1">Ya</label>
                            </div>
                            <div class="radio icheck-info icheck-inline">
                                <input type="radio" checked="" id="info2" name="info">
                                <label for="info2">Tidak</label>
                            </div>
                        </div>
                    </div>

                    <h4 class="form-header text-uppercase">
                        <i class="fa fa-envelope-o"></i>
                        Data Ibu
                    </h4>

                    <div class="form-group row">

                        <div class="col-sm-6">
                            <label>Nama Ibu Kandung</label>
                            <input type="text" class="form-control" id="input-10" name="firstname" value="Wiwin">
                        </div>

                        <div class="col-sm-4">
                            <label>Nomor Identitas (NIK)</label>
                            <input type="text" class="form-control" id="input-10" name="firstname" value="">
                        </div>

                        <div class="col-sm-2">
                            <label>Tahun Lahir</label>
                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">1970</option>
                                <option>2001</option>
                                <option>2000</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">

                        <div class="col-sm-3">
                            <label>Pendidikan Terakhir</label>
                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">SD - Sederajat</option>
                                <option>SD - Sederajat</option>
                                <option>SMP - Sederajat</option>
                                <option>SMA - Sederajat</option>
                                <option>KULIAH - Sederajat</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <label>Pekerjaan</label>

                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">Ibu Rumah Tangga</option>
                                <option>Buruh</option>
                                <option>Wirausaha</option>
                                <option>Ibu Rumah Tangga</option>
                            </select>

                        </div>
                        <div class="col-sm-3">
                            <label>Pendapatan Perbulan</label>
                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option>
                                    < Rp. 500.000</option> <option> > Rp. 500.000
                                </option>
                            </select>
                        </div>


                        <div class="col-sm-3">
                            <label>Disability</label> <br>

                            <div class="radio icheck-info icheck-inline">
                                <input type="radio" id="info1" name="info">
                                <label for="info1">Ya</label>
                            </div>
                            <div class="radio icheck-info icheck-inline">
                                <input type="radio" checked="" id="info2" name="info">
                                <label for="info2">Tidak</label>
                            </div>
                        </div>
                    </div>

                    <h4 class="form-header text-uppercase">
                        <i class="fa fa-envelope-o"></i>
                        Data Wali
                    </h4>

                    <div class="form-group row">

                        <div class="col-sm-6">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" id="input-10" name="firstname" value="-">
                        </div>

                        <div class="col-sm-4">
                            <label>Nomor Identitas (NIK)</label>
                            <input type="text" class="form-control" id="input-10" name="firstname" value="-">
                        </div>

                        <div class="col-sm-2">
                            <label>Tahun Lahir</label>
                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">-</option>
                                <option>2001</option>
                                <option>2000</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">

                        <div class="col-sm-3">
                            <label>Pendidikan Terakhir</label>
                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">-</option>
                                <option>SD - Sederajat</option>
                                <option>SMP - Sederajat</option>
                                <option>SMA - Sederajat</option>
                                <option>KULIAH - Sederajat</option>

                            </select>
                        </div>
                        <div class="col-sm-3">
                            <label>Pekerjaan</label>

                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">-</option>
                                <option>Buruh</option>
                                <option>Wirausaha</option>
                            </select>

                        </div>
                        <div class="col-sm-3">
                            <label>Pendapatan Perbulan</label>
                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">-</option>
                                <option>
                                    < Rp. 500.000</option> <option> > Rp. 500.000
                                </option>
                            </select>
                        </div>


                        <div class="col-sm-3">
                            <label>Disability</label> <br>

                            <div class="radio icheck-info icheck-inline">
                                <input type="radio" id="info1" name="info">
                                <label for="info1">Ya</label>
                            </div>
                            <div class="radio icheck-info icheck-inline">
                                <input type="radio" checked="" id="info2" name="info">
                                <label for="info2">Tidak</label>
                            </div>
                        </div>
                    </div>

                    <h4 class="form-header text-uppercase">
                        <i class="fa fa-phone"></i>
                        Kontak
                    </h4>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label>Telepon Rumah</label>
                            <input type="text" class="form-control" id="input-10" value="022121213312">
                        </div>

                        <div class="col-sm-4">
                            <label>Nomor Telepon HP</label>
                            <input type="text" class="form-control" id="input-10" name="firstname" value="0812345678">
                        </div>

                        <div class="col-sm-4">
                            <label>Email Rumah</label>
                            <input type="text" class="form-control" id="input-10" value="damili@gmail.com">
                        </div>

                    </div>

                    <h4 class="form-header text-uppercase">
                        <i class="fa fa-laptop"></i>
                        Data Periodik
                    </h4>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label>Tinggi Badan</label>
                            <input type="text" class="form-control" id="input-10" value="140 cm">
                        </div>

                        <div class="col-sm-4">
                            <label>Berat Badan</label>
                            <input type="text" class="form-control" id="input-10" name="firstname" value="40 kg">
                        </div>

                        <div class="col-sm-4">
                            <label>Jarak Ke Sekolah</label>
                            <input type="text" class="form-control" id="input-10" value=" 0,5 km ">
                        </div>

                    </div>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label>Waktu Tempuh</label>
                            <input type="text" class="form-control" id="input-10" value="30 menit">
                        </div>
                        <div class="col-sm-4">
                            <label>Jumlah Saudara Kandung</label>
                            <input type="text" class="form-control" id="input-10" value="2">
                        </div>

                    </div>

                    <h4 class="form-header text-uppercase">
                        <i class="fa fa-laptop"></i>
                        Prestasi
                    </h4>
                    <div class="form-group row">

                        <div class="col-sm-3">
                            <label>Jenis</label> <br>

                            <div class="col-md-2 col-sm-4 col-xs-6 demo-col">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="primary1" name="primary" />
                                    <label for="primary1">Sains</label>
                                </div>
                                <div class="icheck-primary">
                                    <input type="checkbox" id="primary2" name="primary" />
                                    <label for="primary2">Seni</label>
                                </div>
                                <div class="icheck-primary">
                                    <input type="checkbox" id="primary3" name="primary" />
                                    <label for="primary3">Olahraga</label>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label>Dan lain-lain</label>
                                <input type="text" class="form-control" id="input-10" value="">
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <label>Tingkat</label> <br>

                            <div class="col-md-2 col-sm-4 col-xs-6 demo-col">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="primary1" name="primary" />
                                    <label for="primary1">Sekolah</label>
                                </div>
                                <div class="icheck-primary">
                                    <input type="checkbox" id="primary2" name="primary" />
                                    <label for="primary2">Kecamatan</label>
                                </div>
                                <div class="icheck-primary">
                                    <input type="checkbox" id="primary3" name="primary" />
                                    <label for="primary3">Kabupaten</label>
                                </div>
                                <div class="icheck-primary">
                                    <input type="checkbox" id="primary3" name="primary" />
                                    <label for="primary3">Provinsi</label>
                                </div>
                                <div class="icheck-primary">
                                    <input type="checkbox" id="primary3" name="primary" />
                                    <label for="primary3">Nasional</label>
                                </div>
                                <div class="icheck-primary">
                                    <input type="checkbox" id="primary3" name="primary" />
                                    <label for="primary3">Internasional</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label>Nama Prestasi</label>
                            <input type="text" class="form-control col-sm-12" id="input-10" value="">

                            <label>Tahun</label>
                            <input type="text" class="form-control col-sm-3" id="input-10" value="">

                            <label>Penyelenggara</label>
                            <input type="text" class="form-control col-sm-12" id="input-10" value="">
                        </div>
                    </div>

                    <div class="form-footer">
                        <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
                        <a href="/student/1" type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> SAVE</a>
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