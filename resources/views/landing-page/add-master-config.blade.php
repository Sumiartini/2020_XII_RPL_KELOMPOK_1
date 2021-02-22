@extends('layouts.master')

@push('title')
- Tambah konfigurasi Halaman Arahan
@endpush

@push('styles')

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
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
        <h4 class="page-title">Tambah konfigurasi Halaman Arahan</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">SMK Mahaputra</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Kelola Konfigurasi Halaman Arahan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Konfigurasi Halaman Arahan</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form id="form-validate" autocomplete="off" method="POST" action="{{ url('master-config/create') }}" novalidate="novalidate">
                    @csrf
                    <h4 class="form-header text-uppercase">
                        <i class="  "></i>
                        Tambah Konfigurasi Halaman Arahan
                    </h4>

                    <div class="form-group row">

                        <div class="col-sm-5">
                            <label>Nama<span style="color:red"> *</span></label> 
                            <input type="text" name="msc_name" class="form-control form-control-rounded @error('msc_name') is-invalid @enderror" value="{{ old('msc_name') }}" placeholder="Masukan Nama konfigurasi">
                            @error('msc_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                         <div class="col-sm-8">
                            <label>Deskripsi</label>
                            <textarea name="msc_description" value="{{ old('msc_description') }}" rows="5" cols="10" placeholder="Masukan Deskripsi Sekolah" class="form-control"></textarea>
                            @error('msc_description')
                            <p class="invalid-feedback" role="alert">
                                <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                            </p>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-sm-8">
                            <label>Visi</label>
                            <textarea name="msc_vision" value="{{ old('msc_vision') }}" rows="5" cols="10" placeholder="Masukan Visi Sekolah" class="form-control"></textarea>
                            @error('msc_vision')
                            <p class="invalid-feedback" role="alert">
                                <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                            </p>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-8">
                            <label>Misi</label>
                            <textarea name="msc_mision" value="{{ old('msc_mision') }}" rows="5" cols="10" placeholder="Masukan Misi Sekolah" class="form-control"></textarea>
                            @error('msc_mision')
                            <p class="invalid-feedback" role="alert">
                                <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                            </p>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row">                                                                                     
                        <div class="col-sm-3">
                            <label for="input-8">Logo Sekolah</label>
                            <img class="img-thumbnail" id="tampil_picture" style="object-fit: cover; height: 200px; width: 200px"/> 
                            <input type="file" name="msc_logo" id="preview_gambar" accept="image/x-png,image/gif,image/jpeg" onchange="document.getElementById('msc_logo').value=this.value" />
                        </div>
                    </div>



                    <div class="form-group row">
                        <div class="col-sm-5">
                            <label>Kontak Sekolah</label>
                            <input type="text" name="msc_school_phone_number" value="{{ old('msc_school_phone_number') }}" class="form-control form-control-rounded" placeholder="Masukan No.Telp Sekolah">
                        </div>
                    </div>
                    
                    <div class="form-footer">
                        <button type="reset" class="btn btn-danger"><i class="fa fa-times"></i> BATAL</button>
                        <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> SIMPAN</button>
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

    $("#form-validate").validate({
        rules: {
            msc_name: {
              required: true,
            },
            pst_honorarium:{
                required: true
            },
           
        },
        messages: {
            msc_name: {
              required: "Nama konfigurasi harus di isi"
            },
        }
    });
});
</script>

@endpush
@endsection
