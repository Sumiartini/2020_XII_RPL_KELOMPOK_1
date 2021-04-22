@extends('layouts.master')

@push('title')
- Pembayaran PPDB
@endpush

@push('styles')

  <!-- simplebar CSS-->
<link href="{{ asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet">
<!-- Bootstrap core CSS-->
<link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
<!-- animate CSS-->
<link href="{{ asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css">
<!--Bootstrap Datepicker-->
<link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css">
<!-- Icons CSS-->
<link href="{{ asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
<!-- Sidebar CSS-->
<link href="{{ asset('assets/css/sidebar-menu.css')}}" rel="stylesheet">
<!-- Custom Style-->
<link href="{{ asset('assets/css/app-style.css')}}" rel="stylesheet">

@endpush

@section('content')
<div class="row pt-2 pb-2">
        <div class="col-sm">
        <h4 class="page-title">Pembayaran PPDB</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">{{ env('APP_NAME') }}</a></li>
            <li class="breadcrumb-item" aria-current="page">Bayar PPDB</a></li>
            
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
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title">PEMBAYARAN IURAN PESERTA DIDIK BARU</div>
                <hr>
                <form method="POST" autocomplete="off" action="{{ url('/school-payment/pay')}}" id="form-validate" enctype="multipart/form-data" novalidate="novalidate">
                    @csrf
                    <p style=" text-align: center;">Silahkan Upload Bukti Pembayaran PPDB</p>
                  <div class="row">

                    <dt class="col-sm-2">Sisa Pembayaran</dt>
                    <dd class="col-sm-10">
                        
                    </dd>

                    <dt class="col-sm-2">Transfer Ke Bank</dt>
                    <dd class="col-sm-10">
                        BRI
                    </dd>

                    <dt class="col-sm-2">Nomor Rekening</dt>
                    <dd class="col-sm-10">
                        <input readonly style="border: none; background-color: white; color: #636363;" type="text" value="2104 01 000183 30 7" id="text-copy"  />
                        <button type="button" class="btn btn-outline-primary btn-sm btn-round waves-effect waves-light m-1" onclick="copy_text()">Salin</button>
                    </dd>

                    <dt class="col-sm-2">Atas Nama</dt>
                    <dd class="col-sm-10">
                       SMKS Mahaputra Cerdas Utama
                   </dd><br><br>

                        <label for="input-2" class="col-sm-2 col-form-label">Nominal Bayar<span style="color:red"> *</span></label>
                        <div class="col-sm-9">
                            <input type="text" id="stp_nominal" name="stp_nominal" value="{{ old('stp_nominal') }}" class="@error('stp_nominal') is-invalid @enderror form-control form-control-rounded" placeholder="Masukan Nominal Bayar">
                            @error('stp_nominal')
                            <p>
                                <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                            </p>
                    @enderror
                        </div><br><br>

                        <label class="col-sm-2 col-form-label">Tahun Ajaran<span style="color:red"> *</span></label>
                        <div class="col-sm-9">
                          <select name="stp_school_year_id" class="form-control form-control-rounded @error('str_school_year_id') is-invalid @enderror" value="{{ old('stp_school_year_id') }}">
                          <option disabled="" {{ old('stp_school_year_id') == "" ? 'selected' : '' }}> Pilih </option>
                          @foreach($years as $school_year)
                          <option {{ old('stp_school_year_id') == "$school_year->scy_id" ? 'selected' : '' }} value="{{ $school_year->scy_id }}">{{ $school_year->scy_name }}</option>
                          @endforeach
                          </select>

                          @error('stp_school_year_id')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                          
                        </div>
                        
                        <div class="col-sm-9">
                           <input type="hidden" name="stp_type_payment" class="form-control form-control col-sm-4" value="2">
                        </div>
                    
                </div>


            <label style="margin-top: 10px;">Pilih Metode Pembayaran<span style="color:red"> *</span></label>
            <div class="form-group row">
                <div class="col-sm-5">
                    <div class="radio icheck-info icheck-inline">
                        <input type="radio" checked="" id="stp_payment_method1" value="Transfer Bank" name="stp_payment_method">
                        <label for="stp_payment_method1"> Transfer Bank </label>
                    </div>
                    <div class="radio icheck-info icheck-inline">
                        <input type="radio" id="stp_payment_method2" value="Offline Ke Sekolah" name="stp_payment_method">
                        <label for="stp_payment_method2"> Offline Ke Sekolah </label>
                    </div>
                </div>
            </div>
            
            <label>Kirim Foto Bukti Pembayaran<span style="color:red"> *</span></label>
            <div class="form-group row">

                <div class="col-sm-4">
                    <img class="img-thumbnail" id="tampil_picture" style="object-fit: cover; height: 200px; width: 200px" />
                    <input type="file" name="stp_picture" id="preview_gambar" class="@error('stp_picture') is-invalid @enderror" accept="image/x-png,image/gif,image/jpeg onchange="document.getElementById('stp_picture').value=this.value" /><br>
                    <!-- <button type="button" id="stp_picture" class="btn btn-outline-primary btn-sm waves-effect waves-light m-2" onclick="document.getElementById('preview_gambar').click()"> Pilih Gambar </button> -->
                    @error('stp_picture')
                    <p>
                        <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                    </p>
                    @enderror
                 </div>
            </div>


            <div class="form-footer">
              <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Kirim</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>


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

<!-- script select2 -->
<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.single-select').select2();                 
    });

</script>



<script>
    function bacaGambar(input) {
       if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
              $('#tampil_picture').attr('src', e.target.result);
          }

          reader.readAsDataURL(input.files[0]);
      }
  }
  $("#preview_gambar").change(function(){
   bacaGambar(this);
});
</script>

<!--Form Validatin Script-->
<script src="{{ asset('assets/plugins/jquery-validation/js/jquery.validate.min.js')}}"></script>

<script>
 $().ready(function() {

  $("#form-validate").validate({
    rules: {
      stp_nominal:{
        required:true,
      },
      stp_picture:{
        required:true,
      },
      stp_school_year_id:{
        required:true,
      }
    },
    messages: {
      stp_nominal:{
        required:"Nominal Bayar Harus Diisi",
      },
      stp_picture:{
        required:"Foto Bukti Pembayaran Harus Diisi",
      },
      stp_school_year_id:{
        required:"Tahun Ajaran Harus Diisi",
      }
    },
  });
});
</script>
<script src="{{ asset('assets/plugins/jquery-mask/jquery.mask.min.js')}}"></script>
<script type="text/javascript">
  $(document).ready(function () {
     $( '#stp_nominal' ).mask('000.000.000.000.000', {
        reverse: true});
   });
</script>

<script type="text/javascript">
    function copy_text() {
        document.getElementById("text-copy").select();
        document.execCommand("copy");
        Lobibox.notify('default', {
            pauseDelayOnHover: true,
            size: 'mini',
            rounded: true,
            delayIndicator: false,
            continueDelayOnInactiveTab: false,
            position: 'top right',
            msg: 'Nomor rekening berhasil di copy'
        });
    }
</script>

@endpush
@endsection