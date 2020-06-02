@extends('frontend.layouts.master')
@section('title','| Transport')
@section('content')

   <!--========================= FLEX SLIDER =====================-->
    <section class="flexslider-container" id="flexslider-container-1">

        <div class="flexslider slider" id="slider-1">
            <ul class="slides">

                <li class="item-1" style="background:			linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url({{asset('frontend/images/transport_theme.jpg')}}) 50% 0%;
                        background-size:cover;
                        height:100%;">
                    <div class=" meta">
                        <div class="container">
                            <h1>Find Your Transport</h1>
                            <a href="{{ URL::to('show-transport') }}" class="btn btn-default">View More</a>
                        </div><!-- end container -->
                    </div><!-- end meta -->
                </li><!-- end item-1 -->
            </ul>
        </div><!-- end slider -->

        <div class="search-tabs" id="search-tabs-1" >
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <ul class="nav nav-tabs center-tabs">
                            <li><a href="#hotels" data-toggle="tab"><span><i class="fa fa-building"></i></span><span class="st-text">Tour BD Hotel Service</span></a></li>
                        </ul>

                        <div class="tab-content">


                            <div id="hotels" class="tab-pane in active" style="padding: 60px;margin-top: 3px">
                                <form>
                                    <div class="row">

                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-10 col-lg-offset-1">
                                            <div class="row">
                                                <form class="navbar-form navbar-left" action="{{ URL::to('find-transport') }}" method="POST">
                                                    {{ csrf_field() }}
                                                    <div class="input-group">
                                                        <input type="text" id="search3" name="search" class="form-control" placeholder="Search Bus Or From , To">
                                                        <span class="input-group-btn">
	                  		
                                                            <button></button>
	                	                        </span>
                                                    </div>
                                                    <div id="result" class="panel panel-default" style="width:100%;height: 200px; position:absolute; top:110px; z-index:1; display:none">
                                                        <ul style="margin-top:10px; list-style-type:none;" id="memList">

                                                        </ul>
                                                    </div> 
                                                </form>

                                            </div><!-- end row -->
                                        </div><!-- end columns -->



                                    </div><!-- end row -->
                                </form>
                            </div><!-- end hotels -->
                        </div><!-- end tab-content -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end search-tabs -->

    </section><!-- end flexslider-container -->
<style>
    .search-tabs {
        bottom: 190px !important;
    }
</style>
@endsection