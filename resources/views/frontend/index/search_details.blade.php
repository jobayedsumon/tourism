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
                <div class="col-md-4">
                        <img src="{{ asset('storage/hotel/feature_image/' . $hotel->feature_image) }}" alt="" style="height: 500px;margin-top: 20px" width="600px">
                </div>
                <div class="col-md-2">
                </div>
                <div class="col-md-6">
                    @foreach(explode('|', $hotel->images) as $detail )
                    <div class="col-md-12">
                        <a href="{{ asset('storage/hotels/' . $detail) }}" class="widget-products-image">
                            <img src="{{ asset('storage/hotels/' . $detail) }}" style="height: 200px;margin-top: 2px" width="300px">
                            <span class="widget-products-overlay"></span>
                        </a>
                    </div>
                @endforeach
                </div>
                <div class="col-md-2">

                </div>

            </div>
        </div>
    </div>
</div>
<div class="container">
   <div class="row">
       <div class="col-md-9">
           <div class="bg-transparent">
               <div class="list-group">
                   <div class="table-responsive">
                       <div class="table-header">
                           <div class="row">
                               <div class="col-md-10">
                                   <div class="table-caption">
                                       <h3>Tourist Areas Hotel Information</h3>
                                   </div>
                               </div>
                               <div class="col-md-2">
                                   @include('frontend.index.calender')
                               </div>
                           </div>

                       </div>
                       <table class="table">
                           <tbody>
                           <tr>
                               <td>Name:</td>
                               <td>{{$hotel->name}}</td>
                           </tr>
                           <tr>
                               <td>Address:</td>
                               <td>{{$hotel->address}}</td>
                           </tr>
                           <tr>
                               <td>Tourist Area:</td>
                               <td>{{$hotel->tourist_area}}</td>
                           </tr>
                           <tr>
                               <td>Car service :</td>
                               <td>{{$hotel->transportation}}</td>
                           </tr>
                           <tr>
                               <td>Area:</td>
                               <td>{{$hotel->area}}</td>
                           </tr>
                           <tr>
                               <td>Phone:</td>
                               <td>{{$hotel->phone}}</td>
                           </tr>
                           <tr>
                               <td>Email:</td>
                               <td>{{$hotel->email}}</td>
                           </tr>
                           <tr>
                               <td>Website:</td>
                               <td>{{$hotel->website}}</td>
                           </tr>
                           </tbody>
                       </table>
                   </div>
               </div>
           </div>
       </div>

       <div class="col-md-3">
            @include('frontend.index.checkout')
       </div>
   </div>
</div>
@include('frontend.customer_reviews.review_container',['from' => 'hotel'])
{{-- <!-- /container -->--}}

    @push('custom_js')
        <style>
            .review-block{
                background-color:#FAFAFA;
                border:1px solid #EFEFEF;
                padding:15px;
                border-radius:3px;
                margin-bottom:15px;
            }
            .rating-block{
                background-color:#FAFAFA;
                border:1px solid #EFEFEF;
                padding:15px 15px 20px 15px;
                border-radius:3px;
            }
            .review-block-name{
                font-size:12px;
                margin:10px 0;
            }
            .review-block-date{
                font-size:12px;
            }
            .review-block-rate{
                font-size:13px;
                margin-bottom:15px;
            }
            .review-block-title{
                font-size:15px;
                font-weight:700;
                margin-bottom:10px;
            }
            .review-block-description{
                font-size:13px;
            }


        </style>
    @endpush


@endsection