<!--Start topbar header-->
<header class="topbar-nav">
  <nav class="navbar navbar-expand fixed-top gradient-scooter">
    <ul class="navbar-nav mr-auto align-items-center">
      <li class="nav-item">
        <a class="nav-link toggle-menu" href="javascript:void();">
          <i class="icon-menu menu-icon"></i>
        </a>
      </li>
    </ul>

    <ul class="navbar-nav align-items-center right-nav-link">

      <li class="nav-item">
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
          <span class="user-profile"><img src="{{ asset('assets/images/avatars/avatar-17.png') }}" class="img-circle" alt="user avatar"></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right">
          <li class="dropdown-item user-details">
            <a href="javaScript:void();">
              <div class="media">
                <div class="avatar"><img class="align-self-start mr-3" src="{{ asset('assets/images/avatars/avatar-17.png') }}" alt="user avatar"></div>
                <div class="media-body">
                  <h6 class="mt-2 user-title"> {{ Auth::user()->usr_name }}</h6>
                  <p class="user-subtitle"> {{ Auth::user()->usr_email }}</p>
                </div>
              </div>
            </a>
          </li>
          <li class="dropdown-divider"></li>
          <div><a class="dropdown-item" href="{{ url('account/profile/'.Auth::user()->usr_id.'/edit') }}">
              <i class="fa fa-edit icons"></i> Edit Profil</a>
          </div>
          <div><a class="dropdown-item" href="{{ url('account/profile/1/edit-password') }}">
              <i class="fa fa-lock icons"></i> Edit Password</a>
          </div>
         
          <li class="dropdown-divider"></li>
          <div><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
         document.getElementById('logout-form').submit();" style="color: black;">
              <i class="fa fa-sign-out icons"></i>Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </ul>
      </li>




    </ul>
  </nav>
</header>
<!--End topbar header-->