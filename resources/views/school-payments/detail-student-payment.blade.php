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
    <h4 class="page-title">Detail Pembayaran Siswa</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">{{ env('APP_NAME') }}</a></li>
      <li class="breadcrumb-item"><a href="javaScript:void();">Kelola Pembayaran</a></li>
      <li class="breadcrumb-item"><a href="{{ url('/school-payments')}}">Pembayaran PPDB</a></li>
      <li class="breadcrumb-item active" aria-current="page">Detail Pembayaran Siswa</li>
    </ol>
  </div>
</div>

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

@if ($message = Session::get('failed'))
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

<div class="row">
  <div class="col-12">
  <div class="card">
    <div class="card-header"><i class="fa fa-table"></i>Data Pembayaran PPDB Siswa</div>

    <div class="card-body">
      <div class="table-responsive">
      <table id="example" class="table table-bordered"  style="width:100%;">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Status Pembayaran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($payment as $payment)
            
            <tr>
                <td>{{$no++}}</td>
                <td>{{ $payment->usr_name }}</td>
                <td>
                     @if($payment->stp_payment_status == 1)
                  <p><span class="badge badge-warning shadow-warning m-1">Menunggu Verifikasi</span></p>
                    @elseif($payment->stp_payment_status == 2)
                  <p><span class="badge badge-success shadow-success m-1">Pembayaran Diterima</span></p>
                    @else
                  <p><span class="badge badge-danger shadow-danger m-1">Pembayaran Ditolak</span></p>
                   @endif
                </td>
                <td>
                  <a href="{{url('school-payment/detail/'.$payment->stp_id)}}" type="button" data-toggle="tooltip" data-placement="top" title="DETAIL DATA PEMBAYARAN" class="btn btn-outline-primary waves-effect waves-light m-1"><i class="zmdi zmdi-info-outline fa-lg"></i></a>
                   @if($payment->stp_payment_status == 1)
                  <a href="{{url('/school-payment/accept-payment/'.$payment->stp_id)}}" type="button" data-toggle="tooltip" data-placement="top" title="TERIMA" class="btn btn-outline-success waves-effect waves-light m-1"> <i class="zmdi zmdi-check fa-lg"></i></a>
                  <a href="{{url('/school-payment/refuse-payment/'.$payment->stp_id)}}" type="button" data-toggle="tooltip" data-placement="top" title="TOLAK" class="btn btn-outline-danger waves-effect waves-light m-1"> <i class="zmdi zmdi-close fa-lg"></i></a>
                 @endif
            
            @endforeach

    </table>

    </div>
    </div>
  </div>
  </div>
</div>
<div class="row">
  <div class="col-12">
     <div class="card">
        <div class="card-header text-uppercase">Pembayaran PPDB</div>
        <div class="card-body">
         <div class="media">
            <div class="media-body">
              <dt>Nominal Pembayaran PPDB</dt>
                <dd>
                 <p>Rp. {{ moneyFormat($ppdb_payment_price) }}</p>
                </dd>
              <dt>Jumlah Pembayaran yang sudah dibayar</dt>
              <dd>
                  <p>Rp. {{ moneyFormat($student_payment) }}</p>
              </dd> 
              <dt>Sisa Pembayaran</dt>
              <dd>
                  @if($remaining_payment == 0)
                  <p>Rp. {{ moneyFormat($remaining_payment) }} <span class="badge badge-success">Lunas</span></p>
                  @elseif($remaining_payment >= 0)
                  <p>Rp. {{ moneyFormat($remaining_payment) }} <span class="badge badge-warning">Belum lunas</span></p>
                  @elseif($remaining_payment <= 0)
                  <p>Rp. {{ moneyFormat($remaining_payment) }} <span class="badge badge-danger">Pembayaran melebihi batas</span></p>
                  @endif
              </dd> 
            </div>
          </div>
        </div>
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