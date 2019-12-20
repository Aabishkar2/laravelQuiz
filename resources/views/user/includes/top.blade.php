<header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav navbar-nav d-md-down-none">
      <li class="nav-item px-3"></li>
    </ul>
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item px-3">
          <b>Hello, {{ Auth::user()->name }}</b>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          @if(Auth::user()->image)
            <img class="img-avatar" src="{{ asset('/uploads/admins/'.Auth::user()->image)}}" alt="User DP">
          @else
            <img class="img-avatar" src="{{ asset('/uploads/user_image/avatar_f.png')}}" alt="User DP">
          @endif
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-header text-center">
            <a class="dropdown-item" href="{{ route('logout')}}">
            <strong>Log Out</strong></a>
          </div>
        </div>
      </li>
    </ul>
  </header>
