@extends('layouts.master')

@push('title')
- Detail Pembayaran PPDB
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
    <h4 class="page-title">Detail Pembayaran</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">{{ env('APP_NAME') }}</a></li>
      <li class="breadcrumb-item"><a href="{{ url('/school-payments')}}">Daftar Pembayaran</a></li>
      <li class="breadcrumb-item active" aria-current="page">Detail Pembayaran</li>
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
</div>
<div class="row">
<div class="col-lg-12">
  <div class="card">
    <div class="card-header"><i class="fa fa-table"></i>Data Pembayaran PPDB Siswa</div>
    <div class="card-body">
      <div class="table-responsive">
      <table id="default-datatable" class="table table-bordered"  style="width:100%;">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th class="text-right">Status Pembayaran</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($payment as $payment)
            
            <tr>
                <td>{{$no++}}</td>
                <td>{{ $payment->usr_name }}</td>
                <td class="text-right">
                     @if($payment->stp_payment_status == 1)
                  <p>Menunggu verifikasi</p>
                    @elseif($payment->stp_payment_status == 2)
                  <p>Pembayaran Diterima</p>
                    @else
                  <p>Pembayaran Ditolak</p>
                   @endif
                </td>
                <td>
                  <a href="{{url('school-payment/detail/'.$payment->stp_id)}}" type="button" data-toggle="tooltip" data-placement="top" title="DETAIL" class="btn btn-outline-primary waves-effect waves-light m-1"><i class="zmdi zmdi-info-outline fa-lg"></i></a>
                   @if($payment->stp_payment_status == 1)
                  <a href="{{url('/student/accept-payment/'.$payment->stu_id)}}" type="button" data-toggle="tooltip" data-placement="top" title="TERIMA" class="btn btn-outline-success waves-effect waves-light m-1"> <i class="zmdi zmdi-check fa-lg"></i></a>
                 <a href="{{url('/student/refuse-payment/'.$payment->stu_id)}}" type="button" data-toggle="tooltip" data-placement="top" title="TOLAK" class="btn btn-outline-danger waves-effect waves-light m-1"> <i class="zmdi zmdi-close fa-lg"></i></a>
                 @endif
            
            @endforeach

    </table>

    </div>
    </div>
  </div>
</div>
</div><!-- End Row-->

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