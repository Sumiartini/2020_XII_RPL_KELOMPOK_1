<!--Start sidebar-wrapper-->
<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
  <div class="brand-logo">
    <img src="{{ asset('assets/images/mahaputra.jfif') }}" style="width: 40px; height: 40px; border-radius: 50%;" class="logo-icon" alt="logo icon">
    <h5 class="logo-text" style="cursor: default;">SMK Mahaputra</h5>
  </div>

  <ul class="sidebar-menu do-nicescrol">
    <li class="sidebar-header"></li>

    <li>
      <a href="{{ url('dashboard')}}" class="waves-effect">
        <i class="icon-home"></i> <span>Dashboard</span>
      </a>
    </li>

    <li>
      <a href="javaScript:void();" class="waves-effect">
        <i class=""></i> <span>Kelola Staf</span> <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="sidebar-submenu">
        <li><a href="{{URL::to('/staffs')}}"><i class="fa fa-circle-o"></i> Daftar Staf</a></li>
        <li><a href="{{URL::to('/staff/create')}}"><i class="fa fa-circle-o"></i> Tambah Staf </a></li>
        <li><a href="{{URL::to('/staffs-prospective')}}"><i class="fa fa-circle-o"></i> Daftar Calon Staf </a></li>
        <li><a href="{{URL::to('/staffs-rejected')}}"><i class="fa fa-circle-o"></i> Daftar Staf Ditolak</a></li>
      </ul>
    </li>

    <li>
      <a href="javaScript:void();" class="waves-effect">
        <i class=""></i> <span>Kelola Guru</span> <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="sidebar-submenu">
        <li><a href="{{URL::to('/teachers')}}"><i class="fa fa-circle-o"></i> Daftar Guru</a></li>
        <li><a href="{{URL::to('/teacher/create')}}"><i class="fa fa-circle-o"></i> Tambah Guru</a></li>
        <li><a href="{{URL::to('/teachers-prospective')}}"><i class="fa fa-circle-o"></i> Daftar Calon Guru</a></li>
        <li><a href="{{URL::to('/teachers-rejected')}}"><i class="fa fa-circle-o"></i> Daftar Guru Ditolak</a></li>
      </ul>
    </li>


    <li>
      <a href="javaScript:void();" class="waves-effect">
        <i class=""></i> <span>Kelola Siswa </span> <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="sidebar-submenu">
        <li><a href="{{URL::to('/students')}}"><i class="fa fa-circle-o"></i> Daftar Siswa</a></li>
        <li><a href="{{URL::to('/student/create')}}"><i class="fa fa-circle-o"></i> Tambah Siswa</a></li>
        <li><a href="{{URL::to('/students-prospective')}}"><i class="fa fa-circle-o"></i> Daftar Calon Siswa</a></li>
        <li><a href="{{URL::to('/students-rejected')}}"><i class="fa fa-circle-o"></i> Daftar Siswa Ditolak</a></li>
      </ul>
    </li>

    <li>
      <a href="{{ url('school-years')}}" class="waves-effect active">
        <i></i> <span>Tahun Ajaran</span>
      </a>
    </li>

    <li>
      <a href="{{ url('majors')}}" class="waves-effect active">
        <i></i> <span>Jurusan</span>
      </a>
    </li>

    <li>
      <a href="{{ url('subjects')}}" class="waves-effect active">
        <i></i> <span>Mata Pelajaran</span>
      </a>
    </li>

     <li>
      <a href="{{ url('position-types')}}" class="waves-effect active">
        <i></i> <span>Jabatan</span>
      </a>
    </li>

     <li>
      <a href="javaScript:void();" class="waves-effect">
         <i></i><span>Halaman Arahan</span><i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="sidebar-submenu">
        <li><a href="{{URL::to('/master-slide')}}"><i class="fa fa-circle-o"></i> Daftar Berkas Informasi</a></li>
        <li><a href="{{URL::to('/master-slide/create')}}"><i class="fa fa-circle-o"></i> Tambah Berkas Informasi</a></li>
        
        <li><a href="{{URL::to('/master-config')}}"><i class="fa fa-circle-o"></i> Daftar Konfigurasi</a></li>
        <li><a href="{{URL::to('/master-config/create')}}"><i class="fa fa-circle-o"></i> Tambah Konfigurasi</a></li>
      </ul>
    </li>
  </ul>

</div>