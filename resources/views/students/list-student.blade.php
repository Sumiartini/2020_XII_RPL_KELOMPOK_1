@extends('layouts.master')

@push('title')
- Daftar Siswa
@endpush

@push('styles')
<!--favicon-->
<!--favicon-->
<link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
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
    <h4 class="page-title">Daftar Siswa</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">SMK Mahaputra</a></li>
      <li class="breadcrumb-item"><a href="javaScript:void();">Kelola Siswa</a></li>
      <li class="breadcrumb-item active" aria-current="page">Daftar Siswa</li>
    </ol>
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header"><i class="fa fa-table"></i> Data Exporting</div>
      <div class="card-body">
        <div class="table-responsive">

          @if(Auth()->user()->hasRole('admin'))
          <div class="container" style="margin-bottom: 10px; margin-left: -5px; margin-top: -4px;">
            <a href="{{URL::to('/student/create')}}" data-toggle="tooltip" data-placement="top" title="TAMBAH SISWA" type="button" class="btn btn-outline-primary waves-effect waves-light m-1"> <i class="zmdi zmdi-plus fa-lg"></i> </a>
          </div>
          @else
          @endif
          <table id="example" class="table table-bordered" style="width: 100%">
            <thead>
              <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>NIS</th>
                <th>STATUS</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
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

<script src="{{ asset('assets/plugins/alerts-boxes/js/sweetalert.min.js')}}"></script>
<script src="{{ asset('assets/plugins/alerts-boxes/js/sweet-alert-script.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="{{ asset('js_datatables/datatable.js') }}"></script>
<script>
  $(document).ready(function() {
    student()
  });

  function btnDel(stu_id) {
    studentID = stu_id;
    swal({
        title: "Hapus Siswa",
        text: 'Siswa yang telah dihapus tidak dapat di kembalikan',
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          $.ajax({
            type: 'POST',
            url: 'student/delete',
            data: {
              studentID: stu_id,
              "_token": "{{ csrf_token() }}",
            },
            success: function(data) {
              if (data.status != false) {
                swal(data.message, {
                  button: false,
                  icon: "success",
                  timer: 1000
                });
              } else {
                swal(data.message, {
                  button: false,
                  icon: "error",
                  timer: 1000
                });
              }
              table.ajax.reload();
            },
            error: function(error) {
              swal('Terjadi kegagalan sistem', {
                button: false,
                icon: "error",
                timer: 1000
              });
            }
          });
        }
      });
  }
</script>
@endpush
@endsection