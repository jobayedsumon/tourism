@if(count($transports) > 0)
    @foreach($transports as $transport)
        <div class="item">

            <div class="main-info hotel-info">
                <div class="main-title hotel-title">
                    <div style="float: left;padding: 5px">
                        <a href="{{ url('find-transport/'.$transport->id) }}">{{$transport->transportname}}</a>
                        <p>Transport Name: {{$transport->transportname}}</p>
                        <p>Transport Name: {{$transport->transporttype}}</p>
                        <p>To: {{$transport->to}}</p>
                        <p>To: {{$transport->address}}</p>
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