@extends('layouts.master')

@push('title')
- Edit Kata Sandi
@endpush
  
@push('styles')
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Rocker - Bootstrap4  Admin Dashboard Template</title>
  <!--favicon-->
  <link rel="icon" href="{{ asset('assets/images/favicon.ico')}}" type="image/x-icon">
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
    <h4 class="page-title">Edit Kata Sandi</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">SMK Mahaputra</a></li>
      <li class="breadcrumb-item active" aria-current="page">Edit Kata Sandi</li>
    </ol>
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
      <div class="card">
                 <div class="card-body">
                   <div class="card-title">Edit Kata Sandi</div>
                   <hr>
                    <form method="POST" autocomplete="off" action="{{ url('account/profile/1/edit-password')}}" id="submitForm">
                        @csrf
                     <div class="form-group row">
                      <label for="input-4" class="col-sm-2 col-form-label">Kata Sandi Lama</label>
                      <div class="col-sm-10">
                        <input type="text" name="current-password" class="form-control" id="input-4" placeholder="Masukan Kata Sandi Lama">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="input-5" class="col-sm-2 col-form-label">Kata Sandi Baru</label>
                      <div class="col-sm-10">
                        <input type="text" name="new-password" class="form-control" id="input-5" placeholder="Masukan Kata Sandi Baru">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="input-6" class="col-sm-2 col-form-label">Ulangi Kata Sandi</label>
                      <div class="col-sm-10">
                        <input type="text" name="confirm-new-password" class="form-control" id="input-6" placeholder="Ulangi Kata Sandi Baru">
                      </div>
                    </div>
  
                     <div class="form-group row">
                      <label for="input-1" class="col-sm-2 col-form-label"></label>
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary shadow-primary px-5"><i class="icon-lock"></i> Perbarui</button>
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