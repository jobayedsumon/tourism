@extends('frontend.layouts.master')
@section('title','| Search Result')
@section('content')
    <div class="container">
        <div style="margin-top: 50px;padding-bottom: 100px">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Bus Info</a></li>
            </ul>
 
        </div>
        <div class="bg-transparent">
            <div class="list-group">
                <div class="table-responsive">
                    <div class="table-header">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="table-caption">
                                    <h3> Bus Information</h3>
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
                            <td>Transport Name:</td>
                            <td>{{$transport->transportname}}</td>
                        </tr>
                        <tr> 
                            <td>Transport Name:</td>
                            <td>{{$transport->transporttype}}</td>
                        </tr>
                        <tr>
                            <td>To :</td>
                            <td>{{$transport->to}}</td>
                        </tr>
                        <tr>
                            <td>Counter Address :</td>
                            <td>{{$transport->address}}</td>
                        </tr>
                        <tr>
                            <td>Counter Contact Number :</td>
                            <td>{{$transport->number}}</td>
                        </tr>
                        <tr>
                            <td>AC Ticket Price :</td>
                            <td>{{$transport->ac}}</td>
                        </tr>
                        <tr>
                            <td>Non AC Price :</td>
                            <td>{{$transport->nonac}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div> 
        </div>
    </div>
    @include('frontend.customer_reviews.review_container',['from' => 'transport'])
@endsection