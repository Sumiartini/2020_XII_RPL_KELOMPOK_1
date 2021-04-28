@extends('layouts.master')

@push('title')
- Dashboard
@endpush

@push('styles')
<!-- Vector CSS -->
<link href="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
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
<!--Start Dashboard Content-->
<div class="row pt-2 pb-2">
  <div class="col-sm-9">
    <h4 class="page-title">DASHBOARD</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javaScript:void();">{{ env('APP_NAME') }}</a></li>
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
    </ol>
  </div>
  <div class="col-sm-3">
  </div>
</div>

 @if(Auth()->user()->hasRole('student'))
<div class="row mt-4">
  <div class="col-12 col-lg-6 col-xl-4">
    <div class="card bg-pattern-primary">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <h4 class="text-white">{{ $students }}</h4>
            <span class="text-white">TOTAL SISWA</span>
          </div>
          <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
            <i class="icon-user text-white"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-6 col-xl-4">
    <div class="card bg-pattern-danger">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <h4 class="text-white">{{ $teachers }}</h4>
            <span class="text-white">TOTAL GURU</span>
          </div>
          <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
            <i class="icon-user text-white"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-6 col-xl-4">
    <div class="card bg-pattern-success">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <h4 class="text-white">{{ $staffs }}</h4>
            <span class="text-white">TOTAL STAF</span>
          </div>
          <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
            <i class="icon-user text-white"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>


 @elseif(Auth()->user()->hasRole('teacher'))
<div class="row mt-4">
  <div class="col-12 col-lg-6 col-xl-4">
    <div class="card bg-pattern-primary">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <h4 class="text-white">{{ $students }}</h4>
            <span class="text-white">TOTAL SISWA</span>
          </div>
          <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
            <i class="icon-user text-white"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-6 col-xl-4">
    <div class="card bg-pattern-danger">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <h4 class="text-white">{{ $teachers }}</h4>
            <span class="text-white">TOTAL GURU</span>
          </div>
          <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
            <i class="icon-user text-white"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-6 col-xl-4">
    <div class="card bg-pattern-success">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <h4 class="text-white">{{ $staffs }}</h4>
            <span class="text-white">TOTAL STAF</span>
          </div>
          <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
            <i class="icon-user text-white"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@elseif(Auth()->user()->hasRole('staff'))

<div class="row mt-4">
  <div class="col-12 col-lg-6 col-xl-4">
    <div class="card bg-pattern-primary">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <a href="{{URL::to('/students')}}"><h4 class="text-white">{{ $students }} Siswa </h4>
            <span class="text-white">TOTAL SISWA</span>
          </div>
          <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
            <a href="{{URL::to('/students')}}"><i class="icon-user text-white"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-6 col-xl-4">
    <div class="card bg-pattern-danger">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <a href="{{URL::to('/teachers')}}"><h4 class="text-white">{{ $teachers }} Guru </h4>
            <span class="text-white">TOTAL GURU</span>
          </div>
          <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
            <a href="{{URL::to('/teachers')}}"><i class="icon-user text-white"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-6 col-xl-4">
    <div class="card bg-pattern-success">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <h4 class="text-white">{{ $staffs }} Staf </h4>
            <span class="text-white">TOTAL STAF</span>
          </div>
          <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
            <i class="icon-user text-white"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<div class="row mt-4">
  <div class="col-12 col-lg-6 col-xl-4">
    <div class="card bg-pattern-primary">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <a href="{{URL::to('/students-prospective')}}"><h4 class="text-white">{{ $students_prospective }} Calon Siswa </h4>
            <span class="text-white">TOTAL CALON SISWA</span>
          </div>
          <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
            <a href="{{URL::to('/students-prospective')}}"><i class="icon-user text-white"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-6 col-xl-4">
    <div class="card bg-pattern-danger">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <a href="{{URL::to('/teachers-prospective')}}"><h4 class="text-white">{{ $teachers_prospective }} Calon Guru </h4>
            <span class="text-white">TOTAL CALON GURU</span>
          </div>
          <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
            <a href="{{URL::to('/teachers-prospective')}}"><i class="icon-user text-white"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-6 col-xl-4">
    <div class="card bg-pattern-success">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <h4 class="text-white">{{ $staffs_prospective }} Calon Staf </h4>
            <span class="text-white">TOTAL CALON STAF</span>
          </div>
          <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
            <i class="icon-user text-white"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<div class="row mt-4">
  <div class="col-12 col-lg-6 col-xl-4">
    <div class="card bg-pattern-primary">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <a href="{{URL::to('/students-rejected')}}"><h4 class="text-white">{{ $students_rejected }} Siswa Ditolak</h4>
            <span class="text-white">TOTAL SISWA DITOLAK</span>
          </div>
          <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
            <a href="{{URL::to('/students-rejected')}}"><i class="icon-user text-white"></i></a>
          </div>  
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-6 col-xl-4">
    <div class="card bg-pattern-danger">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <a href="{{URL::to('/teachers-rejected')}}"><h4 class="text-white">{{ $teachers_rejected }} Guru Ditolak</h4>
            <span class="text-white">TOTAL GURU DITOLAK</span>
          </div>
          <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
            <a href="{{URL::to('/teachers-rejected')}}"><i class="icon-user text-white"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-6 col-xl-4">
    <div class="card bg-pattern-success">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <h4 class="text-white">{{ $staffs_rejected }} Staf Ditolak</h4>
            <span class="text-white">TOTAL STAF DITOLAK</span>
          </div>
          <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
            <i class="icon-user text-white"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<div class="row mt-4">
  <div class="col-12 col-lg-6 col-xl-4">
    <div class="card bg-pattern-primary">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <a href="{{URL::to('/student-moves')}}"><h4 class="text-white">{{ $students_moves }} Siswa Pindah</h4>
            <span class="text-white">TOTAL SISWA PINDAH</span>
          </div>
          <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
            <a href="{{URL::to('/student-moves')}}"><i class="icon-user text-white"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>

<div class="row mt-4">
  <div class="col-12 col-lg-6 col-xl-4">
    <div class="card bg-pattern-primary">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <a href="{{URL::to('/student-drop-outs')}}"><h4 class="text-white">{{ $students_drop_outs }} Siswa Keluar </h4>
            <span class="text-white">TOTAL SISWA KELUAR</span>
          </div>
          <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
            <a href="{{URL::to('/student-drop-outs')}}"><i class="icon-user text-white"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>

@else
<div class="row mt-4">
  <div class="col-12 col-lg-6 col-xl-4">
    <div class="card bg-pattern-primary">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <a href="{{URL::to('/students')}}"><h4 class="text-white">{{ $students }} Siswa </h4>
            <span class="text-white">TOTAL SISWA</span>
          </div>
          <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
            <a href="{{URL::to('/students')}}"><i class="icon-user text-white"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-6 col-xl-4">
    <div class="card bg-pattern-danger">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <a href="{{URL::to('/teachers')}}"><h4 class="text-white">{{ $teachers }} Guru </h4>
            <span class="text-white">TOTAL GURU</span>
          </div>
          <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
            <a href="{{URL::to('/teachers')}}"><i class="icon-user text-white"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-6 col-xl-4">
    <div class="card bg-pattern-success">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <a href="{{URL::to('/staffs')}}"><h4 class="text-white">{{ $staffs }} Staf </h4>
            <span class="text-white">TOTAL STAF</span>
          </div>
          <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
            <a href="{{URL::to('/staffs')}}"><i class="icon-user text-white"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<div class="row mt-4">
  <div class="col-12 col-lg-6 col-xl-4">
    <div class="card bg-pattern-primary">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <a href="{{URL::to('/students-prospective')}}"><h4 class="text-white">{{ $students_prospective }} Calon Siswa </h4>
            <span class="text-white">TOTAL CALON SISWA</span>
          </div>
          <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
            <a href="{{URL::to('/students-prospective')}}"><i class="icon-user text-white"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-6 col-xl-4">
    <div class="card bg-pattern-danger">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <a href="{{URL::to('/teachers-prospective')}}"><h4 class="text-white">{{ $teachers_prospective }} Calon Guru </h4>
            <span class="text-white">TOTAL CALON GURU</span>
          </div>
          <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
            <a href="{{URL::to('/teachers-prospective')}}"><i class="icon-user text-white"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-6 col-xl-4">
    <div class="card bg-pattern-success">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <a href="{{URL::to('/staffs-prospective')}}"><h4 class="text-white">{{ $staffs_prospective }} Calon Staf </h4>
            <span class="text-white">TOTAL CALON STAF</span>
          </div>
          <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
            <a href="{{URL::to('/staffs-prospective')}}"><i class="icon-user text-white"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<div class="row mt-4">
  <div class="col-12 col-lg-6 col-xl-4">
    <div class="card bg-pattern-primary">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <a href="{{URL::to('/students-rejected')}}"><h4 class="text-white">{{ $students_rejected }} Siswa Ditolak</h4>
            <span class="text-white">TOTAL SISWA DITOLAK</span>
          </div>
          <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
            <a href="{{URL::to('/students-rejected')}}"><i class="icon-user text-white"></i></a>
          </div>  
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-6 col-xl-4">
    <div class="card bg-pattern-danger">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <a href="{{URL::to('/teachers-rejected')}}"><h4 class="text-white">{{ $teachers_rejected }} Guru Ditolak</h4>
            <span class="text-white">TOTAL GURU DITOLAK</span>
          </div>
          <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
            <a href="{{URL::to('/teachers-rejected')}}"><i class="icon-user text-white"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-6 col-xl-4">
    <div class="card bg-pattern-success">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <a href="{{URL::to('/staffs-rejected')}}"><h4 class="text-white">{{ $staffs_rejected }} Staf Ditolak</h4>
            <span class="text-white">TOTAL STAF DITOLAK</span>
          </div>
          <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
            <a href="{{URL::to('/staffs-rejected')}}"><i class="icon-user text-white"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<div class="row mt-4">
  <div class="col-12 col-lg-6 col-xl-4">
    <div class="card bg-pattern-primary">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <a href="{{URL::to('/student-moves')}}"><h4 class="text-white">{{ $students_moves }} Siswa Pindah</h4>
            <span class="text-white">TOTAL SISWA PINDAH</span>
          </div>
          <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
            <a href="{{URL::to('/student-moves')}}"><i class="icon-user text-white"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>

<div class="row mt-4">
  <div class="col-12 col-lg-6 col-xl-4">
    <div class="card bg-pattern-primary">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <a href="{{URL::to('/student-drop-outs')}}"><h4 class="text-white">{{ $students_drop_outs }} Siswa Keluar </h4>
            <span class="text-white">TOTAL SISWA KELUAR</span>
          </div>
          <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
            <a href="{{URL::to('/student-drop-outs')}}"><i class="icon-user text-white"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>



@endif

<!--End Row-->

<!--End Dashboard Content-->

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

<!-- Vector map JavaScript -->
<script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- Chart js -->
<script src="{{ asset('assets/plugins/Chart.js/Chart.min.js')}}"></script>

@endpush
@endsection