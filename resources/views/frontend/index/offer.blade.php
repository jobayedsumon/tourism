<!--=============== HOTEL OFFERS ===============-->
<section id="hotel-offers" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-heading">
                    <h2>Find Your Tourist Areas and Details Information</h2>
                    <hr class="heading-line" />
                </div><!-- end page-heading -->

                <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-hotel-offers">
                        @foreach($hotels as $hotel)
                    <div class="item">
                        <div class="main-block hotel-block">
                            <div class="main-img">
                                <a href="#">
                                    <img src="{{ asset('storage/hotel/feature_image/' . $hotel->feature_image) }}" class="img-responsive" alt="hotel-img" />
                                </a>
                                <div class="main-mask">
                                    <ul class="list-unstyled list-inline offer-price-1">
                                        <li class="rating">
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star lightgrey"></i></span>
                                        </li>
                                    </ul>
                                </div><!-- end main-mask -->
                            </div><!-- end offer-img -->

                            <div class="main-info hotel-info">
                                <div class="arrow">
                                    <a href="#"><span><i class="fa fa-angle-right"></i></span></a>
                                </div><!-- end arrow -->

                                <div class="main-title hotel-title">
                                    <a href="{{ url('hotel/'.$hotel->id) }}">{{$hotel->name}}</a>
                                    <p>From: {{$hotel->area}}</p> 
                                </div><!-- end hotel-title -->
                            </div><!-- end hotel-info -->
                        </div><!-- end hotel-block -->
                    </div><!-- end item -->
            @endforeach
                    {{--<div class="item">--}}
                        {{--<div class="main-block hotel-block">--}}
                            {{--<div class="main-img">--}}
                                {{--<a href="#">--}}
                                    {{--<img src="images/hotel-2.jpg" class="img-responsive" alt="hotel-img" />--}}
                                {{--</a>--}}
                                {{--<div class="main-mask">--}}
                                    {{--<ul class="list-unstyled list-inline offer-price-1">--}}
                                        {{--<li class="price">$568.00<span class="divider">|</span><span class="pkg">Avg/Night</span></li>--}}
                                        {{--<li class="rating">--}}
                                            {{--<span><i class="fa fa-star orange"></i></span>--}}
                                            {{--<span><i class="fa fa-star orange"></i></span>--}}
                                            {{--<span><i class="fa fa-star orange"></i></span>--}}
                                            {{--<span><i class="fa fa-star orange"></i></span>--}}
                                            {{--<span><i class="fa fa-star lightgrey"></i></span>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                {{--</div><!-- end main-mask -->--}}
                            {{--</div><!-- end offer-img -->--}}

                            {{--<div class="main-info hotel-info">--}}
                                {{--<div class="arrow">--}}
                                    {{--<a href="#"><span><i class="fa fa-angle-right"></i></span></a>--}}
                                {{--</div><!-- end arrow -->--}}

                                {{--<div class="main-title hotel-title">--}}
                                    {{--<a href="#">Roosevelt Hotel</a>--}}
                                    {{--<p>From: Germany</p>--}}
                                {{--</div><!-- end hotel-title -->--}}
                            {{--</div><!-- end hotel-info -->--}}
                        {{--</div><!-- end hotel-block -->--}}
                    {{--</div><!-- end item -->--}}

                    {{--<div class="item">--}}
                        {{--<div class="main-block hotel-block">--}}
                            {{--<div class="main-img">--}}
                                {{--<a href="#">--}}
                                    {{--<img src="images/hotel-3.jpg" class="img-responsive" alt="hotel-img" />--}}
                                {{--</a>--}}
                                {{--<div class="main-mask">--}}
                                    {{--<ul class="list-unstyled list-inline offer-price-1">--}}
                                        {{--<li class="price">$568.00<span class="divider">|</span><span class="pkg">Avg/Night</span></li>--}}
                                        {{--<li class="rating">--}}
                                            {{--<span><i class="fa fa-star orange"></i></span>--}}
                                            {{--<span><i class="fa fa-star orange"></i></span>--}}
                                            {{--<span><i class="fa fa-star orange"></i></span>--}}
                                            {{--<span><i class="fa fa-star orange"></i></span>--}}
                                            {{--<span><i class="fa fa-star lightgrey"></i></span>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                {{--</div><!-- end main-mask -->--}}
                            {{--</div><!-- end offer-img -->--}}

                            {{--<div class="main-info hotel-info">--}}
                                {{--<div class="arrow">--}}
                                    {{--<a href="#"><span><i class="fa fa-angle-right"></i></span></a>--}}
                                {{--</div><!-- end arrow -->--}}

                                {{--<div class="main-title hotel-title">--}}
                                    {{--<a href="#">Hotel Fort De</a>--}}
                                    {{--<p>From: Austria</p>--}}
                                {{--</div><!-- end hotel-title -->--}}
                            {{--</div><!-- end hotel-info -->--}}
                        {{--</div><!-- end hotel-block -->--}}
                    {{--</div><!-- end item -->--}}

                    {{--<div class="item">--}}
                        {{--<div class="main-block hotel-block">--}}
                            {{--<div class="main-img">--}}
                                {{--<a href="#">--}}
                                    {{--<img src="images/hotel-4.jpg" class="img-responsive" alt="hotel-img" />--}}
                                {{--</a>--}}
                                {{--<div class="main-mask">--}}
                                    {{--<ul class="list-unstyled list-inline offer-price-1">--}}
                                        {{--<li class="price">$568.00<span class="divider">|</span><span class="pkg">Avg/Night</span></li>--}}
                                        {{--<li class="rating">--}}
                                            {{--<span><i class="fa fa-star orange"></i></span>--}}
                                            {{--<span><i class="fa fa-star orange"></i></span>--}}
                                            {{--<span><i class="fa fa-star orange"></i></span>--}}
                                            {{--<span><i class="fa fa-star orange"></i></span>--}}
                                            {{--<span><i class="fa fa-star lightgrey"></i></span>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                {{--</div><!-- end main-mask -->--}}
                            {{--</div><!-- end offer-img -->--}}

                            {{--<div class="main-info hotel-info">--}}
                                {{--<div class="arrow">--}}
                                    {{--<a href="#"><span><i class="fa fa-angle-right"></i></span></a>--}}
                                {{--</div><!-- end arrow -->--}}

                                {{--<div class="main-title hotel-title">--}}
                                    {{--<a href="#">Roosevelt Hotel</a>--}}
                                    {{--<p>From: Germany</p>--}}
                                {{--</div><!-- end hotel-title -->--}}
                            {{--</div><!-- end hotel-info -->--}}
                        {{--</div><!-- end hotel-block -->--}}
                    {{--</div><!-- end item -->--}}

                </div><!-- end owl-hotel-offers -->

                <div class="view-all text-center">
                    <a href="#" class="btn btn-orange">View All</a>
                </div><!-- end view-all -->
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end hotel-offers -->


