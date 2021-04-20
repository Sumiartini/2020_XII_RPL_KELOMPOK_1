@extends('layouts.masterFront')

@push('title')
- Daftar ulang
@endpush

@push('styles')
<link href="{{ asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/sidebar-menu.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/app-style.css')}}" rel="stylesheet">
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
      position: fixed;
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
    <div class="card ">
        <div class="card-body">
            <h4 class="text-center"> Hallo, {{ $student->stu_candidate_name }}</h4>
            <h5 class="text-center">Anda dalam tahap daftar ulang. Mohon konfirmasi data dibawah ini</h5>
            <div class="col-lg-12">
                <form id="validate_form">
                   
                   <div class="form-group row pt-4">
                      <label for="rounded-input" class="col-sm-2 col-form-label">Nama siswa</label>
                      <div class="col-sm-10">
                        <input type="text" name="stu_candidate_name"  class="form-control form-control-rounded">
                      </div>
                    </div>

                    <div class="form-group row pt-4">
                      <label for="rounded-input" class="col-sm-2 col-form-label">Nomor induk siswa</label>
                      <div class="col-sm-10">
                        <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" placeholder="Masukan nomor induk siswa" name="stu_nis" class="form-control form-control-rounded">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="rounded-input" class="col-sm-2 col-form-label">Konfirmasi uang ppdb</label>
                      <div class="col-sm-10">
                        <input type="text" placeholder="e.g. 5000000" name="confirm_payment" class="form-control form-control-rounded confirm_payment">
                      </div>
                    </div>

                    <span class="text-danger">Catatan:</span><span> Konfirmasi uang PPDB adalah pembayaran uang bangunan anda sudah berapa Rupiah, Mohon tidak menginputkan asal karena ini semua sudah terintegrasi dengan sistem</span>

                    <div class="form-group row">
                      <label for="rounded-input" class="col-sm-2 col-form-label"></label>
                      <div class="col-sm-10">
                        <input type="submit" name="submit" id="submit" class="btn btn-success" value="Konfirmasi">
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

<!--Form Validatin Script-->
<script src="{{ asset('assets/plugins/jquery-validation/js/jquery.validate.min.js')}}"></script>
<script src="{{ asset('assets/plugins/jquery-mask/jquery.mask.min.js')}}"></script>

<script>
 $(document).ready(function () {
 $( '.confirm_payment' ).mask('000.000.000.000.000', {
        reverse: true});

$("#validate_form").validate({
      rules: {
          stu_nis: {
            required: true,
          },
          confirm_payment: {
            required: true
          },
      },
      messages: {
          stu_nis: {
            required: "Nomor induk siswa harus di isi"
          },
          confirm_payment: {
            required: "Uang PPDB harus di isi"
          }
      }
  });
});

</script>
<!-- <script>  
  if($('#validate_form').validate().valid())
  {
    console.log("ahmad")
    var _token = $("meta[name='csrf-token']").attr("content");
     $.ajax({
      url:"#",
      method:"POST",
      data:{
  
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
       $('#submit').val('Submit');
         alert("success")
           
        window.location.href = "redirectTo";
   
      },
      error:function(error)
      {
           alert("gagal")
          $('#submit').attr('disabled',false);
          $('#submit').val('MASUK');
      }

   });
  }
</script> -->
@endpush
@endsection