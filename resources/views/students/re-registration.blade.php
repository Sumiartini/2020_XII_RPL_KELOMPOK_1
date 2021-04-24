@extends('layouts.masterFront')

@push('title')
- Daftar ulang
@endpush

@push('styles')
<link href="{{ asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/sidebar-menu.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/app-style.css')}}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('css/parsley.css') }}">
<style type="text/css">
    <style>
    html , body{
    max-width: 100%;
    overflow-x: hidden;
    }
    footer{
      bottom: 0px;
      color: #272727;
      text-align: center;
      padding: 12px 30px;
      
      right: 0;
      left: 0;
      background-color: #f9f9f9;
      border-top: 1px solid rgb(223, 223, 255);
      -webkit-transition: all 0.3s ease;
      -moz-transition: all 0.3s ease;
      -o-transition: all 0.3s ease;
      transition: all 0.3s ease; 
    }
}
</style>
@endpush

@section('content')

<div style="margin-top:80px; width: 100%;" class="col-lg-12">
    <div class="row mt-30">
    <div class="col-lg-6">
       <div class="card">
          <div class="card-header text-uppercase">Profile siswa</div>
          <div class="card-body">
            <div class="media">
              @isset($user->usr_profile_picture)
              <img class="mr-3 rounded" src="{{ $student->usr_profile_picture }}" width="150px;" height="150px;" alt="user avatar">
              @else
              <img class="mr-3 rounded" src="{{ asset('images/default_profile_picture_20210228.png') }}" width="150px;" height="150px;" alt="user avatar">
              @endif
              <div class="media-body">
                <dt>Nama lengkap</dt>
                <dd>
                    <p>{{ $student->stu_candidate_name }}</p>
                </dd>
                <dt>NIS</dt>
                <dd>
                    <p>{{ $student->stu_nis }}</p>
                </dd>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="col-lg-6">
       <div class="card">
          <div class="card-header text-uppercase">Pembayaran PPDB</div>
          <div class="card-body">
           <div class="media">
              <div class="media-body">
                <dt>Pembayaran PPDB</dt>
                <dd>
                    <p>Rp. {{ moneyFormat($ppdb_payment_price) }}</p>
                </dd>
                <dt>PPDB yang sudah dibayar</dt>
                <dd>
                    <p>Rp. {{ moneyFormat($student_payment) }}</p>
                </dd> 
                <dt>Sisa bayar uang PPDB</dt>
                <dd>
                    <p>Rp. {{ moneyFormat($remaining_payment) }}</p>
                </dd> 
              </div>
            </div>
          </div>
        </div>
    </div>
  </div> 
      <div class="card ">
        <div class="card-body">
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

                @if ($message = Session::get('error'))
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
                <form id="validate_form">
                  <input type="hidden" id="stu_id" value="{{ $student->stu_id }}">
                   <div class="form-group row pt-4">
                      <label for="rounded-input" class="col-sm-3 col-form-label">Konfirmasi kata sandi<span style="color:red"> *</span></label>
                      <div class="col-sm-9">
                        <input id="usr_password" type="password" name="usr_password" class="form-control form-control-rounded input-password mb-2" placeholder="Kata sandi" data-parsley-required-message="Kata sandi wajib di isi" required data-parsley-trigger="keyup">
                      </div>
                    </div>
                    <span class="text-danger">Catatan:</span><span> Jika ada kesalahan dalam pembayaran PPDB silahkan hubungi Bendahara {{ env('APP_NAME') }}</span><br><br>
                    <div class="form-group row">
                      <label for="rounded-input" class="col-sm-2"></label>
                      <div class="col-sm-10">
                        <input type="submit" id="submit" class="btn btn-success" value="Konfirmasi">
                      </div>
                    </div>
                </form>
            </div>
        </div>
    </div>   
</div>
<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>

@push('scripts')
<script src="{{ asset('assets/js/jquery.min.js')}}"></script>
<script src="{{ asset('assets/js/popper.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/plugins/simplebar/js/simplebar.js')}}"></script>
<script src="{{ asset('assets/js/waves.js')}}"></script>
<script src="{{ asset('assets/js/sidebar-menu.js')}}"></script>
<script src="{{ asset('assets/js/app-script.js')}}"></script>
<script src="{{ asset('assets/plugins/alerts-boxes/js/sweetalert.min.js')}}"></script>
<script src="{{ asset('assets/plugins/alerts-boxes/js/sweet-alert-script.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
<script>
$(document).ready(function(){  
 $('#validate_form').parsley();
 $('#validate_form').on('submit', function(event){
  event.preventDefault();
  if($('#validate_form').parsley().isValid())
  {
    var stu_id = $("#stu_id").val();
    var usr_password = $("#usr_password").val();
    var _token = $("meta[name='csrf-token']").attr("content");
     $.ajax({
      url:"re-registration",
      method:"POST",
      data:{
        stu_id: stu_id,
        usr_password: usr_password,
        _token: _token,
      },
      beforeSend:function(){
       $('#submit').attr('disabled','disabled');
       $('#submit').val('Memproses...');
      },
      success:function(data)
      {
       $('#validate_form')[0].reset();
       $('#validate_form').parsley().reset();
       $('#submit').attr('disabled',false);
       $('#submit').val('KONFIRMASi');

       window.location.href = "dashboard";
       swal(data.message, {
            button: false,
            icon: "success",
            timer: 2000
        });
      },
      error:function(error)
      {
        swal(error.responseJSON.message, {
              button: false,
              icon: "error",
              timer: 2000
          });
        $('#submit').attr('disabled',false);
        $('#submit').val('KONFIRMASI');
      }

   });
  }
 });
});  
</script>
@endpush
@endsection