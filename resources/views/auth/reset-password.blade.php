<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>{{ env('APP_NAME') }} - Ubah Password</title>
  <!--favicon-->
  <link rel="icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
  <!-- animate CSS-->
  <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css" />
  <!-- Icons CSS-->
  <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
  <!-- Custom Style-->
  <link href="{{ asset('assets/css/app-style.css') }}" rel="stylesheet" />

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
          <div class="card-title text-uppercase text-center py-3">Reset Password</div>
          <form id="form-validate" method="POST" action="{{ route('password-reset') }}">
            @csrf
            <input type="hidden" name="pwr_email" value="{{ $resetPassword->pwr_email }}">
            <input type="hidden" name="pwr_token" value="{{ $resetPassword->pwr_token }}">

            <div class="form-group">
              <div class="position-relative has-icon-left">
                <label for="exampleInputPassword" class="sr-only">New Password</label>
                <input type="password" id="password" class="form-control form-control-rounded @error('password') is-invalid @enderror" placeholder="New Password" name="password" autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="form-control-position">
                  <i class="icon-lock"></i>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="position-relative has-icon-left">
                <label for="exampleInputPassword" class="sr-only">Retype NewPassword</label>
                <input type="password" id="password-confirm" class="form-control form-control-rounded" placeholder="Retype New Password" name="password_confirmation" autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="form-control-position">
                  <i class="icon-lock"></i>
                </div>
              </div>
            </div>
            <button id="btnSubmit" type="submit" class="btn btn-primary shadow-primary btn-round btn-block waves-effect waves-light">Reset Password</button>
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
              minlength: 8
            },
            password_confirmation: {
              required: true,
              equalTo: "#password"
            },
        },
        messages: {
            password: {
              required: "Kata sandi harus di isi",
              minlength: "Minimal kata sandi 8 digit"
            },
            password_confirmation: {
              required: "Ulangi kata sandi harus di isi",
              equalTo: "Kata sandi wajib sesuai dengan yang awal"
            },
        }
    });
});
    </script>
</body>
</html>