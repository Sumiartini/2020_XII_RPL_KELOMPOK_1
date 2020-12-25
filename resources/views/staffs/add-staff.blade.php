@extends('layouts.master')

@push('title')
- Tambah Staf
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
        <h4 class="page-title">Tambah Staf</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">SMK Mahaputra</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Kelola Staf</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Staf</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form id="signupForm" autocomplete="off" method="POST" action="{{ url('staff/create') }}" novalidate="novalidate">
                    @csrf

                    <h4 class="form-header text-uppercase">
                        <i class="  "></i>
                        Data Akun
                    </h4>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label>Nama Lengkap<span style="color:red"> *</span></label>
                            <input type="text" class="form-control @error('usr_name') is-invalid @enderror" id="input-10" name="usr_name" placeholder="Masukan Nama Lengkap" value="{{ old('usr_name') }}">
                            @error('usr_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-sm-4">
                            <label>Email<span style="color:red"> *</span></label>
                            <input type="email" class="form-control @error('usr_email') is-invalid @enderror" id="input-10" name="usr_email" placeholder="Masukan Email" value="{{ old('usr_email') }}">
                            @error('usr_email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-sm-4">
                            <label>Nomor Telepon<span style="color:red"> *</span></label>
                            <input type="text" class="form-control @error('usr_phone_number') is-invalid @enderror" id="input-10" name="usr_phone_number" placeholder="Masukan Nomor Telepon" value="{{ old('usr_phone_number') }}">
                            @error('usr_phone_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">

                        <div class="col-sm-6">
                            <label>Kata Sandi<span style="color:red"> *</span></label>
                            <input type="password" class="form-control @error('usr_password') is-invalid @enderror" id="input-10" name="usr_password" placeholder="Masukan Kata Sandi" value="{{ old('usr_password') }}">
                            @error('usr_password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <label>Ulangi Kata Sandi<span style="color:red"> *</span></label>
                            <input type="password" class="form-control" id="input-10" name="usr_retype_password" placeholder="Masukan Kata Sandi">
                        </div>
                    </div>

                    <h4 class="form-header text-uppercase">
                        <i class="fa fa-address-book-o"></i>
                        Data Pribadi
                    </h4>
                    <div class="form-group row">


                        <div class="col-sm-4">
                            <label>NIK <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" id="input-10" name="usr_nik_or_kitas" placeholder="Masukan NIK">
                        </div>
                        <div class="col-sm-4">
                            <label>NUPTK</label>
                            <input type="text" class="form-control" id="input-10" name="stf_nuptk" placeholder="Masukan NUPTK">
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
                            <label>NO GTK <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" id="input-10" name="stf_gtk" placeholder="Masukan Nomor GTK">
                        </div>

                        <div class="col-sm-4">
                            <label>Kewarganegaraan <span style="color:red;">*</span></label>
                            <select class="form-control" name="usr_citizenship" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option value="WNI">WNI</option>
                                <option value="WNA">WNA</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label>Nama Negara <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" id="input-10" name="usr_country_name" placeholder="Masukan Nama Negara">
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
                            <label>Jenis Kelamin <span style="color:red;">*</span></label>
                            <select class="form-control" name="usr_gender" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option value="Laki-Laki">Laki Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">

                        <div class="col-sm-3">
                            <label>Status Perkawinan <span style="color:red;">*</span></label> <br>

                            <div class="radio icheck-info icheck-inline">
                                <input type="radio" id="info1" name="stf_marital_status" value="Sudah">
                                <label for="info1">Sudah</label>
                            </div>
                            <div class="radio icheck-info icheck-inline">
                                <input type="radio" checked="" id="info2" name="stf_marital_status" value="belum">
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
                                <option value="Jawa Barat">Jawa Barat</option>
                                <option value="Jawa Timur">Jawa Timur</option>
                            </select>
                        </div>


                        <div class="col-sm-4">
                            <label>Kota/Kabupaten<span style="color:red;">*</span></label>
                            <select class="form-control" name="city" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option value="Bandung">Bandung</option>
                                <option value="Jakarta">Jakarta</option>
                            </select>
                        </div>

                        <div class="col-sm-4">
                            <label>Kecamatan <span style="color:red;">*</span></label>
                            <select class="form-control" name="usr_district" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option value="Katapang">Katapang</option>
                                <option value="Arjasari">Arjasari</option>
                            </select>
                        </div>

                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Kode Pos <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" name="usr_postal_code" id="input-10" placeholder="Masukan Kode Pos">
                        </div>

                     <div class="col-sm-4">
                            <label>Alamat <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" name="usr_address" id="input-10" placeholder="Masukan Alamat">
                        </div>  

                        <div class="col-sm-2">
                            <label>RT <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" name="usr_rt" id="input-10" placeholder="Masukan Nomor RT">
                        </div>
                        
                        <div class="col-sm-2">
                            <label>RW <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" id="input-10" name="usr_rw" placeholder="Masukan Nomor RW">
                        </div>

                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Kelurahan/Desa<span style="color:red;">*</span></label>
                            <input type="text" class="form-control" name="usr_village" id="input-10" placeholder="Masukan Desa/Dusun">
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

                    <h4 class="form-header text-uppercase">
                        <i class="fa fa-image-o"></i>
                        LAINYA
                    </h4>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <img src="#" class="img-thumbnail" id="tampil_picture" style="object-fit: cover; height: 200px; width: 200px" />
                            <input type="file" name="usr_profile_picture" id="preview_gambar" class="img-thumbnail" accept="image/x-png,image/gif,image/jpeg" style="display:none" onchange="document.getElementById('usr_profile_picture').value=this.value" /><br>

                            <button type="button" id="usr_profile_picture" class="btn btn-outline-primary btn-sm waves-effect waves-light m-2" onclick="document.getElementById('preview_gambar').click()">Pilih Gambar</button>

                        </div>
                    </div>


                    <div class="form-footer">
                        <a href="/staffs" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</a>
                        <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> SAVE</button>
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