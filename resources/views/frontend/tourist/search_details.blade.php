@extends('frontend.layouts.master')
@section('title','| Search Result')
@section('content')
<div class="container">
    <div style="margin-top: 50px;padding-bottom: 100px">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Photo</a></li>
           <!--  <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Map</a></li> -->
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="clearfix">               
                    @foreach(explode('|', $tourist->images) as $detail )
                    <div class="col-md-6">
                        <a href="{{ asset('storage/upload/' . $detail) }}" class="widget-products-image">
                            <img src="{{ asset('storage/upload/' . $detail) }}" style="height: 200px;margin-top: 2px" width="300px">
                            <span class="widget-products-overlay"></span>
                        </a>
                    </div>
                @endforeach
                
            </div>
        </div>
    </div>
</div>

    <div class="container">
        <div style="margin-top: 50px;padding-bottom: 30px">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Tourist Area Info</a></li>
                <li role="presentation" class=""><a href="#nearby" aria-controls="home" role="tab" data-toggle="tab">Nearby Hotels</a></li>
            </ul>
 
        </div>
       <div class="tab-content border" style="overflow: hidden;" >
           <div class="tab-pane active" id="home">
               <div class="" >
                   <div class="list-group">
                       <div class="table-responsive">
                           <div class="table-header">
                               <div class="table-caption">
                                   <h3> Tourist Area Info</h3>
                               </div>
                           </div>
                           <table class="table">
                               <tbody>
                               <tr>
                                   <td>Location Name:</td>
                                   <td>{{$tourist->location}}</td>
                               </tr>
                               <tr>
                                   <td>Tourist Spot Name:</td>
                                   <td>{{$tourist->touristspot}}</td>
                               </tr>
                               <tr>
                                   <td>Details:</td>
                                   <td>{{$tourist->details}}</td>
                               </tr>
                               </tbody>
                           </table>
                       </div>
                   </div>
               </div>
           </div>

           <style>
                #map{
                    width: 600px;
                    height: 400px;
                    margin: 0 auto;
                    z-index: 0;
                }
           </style>
           <div class="tab-pane" id="nearby" style="margin-bottom: 100px;">
               <div id='map'></div>
           </div>

       </div>
    </div>

    @include('frontend.customer_reviews.review_container',['from' => 'tourist'])

<script>
    let latitude = {{$tourist->latitude}};
    let longitude = {{$tourist->longitude}};

    var map = L.map('map').setView([latitude,longitude ], 13);
    setInterval(function () {
        return map.invalidateSize();
    }, 100);
    mapLink =
        '<a href="http://openstreetmap.org">OpenStreetMap</a>';
    L.tileLayer(
        'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; ' + mapLink + ' Contributors',
            maxZoom: 18,
        }).addTo(map);

    let request = $.ajax({
        url:  `https://barikoi.xyz/v1/api/search/nearby/category/MTY5NjpVTFNVWEJNTVNP/1/20?longitude=${longitude}&latitude=${latitude}&ptype=hotel`,
        method: "GET",
        dataType: "html"
    });

    request.done(function( msg ) {
        let response  = JSON.parse(msg);
        var planes = mapDataForPoint(response.Place);
        for (var i = 0; i < planes.length; i++) {
            marker = new L.marker([planes[i][1],planes[i][2]])
                .bindPopup(planes[i][0])
                .addTo(map);
        }
    });


    function mapDataForPoint(msg) {
        let length  = msg.length;
        let container = [];
        for (let i = 0; i<length; i++){
            container.push([msg[i].name,msg[i].latitude,msg[i].longitude]);
        }
       return container;

    }
</script>
   
@endsection