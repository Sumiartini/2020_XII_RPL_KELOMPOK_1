@extends('layouts.master')

@push('title')
- Detail Berkas Informasi
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
<link href="{{ asset('assets/css/app-style.css')}}" rel="stylesheet"/>
@endpush

@section('content')

<div class="row pt-2 pb-2">
  <div class="col-sm-9">
    <h4 class="page-title">Detail Berkas Informasi</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">{{ env('APP_NAME') }}</a></li>
      <li class="breadcrumb-item"><a href="{{ url('/master-slides')}}">Daftar Berkas Informasi</a></li>
      <li class="breadcrumb-item active" aria-current="page">Detail Berkas Informasi</li>
    </ol>
  </div>
</div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title text-primary">Data Berkas Informasi</h5>
      <hr>  
      <div class="row" style="margin-top: 20px;">
      
      <dt class="col-sm-2">Nama</dt>
      <dd class="col-sm-10">
          <p>{{ $master_slide->mss_name }}</p>
      </dd>
      <dt class="col-sm-2">Poster</dt>
      <dd class="col-sm-10">
           <div class="user-fullimage">
            <img src="{{ asset($master_slide->mss_file)}}" alt="user avatar"  class="card-img-top" >            
          </div>
      </dd>

      <dd class="col-sm-12">
          <a href="{{url('/master-slide/edit/'.$master_slide->mss_id)}}" class="btn btn-success" style="float: right;"> <i class="fa fa-edit fa-lg"></i>edit</a> 
          <a href="{{url('master-slides')}}" class="btn btn-primary" style="float: right;  margin-right: 5px;"><i class="fa fa-arrow-left"></i> Kembali</a>  
      </dd>
      
       </div>
     
   
      </div>
    </div>



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

</body>

@endpush