@extends('frontend.layouts.master')
@section('title','| Search Result')
@section('content')
   <div class="container">
       {{--<div style="padding: 20px">--}}
           {{--@if(count($hotels) > 0)--}}
               {{--<h2>Search Results</h2>--}}
              {{--<div>--}}
                  {{--<ul style="list-style-type:none;">--}}
                      {{--@foreach($hotels as $hotel)--}}
                          {{--<li>Hotel Name:<a href="{{ url('hotel/'.$hotel->id) }}">  {{ $hotel->name }} </a></li>--}}
                          {{--<li>Area: {{ $hotel->area }}</li>--}}
                          {{--<li>Phone: {{ $hotel->phone }}</li>--}}
                      {{--@endforeach--}}
                  {{--</ul>--}}
              {{--</div>--}}
          {{----}}
       {{--</div>--}}
       @if(count($hotels) > 0)
           <h2>Search Results</h2>
           @foreach($hotels as $hotel)
       <div class="bg-transparent">
           <div class="list-group">
               <div class="table-responsive">
                   <div class="table-header">
                       <div class="table-caption">
                           <h3>Tourist area & Hotel Information</h3>
                       </div>
                   </div>
                   <table class="table">
                       <tbody>
                       <tr>
                           <td>Name:</td>
                           <td><a href="{{ url('hotel/'.$hotel->id) }}"> {{ $hotel->name }} </a></td>
                       </tr>
                       <tr>
                           <td>Address:</td>
                           <td>{{$hotel->address}}</td>
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
           @endforeach
       @else
           <h2 style="margin: 30px">No Results Found</h2>
       @endif
   </div>
@endsection