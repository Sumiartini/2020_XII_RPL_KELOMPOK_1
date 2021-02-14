<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>SMK Mahaputra - Lupa Kata Sandi</title>
  <!--favicon-->
  <link rel="icon" href="{{ asset('assets/images/logo.png')}}" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <!-- animate CSS-->
  <link href="{{ asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css" />
  <!-- Icons CSS-->
  <link href="{{ asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
  <!-- Custom Style-->
  <link href="{{ asset('assets/css/app-style.css')}}" rel="stylesheet" />

</head>

<body>
  <!-- Start wrapper-->
  <div id="wrapper">
    <div class="card border-primary border-top-sm border-bottom-sm card-authentication1 mx-auto my-5 animated bounceInDown">
      <div class="card-body">
        <div class="card-content p-2">
          <div class="text-center">
            <img style="height: 150px; width: 150px;" src="{{ asset('assets/images/mahaputra.jfif') }}">
          </div>
          <div class="card-title text-uppercase text-center py-3">Lupa Kata Sandi</div>
          <form method="POST" action="{{ route('forgot.password') }}" id="form-validate">
            @csrf


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
        <div class="form-group">
          <div class="position-relative has-icon-left">
            <label for="usr_email" class="sr-only col-md-6 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
            <input id="usr_email" type="email" class="form-control form-control-rounded @error('usr_email') is-invalid @enderror" placeholder="Masukkan Email" name="usr_email" value="{{ old('usr_email') }}" autocomplete="off" autofocus>
            <div class="form-control-position">
              <i class="icon-user"></i>
            </div>
            @error('usr_email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>
        <button id="btnSubmit" type="submit" class="btn btn-primary shadow-primary btn-round btn-block waves-effect waves-light">Kirim Tautan Ulang Kata Sandi</button>
        <div class="text-center pt-3">
          <hr>
          <p class="text-muted">Kembali Ke <a href="{{ route('login') }}"> Log In</a></p>
        </div>
      </form>
    </div>
  </div>
</div>

<!--Start Back To Top Button-->
<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
<!--End Back To Top Button-->
</div>
<!--wrapper-->

<!-- Bootstrap core JavaScript-->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

  <!--Form Validatin Script-->
  <script src="{{ asset('assets/plugins/jquery-validation/js/jquery.validate.min.js')}}"></script>

  <script>
    $().ready(function() {

    //   $(".submitForm").submit(function(e) {
    //     $(this).find("button[type='submit']").prop('disabled', true);
    //     $(".btnSubmit").attr("disabled", true);
    //     return true;
    // });

    $("#form-validate").validate({
        rules: {
            usr_email: {
              required: true,
              email: true
            },
        },
        messages: {
            usr_email: {
              required: "Alamat email harus di isi",
              email: "Maaf email tidak valid"
            },
        }
    });
});
</script>
</body>
</html>