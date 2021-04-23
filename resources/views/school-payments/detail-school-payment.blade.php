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
    <h4 class="page-title">Detail Data Pembayaran</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">{{ env('APP_NAME') }}</a></li>
      <li class="breadcrumb-item"><a href="javaScript:void();">Kelola Pembayaran</a></li>
      <li class="breadcrumb-item"><a href="{{ url('/school-payments')}}">Pembayaran PPDB</a></li>
      <li class="breadcrumb-item"><a href="javaScript:void();">Detail Pembayaran Siswa</a></li>
      <li class="breadcrumb-item active" aria-current="page">Detail Data Pembayaran</li>

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
<div class="col-lg-5">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title text-primary">Data Pembayaran</h5>
      <hr>
      <div class="row">

        @foreach($payment as $payment)
        
        <dt class="col-sm-6">Nama Siswa </dt>
        <dd class="col-sm-6">
          <p>{{ $payment->stu_candidate_name }}</p>
        </dd>

        <dt class="col-sm-6">Nominal Bayar </dt>
        <dd class="col-sm-6">
          <p>Rp. {{ moneyFormat($payment->stp_nominal) }}</p>
        </dd>

        <dt class="col-sm-6">Tanggal Pembayaran </dt>
        <dd class="col-sm-6">
          <p>{{ $payment->stp_date }}</p>
        </dd>

        <dt class="col-sm-6">Metode Pembayaran </dt>
        <dd class="col-sm-6">
          <p>{{ $payment->stp_payment_method }}</p>
        </dd>

        <dt class="col-sm-6">Status Pembayaran </dt>
        <dd class="col-sm-6">
          @if($payment->stp_payment_status == 1)
          <p>Menunggu verifikasi</p>
          @elseif($payment->stp_payment_status == 2)
          <p>Pembayaran Diterima</p>
          @else
          <p>Pembayaran Ditolak</p>
          @endif
        </dd>

        @if($payment->stp_reason != null)
        <dt class="col-sm-6">Alasan </dt>
        <dd class="col-sm-6">
          <p>{{ $payment->stp_reason }}</p>
        </dd>
        @endif

        @if($payment->stp_date_verification != null)
        <dt class="col-sm-6">Tanggal Verifikasi </dt>
        <dd class="col-sm-6">
          <p>{{ $payment->stp_date_verification }}</p>
        </dd>
        @endif
      </div>
    </div>
  </div>
</div>
<div class="col-lg-7">
 <div class="card">
  <div class="card-body">
    <h5 class="card-title text-primary">Bukti Pembayaran</h5>
    <hr>
    <div class="user-fullimage text-center">
     <img src="{{ asset($payment->stp_picture)}}" alt="user avatar" class="card-img-top">
   </div>
   <hr>
   <div>
    <a href="{{url('/school-payment/'.$payment->stu_id)}}" class="btn btn-primary" style="float: left;"><i class="fa fa-arrow-left"></i> Kembali</a>
    @if($payment->stp_payment_status == 1)
    <a href="{{url('/school-payment/refuse-payment/'.$payment->stp_id)}}" class="btn btn-danger" style="float: right;">Tolak</a>
    <a href="{{url('/school-payment/accept-payment/'.$payment->stp_id)}}" class="btn btn-success" style="float: right; margin-right: 2px;">Terima</a>
    @endif
  </div>
  @endforeach
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