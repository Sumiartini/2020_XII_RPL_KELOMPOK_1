@extends('layouts.master')

@push('title')
- Detail Guru
@endpush

@push('styles')
<!--favicon-->
<link rel="icon" href="{{ URL::to('assets/images/favicon.ico')}}" type="image/x-icon">
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
        <h4 class="page-title">Detail Guru</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">SMK Mahaputra</a></li>
            <li class="breadcrumb-item"><a href="{{ url('teachers')}}">Daftar Guru</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Guru</li>
        </ol>
    </div>
</div>

<div class="col-lg-12">
    <div class="profile-card-3 ">
        <div class="text-center">
            <img src="{{ url('assets/images/avatars/avatar-2.png')}}" alt="user avatar" class="card-img-top" style="width: 200px;
            height: 200px;
            background: #dac52c;
            border-radius: 100%;">
        </div>
        <hr>
    </div>
</div>

@if(Auth()->user()->hasRole('student'))
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">

            <h4 class="text-primary">PROFIL</h4>
            <div class="table-responsive">
                <table class="table table-stripped">
                    <tbody>
                        <tr>
                            <th>Nama</th>
                            <td>:</td>
                            <td>Siti Robiah Adawiyah S.Pd</td>
                        </tr>

                        <tr>
                            <th>Tempat Lahir</th>
                            <td>:</td>
                            <td>Bandung</td>
                        </tr>

                        <tr>
                            <th>Tanggal lahir</th>
                            <td>:</td>
                            <td>12/10/1970</td>
                        </tr>

                        <tr>
                            <th>Jenis Kelamin</th>
                            <td>:</td>
                            <td>Perempuan</td>
                        </tr>

                        <tr>
                            <th>Email</th>
                            <td>:</td>
                            <td>sitirobiah1970@gmail.com</td>
                        </tr>

                        <tr>
                            <th>Status</th>
                            <td>:</td>
                            <td>Aktif</td>    
                        </tr>
                    </tbody>
                </table><br>
            </div>

        </div>
    </div>
</div>



@elseif(Auth()->user()->hasRole('teacher'))
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">

            <h4 class="text-primary">PROFIL</h4>
            <div class="table-responsive">
                <table class="table table-stripped">
                    <tbody>
                        <tr>
                            <th>Nama</th>
                            <td>:</td>
                            <td>Siti Robiah Adawiyah S.Pd</td>
                        </tr>

                        <tr>
                            <th>Tempat Lahir</th>
                            <td>:</td>
                            <td>Bandung</td>
                        </tr>

                        <tr>
                            <th>Tanggal lahir</th>
                            <td>:</td>
                            <td>12/10/1970</td>
                        </tr>

                        <tr>
                            <th>Jenis Kelamin</th>
                            <td>:</td>
                            <td>Perempuan</td>
                        </tr>

                        <tr>
                            <th>Email</th>
                            <td>:</td>
                            <td>sitirobiah1970@gmail.com</td>
                        </tr>

                        <tr>
                            <th>Status</th>
                            <td>:</td>
                            <td>Aktif</td>    
                        </tr>
                    </tbody>
                </table><br>
            </div>

        </div>
    </div>
</div>



@else
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">

            <h4 class="text-primary">INFORMASI KONTAK</h4>
            <div class="table-responsive">
                <table class="table table-stripped">
                    <tbody>
                        <tr>
                            
                            <th>Provinsi</th>
                            <td>:</td>
                            <td>Jawa Barat</td>  

                            <th>Kota/Kabupaten</th>
                            <td>:</td>
                            <td>Bandung</td>                         
                        </tr>

                        <tr>
                            <th>Kecamatan</th>
                            <td>:</td>
                            <td>Katapang</td>

                            <th>Kode Pos</th>
                            <td>:</td>
                            <td>40971</td>

                        </tr>

                        <tr>
                            <th>RT</th>
                            <td>:</td>
                            <td>02</td>

                            <th>RW</th>
                            <td>:</td>
                            <td>07</td>

                        </tr>

                        <tr>

                            <th>Alamat</th>
                            <td>:</td>
                            <td>Kp. Citereup</td>

                            <th>Kelurahan/Desa</th>
                            <td>:</td>
                            <td>Sukamukti</td>

                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>:</td>
                            <td>odney04@gmail.com</td>
                            
                            <th>Nomor Telepon</th>
                            <td>:</td>
                            <td>089613272481</td>
                        </tr>

                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>

                            <th></th>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h4 class="text-primary">INFORMASI KONTAK</h4>
            <div class="table-responsive">
                <table class="table table-stripped">
                    <tbody>
                        <tr>
                            
                            <th>Provinsi</th>
                            <td>:</td>
                            <td>Jawa Barat</td>  

                            <th>Kota/Kabupaten</th>
                            <td>:</td>
                            <td>Bandung</td>                         
                        </tr>

                        <tr>
                            <th>Kecamatan</th>
                            <td>:</td>
                            <td>Katapang</td>

                            <th>Kode Pos</th>
                            <td>:</td>
                            <td>40971</td>

                        </tr>

                        <tr>
                            <th>RT</th>
                            <td>:</td>
                            <td>02</td>

                            <th>RW</th>
                            <td>:</td>
                            <td>07</td>

                        </tr>

                        <tr>

                            <th>Alamat</th>
                            <td>:</td>
                            <td>Kp. Citereup</td>

                            <th>Kelurahan/Desa</th>
                            <td>:</td>
                            <td>Sukamukti</td>

                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>:</td>
                            <td>odney04@gmail.com</td>
                            
                            <th>Nomor Telepon</th>
                            <td>:</td>
                            <td>089613272481</td>
                        </tr>

                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>

                            <th></th>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h4 class="text-primary">DATA SUAMI/ISTERI</h4>
            <div class="table-responsive">
                <table class="table table-stripped">
                    <tbody>
                        <tr>
                            <th>Nama Suami/Istri</th>
                            <td>:</td>
                            <td>Agus Sofyan SE</td>

                            <th>NIK</th>
                            <td>:</td>
                            <td>3204110308610004</td>
                        </tr>

                        <tr>
                            <th>NIP</th>
                            <td>:</td>
                            <td>-</td>

                            <th>Pekerjaan</th>
                            <td>:</td>
                            <td>Bendahara TU</td>
                        </tr>

                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>

                            <th></th>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h4 class="text-primary">MENGAJAR DI SMK MAHAPUTRA</h4>
            <div class="table-responsive">
                <table class="table table-stripped">
                    <tbody>
                        <tr>
                            <th>No SK</th>
                            <td>:</td>
                            <td>181/102.10/SMK.MP/KS/VII/2018</td>

                            <th>Tahun Masuk</th>
                            <td>:</td>
                            <td>Juni 2016</td>
                        </tr>

                        <tr>
                            <th>Kontrak Mengajar</th>
                            <td>:</td>
                            <td>1 Tahun</td>

                            <th>Status Guru</th>
                            <td>:</td>
                            <td>Guru Tidak Tetap</td>
                        </tr>

                        <tr>
                            <th>NIP</th>
                            <td>:</td>
                            <td>-</td>

                            <th>Mata Pelajaran</th>
                            <td>:</td>
                            <td>PAB</td>
                        </tr>

                        <tr>
                            <th>Kelas</th>
                            <td>:</td>
                            <td>XII</td>

                            <th>Jumlah Jam Mengajar</th>
                            <td>:</td>
                            <td>10 Jam</td>
                        </tr>

                        <tr>
                            <th>Tugas Tambahan</th>
                            <td>:</td>
                            <td>Wali Kelas</td>

                            <th></th>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>

                            <th></th>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h4 class="text-primary">RIWAYAT MENGAJAR DI SEKOLAH LAIN</h4>
            <div class="table-responsive">
                <table class="table table-stripped">
                    <tbody>
                        <tr>
                            <th>Nama Sekolah</th>
                            <td>:</td>
                            <td>SMP Matlahul Anwar</td>

                            <th>Lama Mengajar</th>
                            <td>:</td>
                            <td>18 Tahun</td>
                        </tr>

                        <tr>
                            <th>Mata Pelajaran</th>
                            <td>:</td>
                            <td>PAI</td>

                            <th>Status</th>
                            <td>:</td>
                            <td>Tidak Aktif</td>
                        </tr>

                        <tr>
                            <th>Jabatan</th>
                            <td>:</td>
                            <td>Kepala Staf</td>

                            <th></th>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>

                            <th></th>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h4 class="text-primary">RIWAYAT PENDIDIKAN</h4>
            <div class="table-responsive">
                <table class="table table-stripped">
                    <tbody>
                        <tr>
                            <th>Sekolah Dasar</th>
                            <td>:</td>
                            <td>SDN Angkasa 2 </td>

                            <th>Tahun</th>
                            <td>:</td>
                            <td>1983</td>
                        </tr>

                        <tr>
                            <th>Sekolah Menengah Pertama</th>
                            <td>:</td>
                            <td>MTs I'Anatut Thalibin</td>

                            <th>Tahun</th>
                            <td>:</td>
                            <td>1987</td>
                        </tr>

                        <tr>
                            <th>Sekolah Menengah Akhir</th>
                            <td>:</td>
                            <td>MA I'Anatut Thalibin</td>

                            <th>Tahun</th>
                            <td>:</td>
                            <td>1990</td>
                        </tr>

                        <tr>
                            <th>Perguruan Tinggi</th>
                            <td>:</td>
                            <td>UNINUS</td>

                            <th>Tahun</th>
                            <td>:</td>
                            <td>1991</td>
                        </tr>

                        <tr>
                            <th>Fakultas</th>
                            <td>:</td>
                            <td>FKIP</td>

                            <th>Jurusan</th>
                            <td>:</td>
                            <td>S1 Bahasa Arab</td>
                        </tr>

                        <tr>
                            <th>Tahun Lulus</th>
                            <td>:</td>
                            <td>1996</td>

                            <th>Gelar</th>
                            <td>:</td>
                            <td>S. Pd</td>
                        </tr>

                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>

                            <th></th>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h4 class="text-primary">SERTIFIKASI</h4>
            <div class="table-responsive">
                <table class="table table-stripped">
                    <tbody>
                        <tr>
                            <th>Sudah atau Belum</th>
                            <td>:</td>
                            <td>Belum</td>

                            <th>Tahun</th>
                            <td>:</td>
                            <td>-</td>
                        </tr>

                        <tr>
                            <th>No Sertifikasi</th>
                            <td>:</td>
                            <td>-</td>

                            <th>Bidang Studi</th>
                            <td>:</td>
                            <td>-</td>
                        </tr>

                        <tr>
                            <th>Penyelenggara</th>
                            <td>:</td>
                            <td>-</td>

                            <th></th>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>

                            <th></th>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

@endif

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

</body>

@endpush