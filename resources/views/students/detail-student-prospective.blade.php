@extends('layouts.master')

@push('title')
- Detail Calon Siswa
@endpush

@push('styles')
<!--favicon-->
<link rel="icon" href="{{ URL::to('assets/images/logo.png')}}" type="image/x-icon">
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
        <h4 class="page-title">Detail Calon Siswa</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">SMK Mahaputra</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/students/prospective')}}">Daftar Calon Siswa</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Calon Siswa</li>
        </ol>
    </div>
</div>

<div class="col-lg-12">
    <div class="profile-card-3 ">
        <div class="text-center">
            <img src="{{ asset('candidate_student/'.$student_prospective->usr_profile_picture) }}" alt="user avatar" class="card-img-top" style="width: 200px;
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
                            <td>{{ $student_prospective->stu_candidate_name }}</td>

                            <th>Email</th>
                            <td>:</td>
                            <td>{{ $student_prospective->usr_email }}</td>
                        </tr>

                        <tr>
                            <th>Nomor Telepon</th>
                            <td>:</td>
                            <td>{{ $student_prospective->usr_phone_number }}</td>

                            <th>Nomor Whatsapp</th>
                            <td>:</td>
                            <td>{{ $student_prospective->usr_whatsapp_number }}</td>
                        </tr>

                        <tr>
                            <th>No Akta lahir</th>
                            <td>:</td>
                            <td>{{ $student_prospective->personal['birth_certificate_registration_no'] }}</td>

                            <th>Jenis Kelamin</th>
                            <td>:</td>
                            <td>{{ $student_prospective->usr_gender }}</td>

                            
                        </tr>

                        <tr>

                            <th>Tempat Lahir</th>
                            <td>:</td>
                            <td>{{ $student_prospective->usr_place_of_birth }}</td>

                            <th>Tanggal lahir</th>
                            <td>:</td>
                            <td>{{ $student_prospective->usr_date_of_birth }}</td>

                            
                        </tr>

                        <tr>
                            <th>Alamat</th>
                            <td>:</td>
                            <td>{{ $student_prospective->usr_address }}</td>

                            <th>RT</th>
                            <td>:</td>
                            <td>{{ $student_prospective->usr_rt }}</td>
                        </tr>

                        <tr>
                            <th>RW</th>
                            <td>:</td>
                            <td>{{ $student_prospective->usr_rw }}</td>

                            <th>Provinsi</th>
                            <td>:</td>
                            <td>Jawa barat</td>
                        </tr>

                        <tr>
                            <th>Kabupaten/Kota</th>
                            <td>:</td>
                            <td>Bandung</td>

                            <th>Kecamatan</th>
                            <td>:</td>
                            <td>Katapang</td>
                        </tr>

                        <tr>
                            <th>Kode Pos</th>
                            <td>:</td>
                            <td>{{ $student_prospective->usr_postal_code }}</td>

                            <th>Kelurahan/Desa</th>
                            <td>:</td>
                            <td>{{ $student_prospective->usr_rural_name }}</td>
                        </tr>

                        <tr>
                            <th>Agama</th>
                            <td>:</td>
                            <td>{{ $student_prospective->usr_religion }}</td>

                            <th>NISN</th>
                            <td>:</td>
                            <td>{{ $student_prospective->stu_nisn }}</td>
                        </tr>

                        <tr>
                            <th>Tinggal Bersama</th>
                            <td>:</td>
                            <td>{{ $student_prospective->personal['living_together'] }}</td>

                            <th>Anak Ke</th>
                            <td>:</td>
                            <td>{{ $student_prospective->personal['child'] }}</td>
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
                            <td>{{ $student_prospective->father_data['name'] }}</td>

                            <th>NIK</th>
                            <td>:</td>
                            <td>{{ $student_prospective->father_data['nik'] }}</td>
                        </tr>

                        <tr>
                            <th>Tahun Lahir</th>
                            <td>:</td>
                            <td>{{ $student_prospective->father_data['year_of_birth'] }}</td>

                            <th>Pendidikan Terakhir</th>
                            <td>:</td>
                            <td>{{ $student_prospective->father_data['education'] }}</td>
                        </tr>

                        <tr>
                            <th>Pekerjaan</th>
                            <td>:</td>
                            <td>{{ $student_prospective->father_data['profession'] }}</td>

                            <th>Penghasilan Perbulan</th>
                            <td>:</td>
                            <td>{{ $student_prospective->father_data['monthly_income'] }}</td>
                        </tr>

                        <tr>
                            <th>Nomor telepon</th>
                            <td>:</td>
                            <td>{{ $student_prospective->father_data['phone_number'] }}</td>

                            <th>Berkebutuhan Khusus</th>
                            <td>:</td>
                            <td>{{ $student_prospective->father_data['disability'] }}</td>
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
                            <td>{{ $student_prospective->mother_data['name'] }}</td>

                            <th>NIK</th>
                            <td>:</td>
                            <td>{{ $student_prospective->mother_data['nik'] }}</td>
                        </tr>

                        <tr>
                            <th>Tahun Lahir</th>
                            <td>:</td>
                            <td>{{ $student_prospective->mother_data['year_of_birth'] }}</td>

                            <th>Pendidikan Terakhir</th>
                            <td>:</td>
                            <td>{{ $student_prospective->mother_data['education'] }}</td>
                        </tr>

                        <tr>
                            <th>Pekerjaan</th>
                            <td>:</td>
                            <td>{{ $student_prospective->mother_data['profession'] }}</td>

                            <th>Penghasilan Perbulan</th>
                            <td>:</td>
                            <td>{{ $student_prospective->mother_data['monthly_income'] }}</td>
                        </tr>

                        <tr>
                            <th>Nomor telepon</th>
                            <td>:</td>
                            <td>{{ $student_prospective->mother_data['phone_number'] }}</td>

                            <th>Berkebutuhan Khusus</th>
                            <td>:</td>
                            <td>{{ $student_prospective->mother_data['disability'] }}</td>
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
                            <td>{{ $student_prospective->guardian_data['name'] }}</td>

                            <th>NIK</th>
                            <td>:</td>
                            <td>{{ $student_prospective->guardian_data['nik'] }}</td>
                        </tr>

                        <tr>
                            <th>Tahun Lahir</th>
                            <td>:</td>
                            <td>{{ $student_prospective->guardian_data['year_of_birth'] }}</td>

                            <th>Pendidikan Terakhir</th>
                            <td>:</td>
                            <td>{{ $student_prospective->guardian_data['education'] }}</td>
                        </tr>

                        <tr>
                            <th>Pekerjaan</th>
                            <td>:</td>
                            <td>{{ $student_prospective->guardian_data['profession'] }}</td>

                            <th>Penghasilan Perbulan</th>
                            <td>:</td>
                            <td>{{ $student_prospective->guardian_data['monthly_income'] }}</td>
                        </tr>

                        <tr>
                            <th>Nomor Telepon</th>
                            <td>:</td>
                            <td>{{ $student_prospective->guardian_data['phone_number'] }}</td>

                            <th>Berkebutuhan Khusus</th>
                            <td>:</td>
                            <td>{{ $student_prospective->guardian_data['disability'] }}</td>
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
                            <td>{{ $student_prospective->contact['landline_number'] }}</td>

                            <th>Email Rumah</th>
                            <td>:</td>
                            <td>{{ $student_prospective->contact['email'] }}</td>
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
                            <td>{{ $student_prospective->achievement['type'] }}</td>

                            <th>Nama Prestasi</th>
                            <td>:</td>
                            <td>{{ $student_prospective->achievement['achievement_name'] }}</td>
                        </tr>

                        <tr>
                            <th>Prestasi Tingkat</th>
                            <td>:</td>
                            <td>{{ $student_prospective->achievement['achievement_level'] }}</td>

                            <th>Tahun</th>
                            <td>:</td>
                            <td>{{ $student_prospective->achievement['year'] }}</td>
                        </tr>

                        <tr>
                            <th>Penyelenggara</th>
                            <td>:</td>
                            <td>{{ $student_prospective->achievement['organizer'] }}</td>

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

            <h4 class="text-primary">Lainnya</h4>
            <div class="table-responsive">
                <table class="table table-stripped">
                    <tbody>
                        <tr>
                            <th>Rekomendasi Dari</th>
                            <td>:</td>
                            <td>{{ $student_prospective->other['recomended_from'] }}</td>

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