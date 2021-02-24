@extends('layouts.master')

@push('title')
- Edit Jurusan
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
        <h4 class="page-title">Edit Kelas</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">SMK Mahaputra</a></li>
            <li class="breadcrumb-item"><a href="{{ url('classes') }}">Kelas</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Kelas</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
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

        <div class="card">
            <div class="card-body">
                <div class="card-title">Edit Kelas</div>
                <hr>
                <form method="POST" autocomplete="off" action="{{ url('class/edit/'.$class->cls_id)}}" id="form-validate">
                    @csrf

                     <div class="form-group row">
                        <label for="input-2" class="col-sm-3 col-form-label">Tingkatan</label>
                        <div class="col-sm-9">
                                <select name="cls_grade_level" class="form-control form-control-rounded @error('cls_grade_level') is-invalid @enderror">
                                <option selected value="{{ $class->grl_id }}"> {{ $class->grl_name }} </option>
                                @foreach($grade_levels as $grade_level)
                                
                                @if($class->cls_grade_level_id != $grade_level->grl_id)
                                <option value="{{ $grade_level->grl_id }}">{{ $grade_level->grl_name }}</option>
                                @endif

                            
                                @endforeach
                            </select>
                            @error('cls_grade_level')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror 
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="input-2" class="col-sm-3 col-form-label">Jurusan</label>
                        <div class="col-sm-9">
                            <select selected name="cls_major" class="form-control form-control-rounded @error('cls_major') is-invalid @enderror">
                            <option value="{{ $class->mjr_id }}"> {{ $class->mjr_name }} </option>
                            @foreach($majors as $major)
                            @if($class->cls_major_id != $major->mjr_id)
                            <option value="{{ $major->mjr_id }}">{{ $major->mjr_name }}</option>
                            @endif
                            @endforeach
                            </select>

                            @error('cls_major')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror 
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="input-2" class="col-sm-3 col-form-label">Nomor Kelas</label>
                        <div class="col-sm-9">
                            <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="cls_number" class="form-control form-control-rounded @error('cls_number') is-invalid @enderror" value="{{ $class->cls_number }}"cls_number>
                            @error('cls_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror 
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="input-1" class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-primary shadow-primary px-5">Update</button>
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
            cls_number: {
              required: true,
            },
            cls_major:{
                required: true
            },
            cls_grade_level:{
                required: true
            }
        },
        messages: {
            cls_number: {
              required: "Nomor Kelas harus di isi"
            },     
            cls_major: {
                required: "Nama jurusan harus di pilih"
            },
            cls_grade_level:{
                required: "Tingkatan kelas harus di pilih"
            },
        }
    });
});
</script>
@endpush