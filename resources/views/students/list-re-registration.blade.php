@extends('layouts.master')

@push('title')
- Siswa daftar ulang
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
    <h4 class="page-title">Siswa daftar ulang</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">{{ env('APP_NAME') }}</a></li>
      <li class="breadcrumb-item"><a href="javaScript:void();">Kelola Siswa</a></li>
      <li class="breadcrumb-item active" aria-current="page">Siswa daftar ulang</li>
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
      <div class="card-header"><i class="fa fa-table"></i> Data Siswa</div>
      <div class="card-body">
        <div class="container" style="margin-bottom: 10px; margin-left: -5px; margin-top: -4px;">
          <!-- <a href="{{URL::to('/student/create')}}" data-toggle="tooltip" data-placement="top" title="TAMBAH SISWA" type="button" class="btn btn-outline-primary waves-effect waves-light m-1"> <i class="zmdi zmdi-plus fa-lg"></i></a>
            
          <a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="UBAH KE DAFTAR ULANG" type="button" class="btn btn-outline-info waves-effect waves-light m-1 update_to_re_registration float-right"> <i class="icon-exclamation icon-lg"></i></a> -->
          </div>
        <div class="table-responsive">

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


<div class="modal fade" id="largesizemodal" style="display: none;" data-backdrop="static">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><i class="fa fa-star"></i> Modal title</h5>
        <button type="button" class="close" onclick="reset()" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group row">
            <label for="rounded-input" class="col-sm-3 col-form-label">Nama Lengkap</label>
            <div class="col-sm-9">
              <input type="text" id="stu_candidate_name" class="form-control form-control-rounded">
            </div>
          </div>
          <div class="form-group row">
            <label for="rounded-input" class="col-sm-3 col-form-label">Nomor induk siswa</label>
            <div class="col-sm-9">
              <input type="text" id="stu_name" class="form-control form-control-rounded">
            </div>
          </div>
          <div class="form-group row">
            <label for="rounded-input" class="col-sm-3 col-form-label">ROUNDED INPUT</label>
            <div class="col-sm-9">
              <input type="text" id="rounded-input" class="form-control form-control-rounded">
            </div>
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" onclick="reset()" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
        <button type="button" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Save changes</button>
      </div>
    </div>
  </div>
</div>

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

<script src="{{ asset('js_datatables/datatable.js') }}"></script>
<script>
  $(document).ready(function() {
    studentReRegistration()
  });
</script>

<script>
    function reset()
    {
        $('#example').DataTable().ajax.reload()
        $('#largesizemodal').modal('hide')
        
    }

    // function largesizemodal() {
    //     reset();
    //     $('#asdf').modal('show');
    // }
        function editSubject(event) {
        var stu_id = $(event).data("id");
        let _url = `/student/re-registration/${stu_id}`;
        // $('#titleError').text('');
        $.ajax({
            url: _url,
            type: "GET",
            success: function(response) {
                if (response) {
                    $("#stu_id").val(response.stu_id);
                    $("#stu_candidate_name").val(response.stu_candidate_name);
                    $("#stu_nis").val(response.stu_nis);
                    $('#largesizemodal').modal('show');
                }
            }
        });
    }
</script>
@endpush
@endsection