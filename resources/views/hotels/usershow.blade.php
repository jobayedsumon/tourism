@extends('frontend.layouts.master')
@section('title', '| Hotels Details')
@section('content')
    <div class="px-content">

        <div class=" page-block p-y-3">
            {{--<div class="text-xs-center"><img src="{{asset('backend/download.png')}}" alt=""--}}
                                             {{--class="page-profile-v2-avatar border-round">--}}
            {{--</div>--}}
            <h1 class="font-size-24 text-xs-center m-y-1">{{$hotel_detail->name}}</h1>
        </div>

        <hr class="page-wide-block m-t-0">

        <div class="row">
            <div class="col-md-5 col-xl-6">

                <ul class="nav nav-lg nav-tabs nav-tabs-simple" id="profile-tabs">
                    <li class="active">
                        <a href="#hotel-photo" data-toggle="tab">
                            Hotel Photos
                        </a>
                    </li>
                </ul>

                <div class="tab-content p-y-0">
                    <div class="tab-pane fade in active" id="hotel-photo">
                        <div class="row p-t-4">
                            <div class="clearfix">
                                {{--@if (File::exists(public_path('storage/hotels/' . $hotel_detail->images)))--}}
                                    @foreach(explode('|', $hotel_detail->images) as $detail )
                                        <div class="widget-products-item col-xs-12 col-sm-6 col-xl-4">
                                            <a href="{{ asset('storage/hotels/' . $detail) }}" class="widget-products-image">
                                                <img src="{{ asset('storage/hotels/' . $detail) }}" style="max-height: 300px">
                                                <span class="widget-products-overlay"></span>
                                            </a>
                                        </div>
                                    @endforeach
                            {{--@endif--}}
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <hr class="page-wide-block visible-xs visible-sm">

            <div class="col-md-7 col-xl-6">
                <div class="panel bg-transparent">
                    <div class="panel-heading p-x-1 bg-transparent">
                        <span class="panel-title"><b>Hotel Description</b></span>
                    </div>
                    <div class="panel-body p-a-1">
                       {{strip_tags($hotel_detail->description)}}
                    </div>
                </div>

                <div class="bg-transparent">
                    <div class="list-group">
                        <div class="table-responsive">
                            <div class="table-header">
                                <div class="table-caption">
                                  Hotel Details
                                </div>
                            </div>
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Name:</td>
                                    <td>{{$hotel_detail->name}}</td>
                                </tr>
                                <tr>
                                    <td>Address:</td>
                                    <td>{{$hotel_detail->address}}</td>
                                </tr>
                                <tr>
                                    <td>Area:</td>
                                    <td>{{$hotel_detail->area}}</td>
                                </tr>
                                <tr>
                                    <td>Phone:</td>
                                    <td>{{$hotel_detail->phone}}</td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td>{{$hotel_detail->email}}</td>
                                </tr>
                                <tr>
                                    <td>Website:</td>
                                    <td>{{$hotel_detail->website}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('custom_js')
        <!-- Custom styling -->
        <style>
            .page-profile-v2-header.page-header {
                border: none;
                margin-bottom: 0;
                border-radius: 0;
            }

            .page-profile-v2-header .box {
                background: none !important;
            }

            .page-profile-v2-subheader {
                background: rgba(0, 0, 0, .02);
            }

            .page-profile-v2-avatar {
                max-width: 80px;
                border: 4px solid #fff;
                position: relative;
            }

            @media (min-width: 768px) {
                .page-profile-v2-avatar {
                    margin-top: -70px;
                }
            }
        </style>
        <!-- / Custom styling -->

    @endpush
@endsection