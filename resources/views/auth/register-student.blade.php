<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/rocker/color-version/authentication-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:55 GMT -->

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>SMK Mahaputra - Daftar Siswa</title>
  <!--favicon-->
  <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
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
    <div class="card border-primary border-top-sm border-bottom-sm card-authentication1 mx-auto my-4 animated bounceInDown">
      <div class="card-body">
        <div class="card-content p-2">
          <div class="text-center">
            <img style="height: 150px; width: 150px;" src="{{ asset('assets/images/mahaputra.jfif') }}">
          </div>
          <div class="card-title text-uppercase text-center py-3">Daftar</div>
          <form method="POST" action="{{ route('register') }}" id="submitForm" autocomplete="off">
            @csrf
            <div class="form-group">
              <div class="position-relative has-icon-left">
                <label for="exampleInputName" class="sr-only">Nama</label>
                <input type="text" id="exampleInputName" class="form-control form-control-rounded @error('usr_name') is-invalid @enderror" placeholder="Nama" name="usr_name" value="{{ old('usr_name') }}">
                @error('usr_name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="form-control-position">
                  <i class="icon-user"></i>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="position-relative has-icon-left">
                <label for="exampleInputEmailId" class="sr-only">Alamat email</label>
                <input type="email" id="exampleInputEmailId" class="form-control form-control-rounded @error('usr_email') is-invalid @enderror" placeholder="Alamat email" name="usr_email" value="{{ old('usr_email') }}">
                <div class="form-control-position">
                  <i class="icon-envelope-open"></i>
                </div>
                @error('usr_email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <div class="form-group" id="only-number">
              <div class="position-relative has-icon-left">
                <label for="exampleInputEmailId" class="sr-only">Nomor Telepon</label>
                <input type="text" value="{{ old('usr_phone_number') }}" class="form-control form-control-rounded @error('usr_phone_number') is-invalid @enderror only-number" placeholder="Nomor Telepon" name="usr_phone_number">
                @error('usr_phone_number')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="form-control-position">
                  <i class="icon-phone"></i>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="position-relative has-icon-left">
                <label for="exampleInputPassword" class="sr-only">Kata Sandi</label>
                <input type="password" id="exampleInputPassword" class="form-control form-control-rounded @error('password') is-invalid @enderror" placeholder="Kata Sandi" name="Kata Sandi">
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
                <label for="exampleInputRetryPassword" class="sr-only">Ulangi Kata Sandi</label>
                <input type="password" id="exampleInputRetryPassword" class="form-control form-control-rounded" placeholder="Ulangi Kata Sandi" name="password_confirmation">
                <div class="form-control-position">
                  <i class="icon-lock"></i>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="position-relative has-icon-left">
                <input type="hidden" name="role" value="1">
              </div>
            </div>

            <button type="submit" class="btn btn-primary shadow-primary btn-round btn-block waves-effect waves-light">Daftar</button>
            <div class="text-center pt-3">
              <hr>
              <p class="text-muted">Sudah Punya Akun? <a href="{{ route('login') }}">Log In Disini</a></p>
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
  <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{ asset('assets/js/popper.min.js')}}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>

  <script>
    $(document).ready(function() {
      $("#submitForm").submit(function(e) {
        $(this).find("button[type='submit']").prop('disabled', true);
        $("#btnSubmit").attr("disabled", true);
        return true;
      });
      $('#only-number').on('keydown', '#usr_phone', function(e) {
        -1 !== $
        .inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) || /65|67|86|88/
        .test(e.keyCode) && (!0 === e.ctrlKey || !0 === e.metaKey) ||
        35 <= e.keyCode && 40 >= e.keyCode || (e.shiftKey || 48 > e.keyCode || 57 < e.keyCode) &&
        (96 > e.keyCode || 105 < e.keyCode) && e.preventDefault()
      });
    });

    $(".only-number").on("keypress keyup blur",function (event) {    
     $(this).val($(this).val().replace(/[^\d].+/, ""));
     if ((event.which < 48 || event.which > 57)) {
      event.preventDefault();
    }
  });
</script>
</body>

<!-- Mirrored from codervent.com/rocker/color-version/authentication-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:55 GMT -->

</html>