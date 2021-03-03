@extends('layouts.masterFront')


@push('title')
- Pembayaran
@endpush

@push('styles')
<!-- simplebar CSS-->
<link href="{{ asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet">
<!-- notifications css -->
<link rel="stylesheet" href="{{ asset('assets/plugins/notifications/css/lobibox.min.css')}}"/>
<!-- Bootstrap core CSS-->
<link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
<!-- animate CSS-->
<link href="{{ asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css">
<!-- Icons CSS-->
<link href="{{ asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
<!-- Sidebar CSS-->
<link href="{{ asset('assets/css/sidebar-menu.css')}}" rel="stylesheet">
<!-- Custom Style-->
<link href="{{ asset('assets/css/app-style.css')}}" rel="stylesheet">
<style type="text/css">
    footer{
      bottom: 0px;
      color: #272727;
      text-align: center;
      padding: 12px 30px;
      @if($payment->stp_payment_status == 1)
      position: fixed;
      @endif
      right: 0;
      left: 0;
      background-color: #f9f9f9;
      border-top: 1px solid rgb(223, 223, 255);
      -webkit-transition: all 0.3s ease;
      -moz-transition: all 0.3s ease;
      -o-transition: all 0.3s ease;
      transition: all 0.3s ease; 
  }
  form .footer-form {
    margin-top: 20px;
}
</style>
@endpush
@section('content')
<div class="container-fluid" style="margin-top: 80px;">

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
            <div class="card-body">
                @if($payment->stp_payment_status == 0)
                <h3> Terimakasih anda telah mendaftar di {{ env('APP_NAME') }}</h3>
                <p> Untuk melanjutkan pendaftaran anda di haruskan membayar formulir sebesar Rp.150.000 ke nomor rekening di bawah ini atau datang langsung ke sekolah</p>
                <div class="row">

                    <dt class="col-sm-2">Transfer Ke Bank</dt>
                    <dd class="col-sm-10">
                        BCA
                    </dd>

                    <dt class="col-sm-2">Nomor Rekening</dt>
                    <dd class="col-sm-10">
                        <input readonly style="border: none; background-color: white; color: #636363;" type="text" value="346 171 4674" id="text-copy"  />
                        <button type="button" class="btn btn-outline-primary btn-sm btn-round waves-effect waves-light m-1" onclick="copy_text()">Copy</button>
                    </dd>

                    <dt class="col-sm-2">Atas Nama</dt>
                    <dd class="col-sm-10">
                       Dedi Hidayat.Drs
                   </dd>
               </div>
               <form id="form-validate" autocomplete="off" method="POST" action="{{ url('payment-upload') }}" novalidate="novalidate" enctype="multipart/form-data">
                @csrf
                <label style="margin-top: 30px;">Pilih Metode Pembayaran<span style="color:red"> *</span></label>
                <div class="form-group row">

                    <div class="col-sm-4">
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

                <label style="margin-top: 30px;">Kirim Foto Bukti Pembayaran<span style="color:red"> *</span></label>
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
                        <div class="footer-form">   
                            <button id="btnSubmit" type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> KIRIM</button>
                        </div>
                    </div>
                </div>
            </form>
            @elseif($payment->stp_payment_status == 1)
            <h3>Terimakasih, pembayaran anda telah berhasil</h3>
            <p> Tunggu konfirmasi dari kami</p>
            <p> Kami akan memberikan konfirmasi melalui email atau nomor telepon anda</p>
            <p> Jika ada pertanyaan silahkan hubungi kami di 022-5893178 | 0895-6304-68373</p>
            @else
            <h3> Terimakasih anda mendaftar di {{ env('APP_NAME') }}</h3>
            <p> Pembayaran anda kami  tolak dengan alasan <b>{{$payment->stp_reason}}</b></p>
            <p> Silahkan kirim kembali bukti pembayarannya</p>
            <div class="row">

                <dt class="col-sm-2">Transfer Ke Bank</dt>
                <dd class="col-sm-10">
                   BCA
                </dd>

                <dt class="col-sm-2">Nomor Rekening</dt>
                <dd class="col-sm-10">
                    <input readonly style="border: none; background-color: white; color: #636363;" type="text" value="346 171 4674" id="text-copy"  />
                    <button type="button" class="btn btn-outline-primary btn-sm btn-round waves-effect waves-light m-1" onclick="copy_text()">Copy</button>
                </dd>

                <dt class="col-sm-2">Atas Nama</dt>
                <dd class="col-sm-10">
                   Dedi Hidayat.Drs
               </dd>
           </div>
           <form id="form-validate" autocomplete="off" method="POST" action="{{ url('payment-upload') }}" novalidate="novalidate" enctype="multipart/form-data">
            @csrf
            <label style="margin-top: 30px;">Pilih Metode Pembayaran<span style="color:red"> *</span></label>
            <div class="form-group row">

                <div class="col-sm-4">
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
            
            <label style="margin-top: 30px;">Kirim Foto Bukti Pembayaran<span style="color:red"> *</span></label>
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
                    <div class="footer-form">   
                        <button id="btnSubmit" type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> KIRIM</button>
                    </div>
                </div>
            </div>
        </form>
        @endif          
    </div>
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

<!--Form Validatin Script-->
<script src="{{ asset('assets/plugins/jquery-validation/js/jquery.validate.min.js')}}"></script>

<!--notification js -->
<script src="{{ asset('assets/plugins/notifications/js/lobibox.min.js')}}"></script>
<script src="{{ asset('assets/plugins/notifications/js/notifications.min.js')}}"></script>

<script>
    $().ready(function() {

        $("#form-validate").validate({
            rules: {            
                stp_picture:{
                    required:true
                },
                stp_payment_method:{
                    required:true
                },
            },  
            messages: {            
                stp_picture:{
                    required: "Foto bukti pembayaran harus di isi"
                }, 
                stp_picture:{
                    required: "Metode Pembayaran harus di isi"
                },

            }
        });
    });
</script>

<script>
    function bacaGambar(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#tampil_picture').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#preview_gambar").change(function() {
        bacaGambar(this);
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