@extends('layouts.master')

@push('title')
- Tambah Jabatan
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
<!-- Sidebar CSS-->
<link href="{{ asset('assets/css/sidebar-menu.css')}}" rel="stylesheet" />
<!-- Custom Style-->
<link href="{{ asset('assets/css/app-style.css')}}" rel="stylesheet" />

@endpush

@section('content')
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">Tambah Jabatan</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">{{ env('APP_NAME') }}</a></li>
            <li class="breadcrumb-item"><a href="{{ url('position-types') }}">Jabatan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Jabatan</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title">Tambah Jabatan</div>
                <hr>
                <form method="POST" autocomplete="off" action="{{ url('position-type/create')}}" id="form-validate">
                    @csrf
                    <div class="form-group row">
                        <label for="input-2" class="col-sm-3 col-form-label">Nama Jabatan</label>
                        <div class="col-sm-9">
                            <input type="text" name="pst_name" class="form-control form-control-rounded @error('pst_name') is-invalid @enderror" value="{{ old('pst_name') }}" placeholder="Masukan Nama  Jabatan">
                            @error('pst_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pst_honorarium" class="col-sm-3 col-form-label">Jumlah honor</label>
                        <div class="col-sm-9">
                            <input id="pst_honorarium" type="text" name="pst_honorarium" class="form-control form-control-rounded @error('pst_honorarium') is-invalid @enderror" value="{{ old('pst_honorarium') }}" placeholder="Masukan Jumlah honor">
                            @error('pst_honorarium')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="input-1" class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <a href="{{url('position-types')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>  
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
<!-- Masking Rupiah -->
<script src="{{ asset('assets/plugins/jquery-mask/jquery.mask.min.js')}}"></script>
<script type="text/javascript">
  $(document).ready(function () {
     $( '#pst_honorarium' ).mask('000.000.000.000.000', {
        reverse: true});
   });
</script>
<script>
    $().ready(function() {

    $("#form-validate").validate({
        rules: {
            pst_name: {
              required: true,
            },
            pst_honorarium:{
                required: true
            },
        },
        messages: {
            pst_name: {
              required: "Nama jabatan harus di isi"
            },
            pst_honorarium: {
              required: "Jumlah honor harus di isi"
            },
            
        }
    });
});
</script>
@endpush