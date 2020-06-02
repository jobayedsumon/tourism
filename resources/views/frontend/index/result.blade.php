@if(count($hotels) > 0)
    @foreach($hotels as $hotel)
        <div class="item">

            <div class="main-info hotel-info">
                <div class="main-title hotel-title">
                 <div style="float: left;padding: 5px">
                     <a href="{{ url('hotel/'.$hotel->id) }}">{{$hotel->name}}</a>
                     <p>From: {{$hotel->area}}</p>
                     <p>Website: {{$hotel->website}}</p>
                     <p>Phone: {{$hotel->phone}}</p>
                 </div>
                    <div style="float: right">
                        <img src="{{ asset('storage/hotel/feature_image/' . $hotel->feature_image) }}" class="img-responsive" alt="hotel-img" style="width: 100px;height: 120px"/>
                    </div>
                </div><!-- end hotel-title -->
            </div><!-- end hotel-info -->
        </div><!-- end item -->
    @endforeach
@else
    <li style="font-size: 35px;margin-top: 30px">No Results Found</li>
@endif

<style>
    .hotel-info {
        margin-right: 35px !important;
    }
</style>