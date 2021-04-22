@extends('layouts.master')

@push('title')
- Siswa dikeluarkan
@endpush

@push('styles')
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
<meta name="description" content=""/>
<meta name="author" content=""/>
<!--favicon-->
<link rel="icon" href="{{ asset('assets/images/logo.png')}}" type="image/x-icon">
<!-- simplebar CSS-->
<link href="{{ asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
<!-- Bootstrap core CSS-->
<link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
<!-- animate CSS-->
<link href="{{ asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css"/>
<!-- Icons CSS-->
<link href="{{ asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
<!-- Sidebar CSS-->
<link href="{{ asset('assets/css/sidebar-menu.css')}}" rel="stylesheet"/>
<!-- Custom Style-->
<link href="{{ asset('assets/css/app-style.css')}}" rel="stylesheet"/>

@endpush

@section('content')
<div class="row pt-2 pb-2">
  <div class="col-sm-9">
    <h4 class="page-title">Siswa dikeluarkan</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">{{ env('APP_NAME') }}</a></li>
      <li class="breadcrumb-item"><a href="{{ url('students-prospective') }}">Kelola Siswa</a></li>
      <li class="breadcrumb-item active" aria-current="page"> Siswa dikeluarkan</li>
    </ol>
  </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <div class="alert-icon contrast-alert">
   <i class="icon-check"></i>
 </div>
 <div class="alert-message">
  <span><strong>Berhasil!</strong> {{$message}}.</span>
</div>
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger alert-dismissible" role="alert">
 <button type="button" class="close" data-dismiss="alert">×</button>
 <div class="alert-icon contrast-alert">
   <i class="icon-close"></i>
 </div>
 <div class="alert-message">
  <span><strong>Gagal!</strong> {{$message}}.</span>
</div>
</div>
@endif

<div class="row">
  <div class="col-lg-12">
    <div class="card">
     <div class="card-body">
       <div class="card-title">Siswa dikeluarkan</div>
       <hr>
       <form method="POST" autocomplete="off" action="{{ url('student/drop-out/'.$student->stu_id)}}" id="form-validate" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="input-2" class="col-sm-4 col-form-label">Bukti foto surat dikeluarkan<span style="color:red"> *</span></label>
            <div class="col-sm-8">
                <img class="img-thumbnail" id="tampil_picture" style="object-fit: cover; border-color: white;" / >
                <div></div>
                <input type="file" name="str_upload_file" id="preview_gambar" class="@error('str_upload_file') is-invalid @enderror" accept="image/x-png,image/gif,image/jpeg" onchange="document.getElementById('str_upload_file').value=this.value" /><br>
                @error('str_upload_file')
                <p>
                    <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                </p>
                @enderror 
            </div>
        </div>

        <div class="form-group row">
          <label for="input-4" class="col-sm-4 col-form-label">Detail alasan dikeluarkan<span style="color:red"> *</span></label>
          <div class="col-sm-8">
            <textarea rows="5" class="form-control" name="str_reason"></textarea>
            @error('str_reason')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>

        <div class="form-group row">
          <label for="input-4" class="col-sm-4 col-form-label">Verifikasi sandi<span style="color:red"> *</span></label>
          <div class="col-sm-8">
            <input type="password" name="usr_password" class="form-control form-control-rounded @error('usr_password') is-invalid @enderror" id="input-4" placeholder="Masukan kata sandi">
            @error('usr_password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>

        <div class="form-group row">
          <label for="input-1" class="col-sm-4 col-form-label"></label>
          <div class="col-sm-8">
            <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> SIMPAN</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div><!-- End Row-->

@endsection



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
          str_reason: {
            required: true,
            minlength: 10
          },
          str_upload_file: "required",
          usr_password: "required"
      },
      messages: {
          str_reason: {
            required: "Alasan siswa dikeluarkan harus di isi",
            minlength: "Alasan minimal 10 karakter"
          },
          str_upload_file: "Masukan bukti surat dikeluarkan",
          usr_password: "Masukan kata sandi"
      }
  });
});
</script>
<script>
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
@endpush    