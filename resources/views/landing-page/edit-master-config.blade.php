@extends('layouts.master')
@push('title')
- Edit Konfigurasi Halaman Arahan
@endpush

@push('styles')
<!-- simplebar CSS-->
<link href="{{ asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
<!-- Bootstrap core CSS-->
<link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
<!-- animate CSS-->
<link href="{{ asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css" />
<!-- Icons CSS-->
<link href="{{ asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
<!-- Sidebar CSS-->
<link href="{{ asset('assets/css/sidebar-menu.css')}}" rel="stylesheet" />
<!-- Custom Style-->
<link href="{{ asset('assets/css/app-style.css')}}" rel="stylesheet" />

@endpush

@section('content')

<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">Edit Konfigurasi Halaman Arahan</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">SMK Mahaputra</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Kelola Konfigurasi Halaman Arahan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Konfigurasi Halaman Arahan</li>
        </ol>
    </div>
</div>

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
                <div class="card-title">Edit Konfigurasi Halaman Arahan</div>
                <hr>
                <form method="POST" autocomplete="off" action="{{ url('master-config/edit/'.$master_config->msc_id) }}" id="form-validate" novalidate="novalidate" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="input-2" class="col-sm-3 col-form-label">Nama<span style="color:red"> *</span></label>
                        <div class="col-sm-8">
                            <input type="text" name="msc_name" class="form-control form-control-rounded @error('msc_name') is-invalid @enderror" value="{{$master_config->msc_name}}" placeholder="Masukan Nama konfigurasi">
                            @error('msc_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror 
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="input-2" class="col-sm-3 col-form-label">Deskripsi</label>
                         <div class="col-sm-8">
                            <textarea name="msc_description" rows="5" cols="10" placeholder="Masukan Deskripsi Sekolah" class="form-control @error('msc_description') is-invalid @enderror">{{$master_config->msc_description}}</textarea>
                            @error('msc_description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="input-2" class="col-sm-3 col-form-label">Nama video</label>
                        <div class="col-sm-8">
                            <input type="text" name="msv_name" class="form-control form-control-rounded @error('msv_name') is-invalid @enderror" value="{{$master_config->msv_name}}" placeholder="Masukan Nama Video">
                            @error('msv_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror 
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="input-2" class="col-sm-3 col-form-label"></label>                    
                        <div class="col-sm-8">
                            <iframe class="rounded" src="{{ $master_config->msv_url_video }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width: 760px; height: 400px;"></iframe>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="input-2" class="col-sm-3 col-form-label">Url Video</label>                    
                        <div class="col-sm-8">
                            <input type="url" name="msv_url_video" class="form-control form-control-rounded @error('msv_url_video') is-invalid @enderror" value="{{$master_config->msv_url_video}}" placeholder="Masukan Link Vide Sekolah">
                            @error('msv_url_video')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="input-2" class="col-sm-3 col-form-label">Visi Sekolah</label>
                        <div class="col-sm-8">
                            <textarea name="msc_vision" rows="5" cols="10" placeholder="Masukan Visi Sekolah" class="form-control @error('msc_vision') is-invalid @enderror">{{$master_config->msc_vision}}</textarea>
                            @error('msc_vision')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="input-2" class="col-sm-3 col-form-label">Misi Sekolah</label>
                        <div class="col-sm-8">
                            <textarea name="msc_mision" rows="5" cols="10" placeholder="Masukan Misi Sekolah" class="form-control @error('msc_mision') is-invalid @enderror">{{$master_config->msc_mision}}</textarea>
                            @error('msc_mision')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="input-2" class="col-sm-3 col-form-label">Logo Sekolah</label>
                    
                        <div class="col-sm-8">
                            <img src="{{ asset($master_config->msc_logo) }}" class="img-thumbnail" id="tampil_picture" style="object-fit: cover;"/>
                            <div></div>
                            <input type="file" name="msc_logo" id="preview_gambar" class="@error('msc_logo') is-invalid @enderror" accept="image/x-png,image/gif,image/jpeg" onchange="document.getElementById('msc_logo').value=this.value" /><br>
                            @error('msc_logo')
                            <p>
                                <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                            </p>
                            @enderror 
                        </div>
                    </div>



                    <div class="form-group row">
                        <label for="input-2" class="col-sm-3 col-form-label">Kontak Sekolah</label>
                        <div class="col-sm-8">
                            <input  oninput="this.value = this.value.replace(/[^0-9.]/g, '-').replace(/(\..*)\./g, '$1');" type="text" class="form-control form-control-rounded @error('msc_first_school_phone_number') is-invalid @enderror" name="msc_first_school_phone_number" placeholder="Masukan No.Telp Sekolah" value="{{$master_config->msc_first_school_phone_number}}">
                            @error('msc_first_school_phone_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <br>
                            <input  oninput="this.value = this.value.replace(/[^0-9.]/g, '-').replace(/(\..*)\./g, '$1');" type="text" class="form-control form-control-rounded @error('msc_second_school_phone_number') is-invalid @enderror" name="msc_second_school_phone_number" placeholder="Masukan No.Telp Sekolah" value="{{$master_config->msc_second_school_phone_number}}">
                            @error('msc_second_school_phone_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    

        </div>
                    <div class="form-group row">
                        <label for="input-1" class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <a href="{{url('master-configs')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>  
                            <button type="reset" class="btn btn-danger"><i class="fa fa-times"></i> BATAL</button>
                            <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Simpan</button>
                        </div>
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
<script>
   $().ready(function() {

    $("#form-validate").validate({
        rules: {
            msc_name: {
              required: true,
            },
            msc_school_phone_number:{
                minlength: 10 
            },
          
            pst_honorarium:{
                required: true
            },
           
        },
        messages: {
            msc_name: {
              required: "Kolom Wajib Diisi"
            },

            msc_school_phone_number:{
                minlength: "Minimal 10 digit"
            },
           
        }
    });
});
</script>
@endpush



