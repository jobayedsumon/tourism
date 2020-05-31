{{--left navbar--}}
@include('layouts.left-navbar')
{{--end left navbar--}}
{{--navbar left--}}
<nav class="navbar px-navbar">
    <!-- Header -->
    <div class="navbar-header">
        <a class="navbar-brand px-demo-brand" href="/"><span> <img src="{{asset('backend/fav.png')}}" alt=""
                                                                   height="23px"> </span>+8801711111111 Tour BD </a>
    </div>

    <!-- Navbar togglers -->
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#px-demo-navbar-collapse"
            aria-expanded="false"><i class="navbar-toggle-icon"></i></button>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="px-demo-navbar-collapse">

        <ul class="nav navbar-nav navbar-right">

            <li>
                <form class="navbar-form" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search" style="width: 140px;">
                    </div>
                </form>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="false">
                    @if (auth()->user()->profile_pic)
                        @if (File::exists(public_path('storage/user/profile/' . auth()->user()->profile_pic)))
                            <img src="{{ asset('storage/user/profile/' . auth()->user()->profile_pic) }}"
                                   class="px-navbar-image">
                        @endif
                    @else
                        <img src="{{asset('backend/download.png')}}" alt="" class="px-navbar-image">
                    @endif

                    <span class="hidden-md">{{auth()->user()->name}}</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('profile.index')}}"><span class="label label-warning pull-xs-right"><i
                                        class="fa fa-asterisk"></i></span>Profile</a></li>
                    <li><a href="{{route('profile.edit')}}">Setting</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();"><i
                                    class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>

        </ul>
    </div><!-- /.navbar-collapse -->
</nav>
{{--end navbar--}}