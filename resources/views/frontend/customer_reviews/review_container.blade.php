@if($from == 'hotel')
    <div class="container">

        <div class="row">
            <div class="col-sm-3">
                @include('frontend.customer_reviews.avg_rating',['from' => 'hotel'])
            </div>
            <div class="col-sm-3">
                @include('frontend.customer_reviews.rating_statistics',['from' => 'hotel'])
            </div>
            <div class="col-md-6">
                @auth()
                    @include('frontend.customer_reviews.write_review', ['from' => 'hotel'])
                @endauth
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12"><hr/>
                @include('frontend.customer_reviews.review_list',['from' => 'hotel'])
            </div>
        </div>

    </div>
    @elseif($from == 'tourist')
    <div class="container">

        <div class="row">
            <div class="col-sm-3">
                @include('frontend.customer_reviews.avg_rating',['from' => 'tourist'])
            </div>
            <div class="col-sm-3">
                @include('frontend.customer_reviews.rating_statistics',['from' => 'tourist'])
            </div>
            <div class="col-md-6">
                @auth()
                    @include('frontend.customer_reviews.write_review', ['from' => 'tourist'])
                @endauth
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12"><hr/>
                @include('frontend.customer_reviews.review_list',['from' => 'tourist'])
            </div>
        </div>

    </div>
@elseif($from == 'transport')
    <div class="container">

        <div class="row">
            <div class="col-sm-3">
                @include('frontend.customer_reviews.avg_rating',['from' => 'transport'])
            </div>
            <div class="col-sm-3">
                @include('frontend.customer_reviews.rating_statistics',['from' => 'transport'])
            </div>
            <div class="col-md-6">
                @auth()
                    @include('frontend.customer_reviews.write_review', ['from' => 'transport'])
                @endauth
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12"><hr/>
                @include('frontend.customer_reviews.review_list',['from' => 'transport'])
            </div>
        </div>

    </div>
@endif