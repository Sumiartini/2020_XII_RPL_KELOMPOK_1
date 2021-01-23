@extends('layouts.master')

@push('title')
- Edit Profil
@endpush
  
@push('styles')
  <!--favicon-->
  <link rel="icon" href="{{ asset('assets/images/favicon.ico')}}" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{ asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{ asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="{{ asset('assets/css/sidebar-menu.css')}}" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{ asset('assets/css/app-style.css')}}" rel="stylesheet"/>
  
@endpush

@section('content')
    <div class="row pt-2 pb-2">
  <div class="col-sm-9">
    <h4 class="page-title">Edit Profil</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">SMK Mahaputra</a></li>
      <li class="breadcrumb-item active" aria-current="page">Edit Profil</li>
    </ol>
  </div>
</div>

<div class="row">

  <div class="col-lg-12">
    <div class="profile-card-3 ">
        <div class="text-center">
           <img src="{{ url('candidate_student/'.$user->usr_profile_picture)}}" class="img-thumbnail" id="tampil_picture" style="object-fit: cover; height: 200px; width: 200px"/> 
                        <input type="file" name="usr_profile_picture" id="preview_gambar" class="img-thumbnail" accept="image/x-png,image/gif,image/jpeg" style="display:none" onchange="document.getElementById('usr_profile_picture').value=this.value" /><br>
           
                                <button type="button" id="usr_profile_picture" class="btn btn-outline-primary btn-sm waves-effect waves-light m-2" onclick="document.getElementById('preview_gambar').click()"> Pilih Gambar </button>
        </div>
        <hr>
    </div>
</div>

  <div class="col-lg-12">
      <div class="card">
                 <div class="card-body">
                   <form autocomplete="off" action="{{ url('account/profile/'.Auth::user()->usr_id.'/edit')}}" method="POST" id="submitForm" novalidate="novalidate">
                    @csrf
                <h4 class="form-header text-uppercase">
                  <i class="fa fa-address-book-o"></i>
                   User Profile
                </h4>
                <div class="form-group row">
                  <label for="input-10" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-4">
                    <input type="text" name="usr_name" value="{{$user->usr_name}}" class="form-control" id="input-10">
                  </div>
                  <label for="input-11" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-4">
                    <input type="text" readonly="" name="usr_email" value="{{$user->usr_email}}" class="form-control" id="input-11">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-12" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                  <div class="col-sm-4">
                    <select name="usr_gender" class="form-control" id="basic-select">
                                <option disabled="" selected="">{{$user->usr_gender}}</option>
                                <option value="Laki-laki">Laki Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                  </div>
                  <label for="input-13" class="col-sm-2 col-form-label">Agama</label>
                  <div class="col-sm-4">
                   <select class="form-control" name="usr_religion" id="basic-select">
                                <option disabled="" selected="">{{$user->usr_religion}}</option>
                                <option value="Islam">Islam</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Khonghucu">Khonghucu</option>
                            </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="input-10" class="col-sm-2 col-form-label">Tempat Lahir</label>
                  <div class="col-sm-4">
                    <input type="text" value="{{$user->usr_place_of_birth}}" name="usr_place_of_birth" class="form-control" id="input-10">
                  </div>
                  <label for="input-11" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                  <div class="col-sm-4">
                    <input type="text" value="{{$user->usr_date_of_birth}}" name="usr_date_of_birth" class="form-control" id="input-11">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="input-10" class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-4">
                     <input type="text" value="{{$user->usr_address}}" name="usr_address" class="form-control" id="input-10" placeholder="Masukan Alamat">
                  </div>
                  <label for="input-11" class="col-sm-2 col-form-label">Desa</label>
                  <div class="col-sm-4">
                    <input type="text" value="{{$user->usr_rural_name}}" name="usr_rural_name" class="form-control" id="input-11">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="input-10" class="col-sm-2 col-form-label">RT</label>
                  <div class="col-sm-4">
                     <input type="text" value="{{$user->usr_rt}}" name="usr_rt" class="form-control" id="input-10" placeholder="Masukan Alamat">
                  </div>
                  <label for="input-11" class="col-sm-2 col-form-label">RW</label>
                  <div class="col-sm-4">
                    <input type="text" value="{{$user->usr_rw}}" name="usr_rw" class="form-control" id="input-11" name="lastname">
                  </div>
                </div>



                <div class="form-footer">
                    <button type="reset" class="btn btn-danger"><i class="fa fa-times"></i> Batal</button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Simpan</button>
                </div>
              </form>
                 </div>
               </div>
  </div>
</div><!-- End Row-->
  
@endsection



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

  <script>
        $(document).ready(function() {
            $("#submitForm").submit(function(e) {
                $(this).find("button[type='submit']").prop('disabled', true);
                $("#btnSubmit").attr("disabled", true);
                return true;
            });      
        });
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
@endpush    