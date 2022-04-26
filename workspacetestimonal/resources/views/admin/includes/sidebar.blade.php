        <div class="main-sidebar">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    @if(Auth::guard('admin')->check())
                    <a href="{{route('admin.dashboard')}}">WorkspaceIT Admin Panel</a>
                    @elseif (Auth::guard('author')->check())
                    <a href="{{route('client.dashboard')}}">WorkspaceIT Client Panel</a>
                    @endif
                </div>

                @if(Auth::guard('admin')->check())
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="{{route('admin.dashboard')}}"></a>
                </div>
                @elseif (Auth::guard('author')->check())
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="{{route('client.dashboard')}}"></a>
                </div>
                @endif

                <ul class="sidebar-menu">
                    @if(Auth::guard('admin')->check())
                    <li class="active"><a class="nav-link" href="{{route('admin.dashboard')}}"><i class="fas fa-hand-point-right"></i> <span>Dashboard</span></a></li>
                    @elseif (Auth::guard('author')->check())
                    <li class="active"><a class="nav-link" href="{{route('client.dashboard')}}"><i class="fas fa-hand-point-right"></i> <span>Dashboard</span></a></li>
                    @elseif (Auth::guard('author')->check())
                    @endif
                    @if(Auth::guard('admin')->check())
                    <li class=""><a class="nav-link" href="{{ route('admin.testimonial') }}"><i class="fas fa-hand-point-right"></i> <span>All Testimonial</span></a></li>
                    <li class=""><a class="nav-link" href="{{ route('admin.allclient') }}"><i class="fas fa-hand-point-right"></i> <span>All Clients</span></a></li>
                    @elseif (Auth::guard('author')->check())
                    <li class=""><a class="nav-link" href="{{ route('testimonial.index') }}"><i class="fas fa-hand-point-right"></i> <span>Create Testimonial</span></a></li>
                    <li class=""><a class="nav-link" href="{{ route('author.testimonial') }}"><i class="fas fa-hand-point-right"></i> <span>Your Testimonials</span></a></li>
                   @endif
                </ul>
            </aside>
        </div>