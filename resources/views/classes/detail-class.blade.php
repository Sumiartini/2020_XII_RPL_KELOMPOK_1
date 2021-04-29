@extends('layouts.master')

@push('title')
- Detail Kelas
@endpush

@push('styles')
<!-- simplebar CSS-->
<link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
<!-- Bootstrap core CSS-->
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
<!--Data Tables -->
<link href="{{ asset('assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
<!-- animate CSS-->
<link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css" />
<!-- Icons CSS-->
<link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
<!-- Sidebar CSS-->
<link href="{{ asset('assets/css/sidebar-menu.css') }}" rel="stylesheet" />
<!-- Custom Style-->
<link href="{{ asset('assets/css/app-style.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        @foreach($class as $class)
        <h4 class="page-title">Detail Kelas {{$class->grl_name . ' ' . $class->mjr_name . ' ' . $class->cls_number }}</h4> 
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">{{ env('APP_NAME') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('classes')}}">Kelas</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Kelas</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
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
    <div class="card">            
        <div class="card-header"><i class="fa fa-table"></i> Daftas Siswa {{$class->grl_name . ' ' . $class->mjr_name . ' ' . $class->cls_number }}</div> 
        
        <div class="card-body">
            <div class="table-responsive">
                <div class="container row" style="margin-bottom: 10px; margin-left: -5px; margin-top: -4px;">
                    <div class="col-4">
                        <a href="{{URL::to('class/'.$class->cls_id.'/add-student')}}" data-toggle="tooltip" data-placement="top" title="TAMBAH SISWA" type="button" class="btn btn-outline-primary waves-effect waves-light m-1"> <i class="zmdi zmdi-plus fa-lg"></i> </a>
                    </div>
                    @endforeach
                    <div class="col-8">
                        @if(isset($teacher->usr_name))
                        <h5 class="float-right">Wali Kelas : {{ $teacher->usr_name }} </h5>
                        @else
                        <h5 class="float-right">Wali Kelas : - </h5>
                        @endif
                    </div>
                </div>
                <table id="example" class="table table-bordered" style="width: 100%;">
                    <thead>
                        <tr>
                            <th> NO </th>
                            <th> Nama Siswa </th>
                            <th> NISN </th>
                            <th> Aksi </th>
                        </tr>                            
                    </thead>
                    <tbody>
                        @foreach($student as $row => $student)
                        <tr>
                            <td> {{++$row}} </td>
                            <td> {{$student->stu_candidate_name}} </td>
                            <td> {{$student->stu_nisn}} </td>
                            <td> 
                                <a href="{{ url('class/'. $student->stc_id. '/move-student-class' )}}" data-toggle="tooltip" data-placement="top" title="PINDAH KELAS" type="button" class="btn btn-outline-success waves-effect waves-light m-1"> <i class="zmdi zmdi-walk fa-lg"></i></a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>

                </table>


            </div>
        </div>
    </div>
</div>
</div><!-- End Row-->

<!--Start Back To Top Button-->
<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
<!--End Back To Top Button-->

@push('scripts')
<!-- Bootstrap core JavaScript-->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<!-- simplebar js -->
<script src="{{ asset('assets/plugins/simplebar/js/simplebar.js') }}"></script>
<!-- waves effect js -->
<script src="{{ asset('assets/js/waves.js') }}"></script>
<!-- sidebar-menu js -->
<script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
<!-- Custom scripts -->
<script src="{{ asset('assets/js/app-script.js') }}"></script>

<!--Data Tables js-->
<script src="{{ asset('assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datatable/js/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datatable/js/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datatable/js/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datatable/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datatable/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js') }}"></script>

@endpush
@endsection