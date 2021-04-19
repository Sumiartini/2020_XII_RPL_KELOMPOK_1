@extends('layouts.master')

@push('title')
- Pembayaran PPDB
@endpush

@push('styles')
<!--favicon-->
  <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
  <!-- jquery steps CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/jquery.steps/css/jquery.steps.css')}}">
  <!-- simplebar CSS-->
  <link href="{{asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="{{asset('assets/css/sidebar-menu.css')}}" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{asset('assets/css/app-style.css')}}" rel="stylesheet"/>

@endpush

@section('content')
<div class="row pt-2 pb-2">
        <div class="col-sm">
        <h4 class="page-title">Pembayaran PPDB</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">{{ env('APP_NAME') }}</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Bayar PPDB</a></li>
            
         </ol>
     </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title">PEMBAYARAN IURAN PESERTA DIDIK BARU</div>
                <hr>
                <form method="POST" autocomplete="off" action="{{ url('')}}" id="form-validate">
                    @csrf
                    <center><h5>Kata kata</h5></center>
                  <div class="row">

                    <dt class="col-sm-2">Transfer Ke Bank</dt>
                    <dd class="col-sm-10">
                        BRI
                    </dd>

                    <dt class="col-sm-2">Nomor Rekening</dt>
                    <dd class="col-sm-10">
                        <input readonly style="border: none; background-color: white; color: #636363;" type="text" value="2104 01 000183 30 7" id="text-copy"  />
                        <button type="button" class="btn btn-outline-primary btn-sm btn-round waves-effect waves-light m-1" onclick="copy_text()">Copy</button>
                    </dd>

                    <dt class="col-sm-2">Atas Nama</dt>
                    <dd class="col-sm-10">
                       SMKS Mahaputra Cerdas Utama
                   </dd><br><br>

                        <label for="input-2" class="col-sm-2 col-form-label">Nominal Bayar<span style="color:red"> *</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="stp_nominal" class="form-control form-control col-sm-4" placeholder="Masukan Nominal Bayar">
                        </div><br><br>

                        
                        <div class="col-sm-9">
                           <input type="hidden" name="stp_type_payment" class="form-control form-control col-sm-4" value="2">
                        </div>
                    
                </div>


            <form id="form-validate" autocomplete="off" method="POST" action="{{ url('payment-upload') }}" novalidate="novalidate" enctype="multipart/form-data">
            @csrf
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
        </form>

                    <div class="form-footer">
                            <a href="{{url('')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>  
                            <button type="reset" class="btn btn-danger"><i class="fa fa-times"></i> BATAL</button>
                            <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Kirim</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><!-- End Row-->

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

<!--Form Validatin Script-->
<script src="{{ asset('assets/plugins/jquery-validation/js/jquery.validate.min.js')}}"></script>


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
<!--Bootstrap Datepicker Js-->
<script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script>
     $('#autoclose-datepicker').datepicker({
        autoclose: true,
        todayHighlight: true,
        format: "yyyy-mm-dd",
        orientation: "auto",
        // endDate: '-14y',
        // startDate: '-21y',
    });

    $('.year_picker').datepicker({
        autoclose: true,
        minViewMode: 2,
        format: 'yyyy',
        orientation: "auto",
    });
</script>

<script>
    $('#provinces').on('change', function (e) {
        console.log(e);
        var prov_id = e.target.value;
        $.get('{{URL::to('api/json-cities')}}/'+ prov_id  , function (variable) {
            console.log('variable');
            $('#cities').empty();
            $('#cities').append('<option value="">Pilih Kabupaten/Kota</option>');

            $.each(variable.cities, function (val, citiesObj) {
                $('#cities').append('<option value="'+citiesObj.cit_id+'">'+citiesObj.cit_name+'</option>');
            });

        });
    });

    $('#cities').on('change', function (e) {
        console.log(e);
        var cit_id = e.target.value;
        $.get('{{URL::to('api/json-districts')}}/'+ cit_id  , function (variable) {
            console.log('variable');
            $('#districts').empty();
            $('#districts').append('<option value="">Pilih Kecamatan</option>');

            $.each(variable.districts, function (val, districtsObj) {
                $('#districts').append('<option value="'+districtsObj.dst_id+'">'+districtsObj.dst_name+'</option>');
            });

        });
    });
</script>

<script>
 $().ready(function() {

  $("#form-validate").validate({
    rules: {
      
    },
    messages: {
           
    }
  });
});
</script>
@endpush
@endsection