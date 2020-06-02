<nav class="navbar navbar-default main-navbar navbar-custom navbar-white" id="mynavbar-1">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" id="menu-button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="header-search hidden-lg">
                <a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a>
            </div>
            <a href="/" class="navbar-brand"><span><i class="fa fa-plane"></i>Trusted</span> Tourism</a>
        </div><!-- end navbar-header -->

        <div class="collapse navbar-collapse" id="myNavbar1">
            <ul class="nav navbar-nav navbar-right navbar-search-link">
                <li><a href="{{route('frontend.index')}}" >Tourist areas hotel </a>
                </li>
                <!-- <li ><a href="{{route('user.book')}}" >Book </a>
                </li> -->
                
                
                <li ><a href="{{route('frontend.tourist')}}" >Tourist Area</a>
                </li>
                <li ><a href="{{route('frontend.transport')}}" >Transportation</a>
                </li>
                {{--<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Hotel<span><i class="fa fa-angle-down"></i></span></a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li><a href=" ">Hotel Homepage</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Galerry<span><i class="fa fa-angle-down"></i></span></a>--}}
                    {{--<ul class="dropdown-menu dropdown-sbm left-sbm">--}}
                        {{--<li><a href="">Gallery Masonry</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                <li>
                    <!-- <form class="navbar-form navbar-left" action="{{ URL::to('find') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <input type="text" id="search1" name="search" class="form-control" placeholder="Search Tourist area ,Hotel or Transportation">
                            <span class="input-group-btn">
	                  		<button type="submit" class="btn btn-default">
	                   		<span class="glyphicon glyphicon-search m-l-4"></span>
	                   		</button>
	                	</span>
                        </div>
                    </form> -->
                    {{--<a href="javascript:void(0)" class="search-button"></a>--}}
                </li>
            </ul>
        </div><!-- end navbar collapse -->
    </div><!-- end container -->
</nav><!-- end navbar -->

