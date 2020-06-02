<nav class="px-nav px-nav-left">
    <button type="button" class="px-nav-toggle" data-toggle="px-nav">
        <span class="px-nav-toggle-arrow"></span>
        <span class="navbar-toggle-icon"></span>
        <span class="px-nav-toggle-label font-size-11">HIDE MENU</span>
    </button>

    <ul class="px-nav-content">
        <li class="px-nav-box p-a-3 b-b-1" id="demo-px-nav-box">
            <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            @if (auth()->user()->profile_pic)
                @if (File::exists(public_path('storage/user/profile/' . auth()->user()->profile_pic)))
                    <img src="{{ asset('storage/user/profile/' . auth()->user()->profile_pic) }}"
                         alt="{{auth()->user()->name}}"  class="pull-xs-left m-r-2 border-round" style="width: 54px; height: 54px;">
                @endif
            @else
                <img src="{{asset('backend/download.png')}}" alt="" class="pull-xs-left m-r-2 border-round" style="width: 54px; height: 54px;">
            @endif
            <div class="font-size-16"><span class="font-weight-light">Welcome, </span><strong>{{auth()->user()->name}}</strong></div>
            <div class="btn-group" style="margin-top: 4px;">
                <a href="{{route('profile.edit')}}" class="btn btn-xs btn-primary btn-outline"><i class="fa fa-cog"></i></a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();" class="btn btn-xs btn-danger btn-outline"><i class="fa fa-power-off"></i></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>

            </div>
        </li>
        <li class="px-nav-item px-nav-dropdown">
            <a href="{{route('profile.index')}}"><i class="fa fa-user-o" aria-hidden="true"></i>
                </i><span class="px-nav-label"> Profile</span></a>
            <ul class="px-nav-dropdown-menu">
                <li class="px-nav-item">  <a href="{{route('profile.edit')}}"><i class="px-nav-icon fa fa-user"></i><span class="px-nav-label"> Setting</span></a>
                </li>
            </ul>
        </li>

        <li class="px-nav-item px-nav-dropdown">
            <a href="{{route('hotel.index')}}"><i class="fa fa-briefcase" aria-hidden="true"></i>
                </i><span class="px-nav-label">Hotel</span></a>
            <ul class="px-nav-dropdown-menu">
                <li class="px-nav-item">  <a href="{{route('hotel.create')}}"><i class="px-nav-icon fa fa-building"></i><span class="px-nav-label"> Add Hotel</span></a>
                <li class="px-nav-item">  <a href="{{route('hotel.index')}}"><i class="px-nav-icon fa fa-building-o"></i><span class="px-nav-label"> All Hotel</span></a>
                </li>
            </ul>
        </li>
        <li class="px-nav-item px-nav-dropdown">
            <a href="{{route('room.index')}}"><i class="px-nav-icon fa fa-home"></i><span class="px-nav-label">Room</span></a>
            <ul class="px-nav-dropdown-menu">
                <li class="px-nav-item">  <a href="{{route('room.create')}}"><i class="px-nav-icon fa fa-university"></i><span class="px-nav-label"> Add Room</span></a>
                <li class="px-nav-item">  <a href="{{route('room.index')}}"><i class="px-nav-icon fa fa-window-restore"></i><span class="px-nav-label"> All Room</span></a>
                </li>
            </ul>
        </li>
        <li class="px-nav-item px-nav-dropdown">
            <a href="{{route('book.index')}}"><i class="px-nav-icon fa fa-ticket"></i><span class="px-nav-label">Book</span></a>
            <ul class="px-nav-dropdown-menu">
                <li class="px-nav-item">  <a href="{{route('book.create')}}"><i class="px-nav-icon fa fa-sticky-note"></i><span class="px-nav-label"> Add Room</span></a>
                <li class="px-nav-item">  <a href="{{route('book.index')}}"><i class="px-nav-icon fa fa-window-maximize"></i><span class="px-nav-label"> All Room</span></a>
                </li> 
            </ul>
        </li>
        <li class="px-nav-item px-nav-dropdown">
            <a href="{{route('transports.index')}}"><i class="px-nav-icon fa fa-ticket"></i><span class="px-nav-label">Transport</span></a>
            <ul class="px-nav-dropdown-menu">
                <li class="px-nav-item">  <a href="{{route('transports.create')}}"><i class="px-nav-icon fa fa-sticky-note"></i><span class="px-nav-label"> Add Transport</span></a>
                <li class="px-nav-item">  <a href="{{route('transports.index')}}"><i class="px-nav-icon fa fa-window-maximize"></i><span class="px-nav-label"> All Transport</span></a>
                </li> 
            </ul>
        </li>
        <li class="px-nav-item px-nav-dropdown">
            <a href="{{route('tourists.index')}}"><i class="px-nav-icon fa fa-ticket"></i><span class="px-nav-label">Tourist</span></a>
            <ul class="px-nav-dropdown-menu">
                <li class="px-nav-item">  <a href="{{route('tourists.create')}}"><i class="px-nav-icon fa fa-sticky-note"></i><span class="px-nav-label"> Add Tourist Area</span></a>
                <li class="px-nav-item">  <a href="{{route('tourists.index')}}"><i class="px-nav-icon fa fa-window-maximize"></i><span class="px-nav-label"> All Tourist Area List</span></a>
                </li> 
            </ul>
        </li>
    </ul>
</nav>
 
