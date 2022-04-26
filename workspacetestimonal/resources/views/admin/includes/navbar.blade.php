<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
        </ul>
    </form>
    <ul class="navbar-nav navbar-right">
        <li class="nav-link">
            <a href="/" target="_blank" class="btn btn-warning">Front End</a>
        </li>
        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
           
            @if(Auth::guard('admin')->check() && Auth::guard('admin')->user()->photo)
            <img src="{{ asset('admin/uploads/'.Auth::guard('admin')->user()->photo) }}" alt="" class="rounded-circle mr-1">  
            @elseif(Auth::guard('author')->check() && Auth::guard('author')->user()->photo)
            <img src="{{ asset('admin/uploads/'.Auth::guard('author')->user()->photo) }}" alt="" class="rounded-circle mr-1">  
            @else
            <img src="{{ asset('admin/uploads/default.png') }}" alt="" class="rounded-circle mr-1">
            @endif
            
            @if(Auth::guard('admin')->check())
              <div class="d-sm-none d-lg-inline-block">Hello {{Auth::guard('admin')->user()->name}}</div></a>
            @elseif(Auth::guard('author')->check())
            Hello {{Auth::guard('author')->user()->name}}
            @endif

          
            <div class="dropdown-menu dropdown-menu-right">
                @if(Auth::guard('admin')->check())
                <a href="{{ route('admin.profile') }}" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Edit Profile
                </a>
                @elseif(Auth::guard('author')->check())
                <a href="{{ route('client.profile') }}" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Edit Profile
                </a>
                @endif

                <a href="{{ route('admin.logout') }}" class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </li>
    </ul>
</nav>