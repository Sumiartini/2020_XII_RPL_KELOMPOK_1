<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>SMK Mahaputra - Masuk</title>
  <!--favicon-->
  <link rel="icon" href="{{asset('assets/images/logo.png')}}" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <!-- animate CSS-->
  <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css" />
  <!-- Icons CSS-->
  <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
  <!-- Custom Style-->
  <link href="{{asset('assets/css/app-style.css')}}" rel="stylesheet" />

</head>

<body>
  <!-- Start wrapper-->
  <div id="wrapper">
    <div class="card border-primary border-top-sm border-bottom-sm card-authentication1 mx-auto my-5 animated bounceInDown">
      <div class="card-body">
        <a href="/"><i class="zmdi zmdi-arrow-left fa-2x"></i></a>
        <div class="card-content p-2">
          <div class="text-center">
            <img style="height: 150px; width: 150px;" src="{{ asset('assets/images/mahaputra.jfif') }}">
          </div>
          <div class="card-title text-uppercase text-center py-3">Log In</div>
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
           <i class="icon-check"></i>
         </div>
         <div class="alert-message">
          <span><strong>Gagal !</strong> {{$message}}</span>
        </div>
      </div>
      @endif

      @error('failed')
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <div class="alert-icon contrast-alert">
           <i class="icon-check"></i>
         </div>
         <div class="alert-message">
          <span><strong>Gagal !</strong> {{$message}}</span>
        </div>
      </div>
      @enderror

        <form method="POST" action="{{ route('login') }}" id="form-validate">
          @csrf

          <div class="form-group">
            <div class="position-relative has-icon-left">
              <label for="usr_email" class="sr-only col-md-6 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
              <input id="usr_email" type="email" class="form-control form-control-rounded @error('usr_email') is-invalid @enderror" placeholder="Masukan Email" name="usr_email" value="{{ old('usr_email') }}" autocomplete="off" autofocus>
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

          <div class="form-group">
            <div class="position-relative has-icon-left">
              <label for="password" class="sr-only col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
              <input id="password" type="password" class="form-control form-control-rounded @error('password') is-invalid @enderror" placeholder="Masukan Kata Sandi" name="password" autocomplete="current-password">
              <div class="form-control-position">
                <i class="icon-lock"></i>
              </div>
              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <div class="form-row mr-0 ml-0">
            <div class="form-group col-6">
              <div class="icheck-primary">
                <input type="checkbox" id="user-checkbox" name="remember" />
                <label for="user-checkbox">Ingatkan Saya</label>
              </div>
            </div>
            <div class="form-group col-6 text-right">
              <a  href="{{ route('forgot.password') }}">Lupa Kata Sandi</a>
            </div>
          </div>
          <button id="btnSubmit" type="submit" class="btn btn-primary shadow-primary btn-round btn-block waves-effect waves-light">Log In</button>
          <div class="text-center pt-3">
            <hr>
            <p class="text-muted">Tidak Punya Akun? <a href="{{ url('select-registration') }}"> Daftar</a></p>
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
            password: {
              required: true,
            },
            usr_email: {
              required: true,
              email: true
            },
        },
        messages: {
            password: {
              required: "Kata sandi harus di isi"
            },
            usr_email: {
              required: "Alamat email harus di isi",
              email: "Email tidak valid"
            }
        }
    });
});
    </script>
</body>
</html>