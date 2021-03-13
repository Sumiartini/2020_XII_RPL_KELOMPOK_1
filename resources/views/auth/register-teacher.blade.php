<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>{{ env('APP_NAME') }} - Daftar Guru</title>
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
    <div class="card border-primary border-top-sm border-bottom-sm card-authentication1 mx-auto my-4 animated bounceInDown">
      <div class="card-body">
          <a href="/" data-toggle="tooltip" data-placement="right" title="KEMBALI KE HALAMAN UTAMA" type="button"><i class="zmdi zmdi-arrow-left fa-2x"></i></a>
        <div class="card-content p-2">
          <div class="text-center">
            <img style="height: 150px; width: 150px;" src="{{ asset('assets/images/mahaputra.jfif') }}">
          </div>
          <div class="card-title text-uppercase text-center py-3">Daftar</div>
          <form class="submitForm" method="POST" action="{{ route('register') }}" id="form-validate" autocomplete="off">
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
                <input  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" value="{{ old('usr_phone_number') }}" class="form-control form-control-rounded @error('usr_phone_number') is-invalid @enderror only-number" placeholder="Nomor Telepon" name="usr_phone_number">
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
                <label for="password" class="sr-only">Kata Sandi</label>
                <input type="password" id="password" class="form-control form-control-rounded @error('password') is-invalid @enderror" placeholder="Kata Sandi" name="password">
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
                <input type="hidden" name="role" value="2">
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
<!-- sidebar-menu js -->
<script src="{{ asset('assets/js/sidebar-menu.js')}}"></script>
<!-- Custom scripts -->
<script src="{{ asset('assets/js/app-script.js')}}"></script>
<!--Form Validatin Script-->
<script src="{{ asset('assets/plugins/jquery-validation/js/jquery.validate.min.js')}}"></script>

<script>
$().ready(function() {
  $("#form-validate").validate({
      rules: {
          usr_name: "required",
          password: {
            required: true,
            minlength: 8
          },
          password_confirmation: {
            required: true,
            equalTo: "#password"
          },
          usr_email: {
            required: true,
            email: true
          },
           usr_phone_number: {
            required: true,
            minlength: 10
          },
      },
      messages: {
          usr_name: {
            required: "Nama harus di isi",
          },
          password: {
            required: "Kata sandi harus di isi",
            minlength: "Minimal kata sandi 8 digit"
          },
          password_confirmation: {
            required: "Ulangi kata sandi harus di isi",
            equalTo: "Kata sandi wajib sesuai dengan yang awal"
          },
          usr_email: {
            required: "Alamat email harus di isi",
            email: "Email tidak valid"
          },
          usr_phone_number: { 
            required: "Nomor telepon harus di isi",
            minlength: "Nomor telepon min 10 digit"},
      }
  });
});

</script>
</body>
</html>