<!--============= TOP-BAR ===========-->
<div id="top-bar" class="tb-text-white">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div id="info">
                    <ul class="list-unstyled list-inline">
                        <li><span><i class="fa fa-map-marker"></i></span>Green University,Dhaka-1216, BN</li>
                        <li><span><i class="fa fa-phone"></i></span>+8801911188881</li>
                    </ul>
                </div><!-- end info -->
            </div><!-- end columns -->
          @if(!Auth::Check())
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div id="links">
                        <ul class="list-unstyled list-inline">
                            <!-- <li><a href="{{route('customer.login')}}"><span><i class="fa fa-lock"></i></span>Login</a></li>
                            <li><a href="{{route('customer.register')}}"><span><i class="fa fa-plus"></i></span>Sign Up</a></li> -->
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-plus"></i>Hotel<span><i class="fa fa-angle-down"></i></span></a>
                                <ul class="dropdown-menu hotel-register" style="background-color: #000000;">
                                    <li><a href="{{route('login')}}">Owner Login</a></li>
                                    <li><a href="{{route('register')}}">Owner Register</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div><!-- end links -->
                </div>
              @endif
            @if(Auth::Check())
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div id="links">
                        <ul class="list-unstyled list-inline">

                            <li class="dropdown text-capitalize"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>{{auth()->user()->name}}<span><i class="fa fa-angle-down"></i></span></a>
                                <ul class="dropdown-menu hotel-register" style="background-color: #000000;">
                                    <li>
                                        <a onclick="event.preventDefault()">
                                           Reward Point :  {{auth()->user()->reward_point}}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('customer.logout')}}"
                                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            Logout <i class="fa fa-sign-out" aria-hidden="true"> </i>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <form id="logout-form" action="{{ route('customer.logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>

                        </ul>
                    </div><!-- end links -->
                </div>

                @endif
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end top-bar -->

<style>
    .hotel-register li a:hover
    {
        background: #000;
    }

</style>