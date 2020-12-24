@extends('layouts.master')

@push('title')
- Detail Siswa Ditolak
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
        <h4 class="page-title">Detail Siswa Ditolak</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">SMK Mahaputra</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/students/rejected')}}">Daftar Siswa Ditolak</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Siswa Ditolak</li>
        </ol>
    </div>
</div>

<div class="col-lg-12">
    <div class="profile-card-3 ">
        <div class="text-center">
            <img src="{{ url('assets/images/avatars/avatar-17.png')}}" alt="user avatar" class="card-img-top" style="width: 200px;
            height: 200px;
            background: #dac52c;
            border-radius: 100%;">
        </div>
        <hr>
    </div>
</div>

<div class="col-lg-12">
    <div class="card">
        <div class="card-body">

            <h4 class="text-primary">Data Pribadi</h4>
            <div class="table-responsive">
                <table class="table table-stripped">
                    <tbody>
                        <tr>
                            <th>Nama</th>
                            <td>:</td>
                            <td>Rara Lestari</td>

                            <th>Email</th>
                            <td>:</td>
                            <td>rara@gmail.com</td>
                        </tr>

                        <tr>
                            <th>Nomor Telepon</th>
                            <td>:</td>
                            <td>082118342147</td>

                            <th>NIK</th>
                            <td>:</td>
                            <td>321044070027770007</td>
                        </tr>

                        <tr>
                            <th>Jenis Kelamin</th>
                            <td>:</td>
                            <td>perempuan</td>

                            <th>Tempat Lahir</th>
                            <td>:</td>
                            <td>Bandung</td>
                        </tr>

                        <tr>
                            <th>Tanggal lahir</th>
                            <td>:</td>
                            <td>18 Mei</td>

                            <th>Alamat</th>
                            <td>:</td>
                            <td>Kp. Junti Hilir</td>
                        </tr>

                        <tr>
                            <th>RT</th>
                            <td>:</td>
                            <td>01</td>

                            <th>RW</th>
                            <td>:</td>
                            <td>12</td>
                        </tr>

                        <tr>
                            <th>Provinsi</th>
                            <td>:</td>
                            <td>Jawa barat</td>
                            
                            <th>Kabupaten/Kota</th>
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
                            <th>Kelurahan/Desa</th>
                            <td>:</td>
                            <td>Sangkanhurip</td>

                            <th>Agama</th>
                            <td>:</td>
                            <td>Islam</td>
                        </tr>

                        <tr>
                            <th>NISN</th>
                            <td>:</td>
                            <td>11203321</td>

                            <th>Tinggal Bersama</th>
                            <td>:</td>
                            <td>Orang Tua</td>
                        </tr>

                        <tr>
                            <th>Anak Ke</th>
                            <td>:</td>
                            <td>2</td>

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

            <h4 class="text-primary">Data Ayah</h4>
            <div class="table-responsive">
                <table class="table table-stripped">
                    <tbody>
                        <tr>
                            <th>Nama</th>
                            <td>:</td>
                            <td>Sutisna</td>

                            <th>NIK</th>
                            <td>:</td>
                            <td>32104407002777</td>
                        </tr>

                        <tr>
                            <th>Tahun Lahir</th>
                            <td>:</td>
                            <td>1977</td>

                            <th>Pendidikan Terakhir</th>
                            <td>:</td>
                            <td>SD Sederajat</td>
                        </tr>

                        <tr>
                            <th>Pekerjaan</th>
                            <td>:</td>
                            <td>Buruh</td>

                            <th>Penghasilan Perbulan</th>
                            <td>:</td>
                            <td>1.000.000</td>
                        </tr>

                        <tr>
                            <th>Berkebutuhan Khusus</th>
                            <td>:</td>
                            <td>Tidak</td>

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

            <h4 class="text-primary">Data Ibu</h4>
            <div class="table-responsive">
                <table class="table table-stripped">
                    <tbody>
                        <tr>
                            <th>Nama</th>
                            <td>:</td>
                            <td>Wiwin</td>

                            <th>NIK</th>
                            <td>:</td>
                            <td>321044070027770007</td>
                        </tr>

                        <tr>
                            <th>Tahun Lahir</th>
                            <td>:</td>
                            <td>1980</td>

                            <th>Pendidikan Terakhir</th>
                            <td>:</td>
                            <td>SD Sederajat</td>
                        </tr>

                        <tr>
                            <th>Pekerjaan</th>
                            <td>:</td>
                            <td>IRT</td>

                            <th>Penghasilan Perbulan</th>
                            <td>:</td>
                            <td>-</td>
                        </tr>

                        <tr>
                            <th>Berkebutuhan Khusus</th>
                            <td>:</td>
                            <td>Tidak</td>

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

            <h4 class="text-primary">Data Wali</h4>
            <div class="table-responsive">
                <table class="table table-stripped">
                    <tbody>
                        <tr>
                            <th>Nama</th>
                            <td>:</td>
                            <td>-</td>

                            <th>NIK</th>
                            <td>:</td>
                            <td>-</td>
                        </tr>

                        <tr>
                            <th>Tahun Lahir</th>
                            <td>:</td>
                            <td>-</td>

                            <th>Pendidikan Terakhir</th>
                            <td>:</td>
                            <td>-</td>
                        </tr>

                        <tr>
                            <th>Pekerjaan</th>
                            <td>:</td>
                            <td>-</td>

                            <th>Penghasilan Perbulan</th>
                            <td>:</td>
                            <td>-</td>
                        </tr>

                        <tr>
                            <th>Berkebutuhan Khusus</th>
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

            <h4 class="text-primary">Kontak Rumah</h4>
            <div class="table-responsive">
                <table class="table table-stripped">
                    <tbody>
                        <tr>
                            <th>Telepon Rumah</th>
                            <td>:</td>
                            <td>022121213312</td>

                            <th>Email Rumah</th>
                            <td>:</td>
                            <td>damili@gmail.com</td>
                        </tr>

                        <tr>
                            <th>Nomor Telepon HP</th>
                            <td>:</td>
                            <td>0812345678</td>

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

            <h4 class="text-primary">Data Periodik</h4>
            <div class="table-responsive">
                <table class="table table-stripped">
                    <tbody>
                        <tr>
                            <th>Tinggi Badan</th>
                            <td>:</td>
                            <td>140 cm</td>

                            <th>Berat Badan</th>
                            <td>:</td>
                            <td>40 kg</td>
                        </tr>

                        <tr>
                            <th>Jarak Ke Sekolah</th>
                            <td>:</td>
                            <td>0,5 KM</td>

                            <th>Waktu tempuh</th>
                            <td>:</td>
                            <td>30 Menit</td>
                        </tr>

                        <tr>
                            <th>Jumlah Saudara Kandung</th>
                            <td>:</td>
                            <td>2</td>

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

            <h4 class="text-primary">Prestasi</h4>
            <div class="table-responsive">
                <table class="table table-stripped">
                    <tbody>
                        <tr>
                            <th>Tipe Prestasi</th>
                            <td>:</td>
                            <td>-</td>

                            <th>Nama Prestasi</th>
                            <td>:</td>
                            <td>-</td>
                        </tr>

                        <tr>
                            <th>Prestasi Tingkat</th>
                            <td>:</td>
                            <td>-</td>

                            <th>Tahun</th>
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