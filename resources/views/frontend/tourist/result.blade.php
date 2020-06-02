@if(count($tourists) > 0)
    @foreach($tourists as $tourist)
        <div class="item">

            <div class="main-info hotel-info">
                <div class="main-title hotel-title">
                    <div style="float: left;padding: 5px">
                        <a href="{{ url('find-tourist/'.$tourist->id) }}">{{$tourist->location}}</a>
                        <p>Location: {{$tourist->location}}</p>
                        <p>Spot: {{$tourist->touristspot}}</p>
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