<!--Start sidebar-wrapper-->
<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
  <div class="brand-logo">
    <img src="{{ asset('assets/images/mahaputra.jfif') }}" style="width: 40px; height: 40px; border-radius: 50%;" class="logo-icon" alt="logo icon">
    <h5 class="logo-text" style="cursor: default;">SMK Mahaputra</h5>
  </div>



  <ul class="sidebar-menu do-nicescrol">
    <li class="sidebar-header"></li>


    <li>
      <a href="{{ url('dashboard') }}" class="waves-effect">
        <i class="icon-home"></i> <span>Dashboard</span>
      </a>
    </li>

    <li>
      <a href="{{URL::to('/teachers')}}" class="waves-effect">
        <i></i> <span>Daftar Guru</span>
      </a>
    </li>

    <li>
      <a href="{{URL::to('/staffs')}}" class="waves-effect">
        <i></i> <span>Daftar Staf</span>
      </a>
    </li>

    <li>
      <a href="{{URL::to('/students')}}" class="waves-effect">
        <i></i> <span>Daftar Siswa</span>
      </a>
    </li>

  </ul>

</div>