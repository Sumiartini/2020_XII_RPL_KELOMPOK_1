@extends('layouts.master')

@push('title')
- Tambah Tahun Ajaran
@endpush

@push('styles')
<!-- simplebar CSS-->
<link href="{{ asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
<!-- Bootstrap core CSS-->
<link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
<!-- animate CSS-->
<link href="{{ asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css" />
<!-- Icons CSS-->
<link href="{{ asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
<!--Bootstrap Datepicker-->
<link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css">
<!-- Sidebar CSS-->
<link href="{{ asset('assets/css/sidebar-menu.css')}}" rel="stylesheet" />
<!-- Custom Style-->
<link href="{{ asset('assets/css/app-style.css')}}" rel="stylesheet" />

@endpush

@section('content')
<div class="row pt-2 pb-2">
  <div class="col-sm-9">
    <h4 class="page-title">Tambah Tahun Ajaran</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">{{ env('APP_NAME') }}</a></li>
      <li class="breadcrumb-item"><a href="{{ url('school-years') }}">Tahun Ajaran</a></li>
      <li class="breadcrumb-item active" aria-current="page">Tambah Tahun Ajaran</li>
    </ol>
  </div>
</div>

<div class="col-lg-12">
  @if ($message = Session::get('error'))
  <div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <div class="alert-icon contrast-alert">
       <i class="icon-check"></i>
   </div>
   <div class="alert-message">
    <span><strong>Gagal!</strong> {{$message}}.</span>
</div>
</div>
@endif
</div>

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <div class="card-title">Tambah Tahun Ajaran</div>
        <hr>
        <form method="POST" autocomplete="off" action="{{ url('school-year/create')}}" id="form-validate">
          @csrf
          <div class="form-group row">
            <label for="input-2" class="col-sm-3 col-form-label">Nama Tahun Ajaran</label>
            <div class="col-sm-9">                            
              <div id="dateragne-picker">
               <div class="input-daterange input-group">
                <input type="text" class="form-control year_picker @error('mjr_name') is-invalid @enderror" value="{{ old('scy_first_year') }}" name="scy_first_year" placeholder="Masukan tahun awal" />
                <div class="input-group-prepend">
                  <span class="input-group-text">/</span>
                </div>
                <input type="text" class="form-control year_picker @error('mjr_name') is-invalid @enderror" value="{{ old('scy_last_year') }}" name="scy_last_year" placeholder="Masukkan tahun akhir" />                
              </div>
            </div>                      
          </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-9">                            
              <div id="dateragne-picker">
               <div class="input-daterange input-group">
                @error('scy_first_year')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror 
                <div class="input-group-prepend">
                  
                </div>
                @error('scy_last_year')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror 
              </div>
            </div>                      
          </div>
        </div>

        <div class="form-group row">
          <label for="input-1" class="col-sm-3 col-form-label"></label>
          <div class="col-sm-9">
            <a href="{{url('school-years')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>  
            <button type="reset" class="btn btn-danger"><i class="fa fa-times"></i> BATAL</button>
            <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Simpan</button>
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

<!--Bootstrap Datepicker Js-->
<script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script>
  $('#default-datepicker').datepicker({
    todayHighlight: true
  });
  $('#autoclose-datepicker').datepicker({
    autoclose: true,
    todayHighlight: true,
    format: "yyyy-mm-dd"
  });

  $('#inline-datepicker').datepicker({
    todayHighlight: true
  });

  $('.year_picker').datepicker({
    autoclose: true,
    minViewMode: 2,
    format: 'yyyy'
  });

  $('#dateragne-picker .input-daterange').datepicker({
    autoclose: true,
    format: 'yyyy'
  });
</script>

<script>
 $().ready(function() {

  $("#form-validate").validate({
    rules: {
      scy_first_year: {
        required: true,
      },
      scy_last_year:{
        required: true
      },
    },
    messages: {
      scy_first_year: {
        required: "Tahun harus diisi"
      },
      scy_last_year: {
        required: "Tahun harus diisi"
      },     
    }
  });
});
</script>
@endpush