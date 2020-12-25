@extends('layouts.master')

@push('title')
- Edit Staf
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
        <h4 class="page-title">Edit Staf</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">SMK Mahaputra</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Kelola Staf</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Staf</li>
        </ol>
    </div>
</div>


<div class="col-lg-12">
    <div class="profile-card-3 ">
        <div class="text-center">
            <img src="{{ url('assets/images/avatars/avatar-2.png')}}" alt="user avatar" class="card-img-top" style="width: 200px;
                        height: 200px;
                        background: #dac52c;
                        border-radius: 100%;">
        </div>
        <hr>
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
                            <input type="text" class="form-control @error('usr_name') is-invalid @enderror" id="input-10" name="usr_name" value="Hamdan Firmansyah S. Pd">
                            @error('usr_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <label>NIK</label>
                            <input type="text" class="form-control" id="input-10" name="usr_nik_or_kitas" value="3204370204900002">
                        </div>
                        <div class="col-sm-4">
                            <label>NUPTK</label>
                            <input type="text" class="form-control" id="input-10" name="stf_nuptk" value="4734768669130082">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>NO GTK</label>
                            <input type="text" class="form-control" id="input-10" name="stf_gtk" value="16.17.007">
                        </div>

                        <div class="col-sm-4">
                            <label>Kewarganegaraan</label>
                            <select class="form-control" id="basic-select" name="usr_citizenship">
                                <option disabled="" selected="">WNI</option>
                                <option value="WNI">WNI</option>
                                <option value="WNA">WNA</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label>Nama Negara</label>
                            <input type="text" class="form-control" id="input-10" value="Indonesia" name="usr_country_name">
                        </div>


                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Tempat Lahir<span style="color:red"> *</span></label>
                            <input type="text" class="form-control" id="input-10" name="firstname" value="Bandung" name="usr_place_of_birth">
                        </div>

                        <div class="col-sm-4">
                            <label>Tanggal Lahir</label>
                            <input type="text" id="autoclose-datepicker" class="form-control" value="02/04/1990" name="usr_date_of_birth">
                        </div>

                        <div class="col-sm-4">
                            <label>Jenis Kelamin</label>

                            <select class="form-control" id="basic-select" name="usr_gender">
                                <option disabled="" selected="" >Laki Laki</option>
                                <option value="Laki Laki">Laki Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Agama</label>
                            <select class="form-control" id="basic-select" name="usr_religion">
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
                                <input type="radio" checked="" id="info1" name="stf_marital_status">
                                <label for="info1">Sudah</label>
                            </div>
                            <div class="radio icheck-info icheck-inline">
                                <input type="radio"  id="info2" name="stf_marital_status">
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
                            <label>Kabupaten/Kota</label>
                            <select class="form-control" name="city" id="basic-select">
                                <option disabled="" selected="">Bandung</option>
                                <option value="Bandung">Bandung</option>
                                <option value="Jakarta">Jakarta</option>
                            </select>
                        </div>
                    
                    <div class="col-sm-4">
                            <label>Kecamatan</label>
                            <select class="form-control" name="usr_district" id="basic-select">
                                <option disabled="" selected="">Katapang</option>
                                <option value="Katapang">Katapang</option>
                                <option value="Arjasari">Arjasari</option>
                            </select>
                        </div>
                        </div>
                       
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Kode Pos</label>
                            <input type="text" name="usr_postal_code" class="form-control" id="input-10" value="40921">
                        </div>

                        <div class="col-sm-4">
                            <label>Alamat</label>
                            <input type="text" name="usr_address" class="form-control" id="input-10" value="Kp. Citereup">
                        </div>   

                        <div class="col-sm-2">
                            <label>RT</label>
                            <input type="text" class="form-control" name="usr_rt" id="input-10" value="02">
                        </div>
                        <div class="col-sm-2">
                            <label>RW</label>
                            <input type="text" class="form-control" id="input-10" name="usr_rw" value="07">
                        </div>                   

                    </div>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label>Kelurahan/Desa</label>
                            <input type="text" name="usr_village" class="form-control" id="input-10" value="Sukamukti">
                        </div> 

                        <div class="col-sm-4">
                            <label>No Telepon</label>
                            <input type="text" class="form-control" name="usr_phone_number" id="input-10" value="089613272481">
                        </div>
                        <div class="col-sm-4">
                            <label>Email</label>
                            <input type="text" class="form-control" id="input-10" name="usr_email" value="odney04@gmail.com">
                        </div>
                    </div>

                    <h4 class="form-header text-uppercase">
                        <i class="fa fa-address-book-o"></i>
                        DATA SUAMI/ISTERI
                    </h4>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Nama Suami/Isteri</label>
                            <input type="text" name="husband_or_wife_data[name_of_husband_wife]" class="form-control" id="input-10" value="Hani Nuraeni">
                        </div>
                        <div class="col-sm-4">
                            <label>NIK</label>
                            <input type="text" name="husband_or_wife_data[husband_wife_nik]" class="form-control" id="input-10" value="-">
                        </div>
                        <div class="col-sm-4">
                            <label>NIP</label>
                            <input type="text" name="husband_or_wife_data[nip]" class="form-control" id="input-10" value="-">
                        </div>

                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Pekerjaan</label>
                            <input type="text" class="form-control" id="input-10" name="husband_or_wife_data[profession]" value="ibu rumah tangga">
                        </div>
                    </div>


                    <h4 class="form-header text-uppercase">
                        <i class="fa fa-address-book-o"></i>
                        STATUS KEPEGAWAIAN
                    </h4>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label>NO SK</label>
                            <input type="text" name="employment_status[no_sk]" class="form-control" id="input-10" value="181/102.10/SMK.MP/KS/VII/2018">
                        </div>

                        <div class="col-sm-4">
                            <label>Tahun Masuk</label>
                            <select class="form-control" name="employment_status[date_starting_assignment]" id="basic-select">
                                <option disabled="" selected="">2016</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                            </select>
                        </div>


                        <div class="col-sm-4">
                            <label>Kontrak Kerja</label>
                            <select class="form-control" id="basic-select" name="employment_status[employment_contract]">
                                <option disabled="" selected="">1 Tahun</option>
                                <option value="1 Tahun">1 Tahun</option>
                                <option value="2 Tahun">2 Tahun</option>
                                <option value="3 Tahun">3 Tahun</option>
                                <option value="4 Tahun">4 Tahun</option>
                                <option value="5 Tahun">5 Tahun</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Status Staf</label>
                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">Staf Tidak Tetap</option>
                                <option>Staf Tetap</option>
                                <option>Staf Tidak Tetap</option>
                            </select>
                        </div>

                        <div class="col-sm-4">
                            <label>Jabatan</label>
                            <input type="text" name="stp_position_id" class="form-control" id="input-10" value="Ketua Staf">
                        </div>
                    </div>

                    <h4 class="form-header text-uppercase">
                        <i class="fa fa-address-book-o"></i>
                        RIWAYAT PENDIDIKAN
                    </h4>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Tahun SD/Sederajat</label>
                            <input type="text" class="form-control" id="input-10" name="educational_background[year_grade_school]" value="2001">
                        </div>
                        <div class="col-sm-4">
                            <label>Nama SD/Sederajat</label>
                            <input type="text" class="form-control" id="input-10" name="educational_background[grade_school]" value="SDN Parung Serab IV">
                        </div>
                        <div class="col-sm-4">
                            <label>Tahun SMP/Sederajat</label>
                            <input type="text" class="form-control" id="input-10" name="educational_background[year_junior_high_school]" value="2003">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Nama SMP/Sederajat</label>
                            <input type="text" class="form-control" id="input-10" name="educational_background[junior_high_school]" value="SMPN 1 Soreang">
                        </div>

                        <div class="col-sm-4">
                            <label>Tahun SMA/Sederajat</label>
                            <input type="text" class="form-control" id="input-10" name="educational_background[year_senior_high_school]" value="2008">
                        </div>
                        <div class="col-sm-4">
                            <label>Nama SMA/Sederajat</label>
                            <input type="text" class="form-control" id="input-10" name="educational_background[senior_high_school]" value="SMAN 1 Katapang">
                        </div>

                    </div>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label>Tahun Perguruan Tinggi</label>
                            <input type="text" class="form-control" id="input-10" name="educational_background[year]" value="2010">
                        </div>
                        <div class="col-sm-4">
                            <label>Nama Perguruan Tinggi</label>
                            <input type="text" class="form-control" id="input-10" name="educational_background[college]" value="UPI Bandung">
                        </div>
                        <div class="col-sm-4">
                            <label>Nama Fakultas</label>
                            <input type="text" class="form-control" id="input-10" name="educational_background[faculty]" value="FPOK">
                        </div>

                    </div>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label>Nama Jurusan</label>
                            <input type="text" class="form-control" id="input-10" name="educational_background[majors]" value="S1 Pendidikan Jasmani Kesehatan dan Rekreasi">
                        </div>
                        <div class="col-sm-4">
                            <label>Tahun Lulus</label>
                            <input type="text" class="form-control" id="input-10" name="educational_background[year]" value="2014">
                        </div>
                        <div class="col-sm-4">
                            <label>Gelar</label>
                            <input type="text" class="form-control" id="input-10" name="educational_background[degree]" value="S.Pd">
                        </div>

                    </div>


                    <h4 class="form-header text-uppercase">
                        <i class="fa fa-address-book-o"></i>
                        SERTIFIKASI
                    </h4>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Status</label>
                            <select class="form-control" id="basic-select" name="certification[status]">
                                <option disabled="" selected="">Belum</option>
                                <option value="Sudah">Sudah</option>
                                <option value="Belum">Belum</option>
                            </select>
                        </div>

                        <div class="col-sm-4">
                            <label>Tahun</label>
                            <input type="text" class="form-control" id="input-10" name="certification[year]" value="-">
                        </div>

                        <div class="col-sm-4">
                            <label>No Sertifikat</label>
                            <input type="text" class="form-control" id="input-10" name="certification[certificate_no]" value="-">
                        </div>
                    </div>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label>Bidang studi</label>
                            <input type="text" class="form-control" id="input-10" name="certification[field_of_study]" value="-">
                        </div>

                        <div class="col-sm-4">
                            <label>Penyelenggara</label>
                            <input type="text" class="form-control" id="input-10" name="certification[organizer]" value="-">
                        </div>
                    </div>


                    <div class="form-footer">
                        <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
                        <a href="/staff/1" button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> SAVE</a>
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