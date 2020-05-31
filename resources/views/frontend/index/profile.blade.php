@extends('frontend.layouts.master')
@section('title','| Profile')
@section('content')
    <div class="container" style="margin-top: 60px;margin-bottom: 260px">
       <div class="col-lg-7 col-lg-offset-2">
           <div class="bg-transparent">
               <div class="list-group">
                   <div class="table-responsive">
                       <div class="table-header">
                           <div class="table-caption">
                               <h3 > <span class="text-capitalize">{{auth()->user()->name}}</span> Profile <span style="float: right">
                                       <i class="fa fa-edit"><a
                                                   href="{{route('user.profileedit')}}">Edit</a></i>
                                   </span></h3>
                           </div>
                       </div>
                       <table class="table">
                           <tbody>
                           <tr>
                               <td>Name:</td>
                               <td>{{auth()->user()->name}}</td>
                           </tr>
                           <tr>
                               <td>Phone:</td>
                               <td>{{auth()->user()->phone}}</td>
                           </tr>
                           <tr>
                               <td>Email:</td>
                               <td>{{auth()->user()->email}}</td>
                           </tr>

                           </tbody>
                       </table>
                   </div>
               </div>
           </div>
       </div>
    </div>
    
    @endsection