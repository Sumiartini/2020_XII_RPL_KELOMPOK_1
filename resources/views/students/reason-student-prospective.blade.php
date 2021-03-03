@extends('layouts.master')

@push('title')
- Alasan Terima Siswa
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
    <h4 class="page-title">Alasan Calon Siswa Diterima</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">{{ env('APP_NAME') }}</a></li>
      <li class="breadcrumb-item"><a href="{{ url('students-prospective') }}">Kelola Calon Siswa</a></li>
      <li class="breadcrumb-item active" aria-current="page"> Alasan Terima Siswa</li>
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

@if ($message = Session::get('failed'))
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
       <div class="card-title">Terima siswa</div>
       <hr>
       <form method="POST" autocomplete="off" action="{{ url('student/receipted/'.$student_registration->str_id)}}" id="submitForm">
        @csrf

        <div class="form-group row">
          <label for="input-4" class="col-sm-2 col-form-label">Alasan diterima: </label>
          <div class="col-sm-10">
            <input type="text" name="str_reason" class="form-control form-control-rounded @error('str_reason') is-invalid @enderror" id="input-4" placeholder="Masukan Alasan Siswa Di Terima" value="{{ old('str_reason') }}">
            
            @error('str_reason')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>

        <div class="form-group row">
          <label for="input-1" class="col-sm-2 col-form-label"></label>
          <div class="col-sm-10">
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

<script>
  $(document).ready(function() {
    $("#submitForm").submit(function(e) {
      $(this).find("button[type='submit']").prop('disabled', true);
      $("#btnSubmit").attr("disabled", true);
      return true;
    });      
  });

</script>
@endpush    