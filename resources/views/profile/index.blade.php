@extends('layouts.master')
@section('title', '| Profile')
@section('content')
    <div class="px-content">

        <div class="row m-t-1">
            <div class="col-md-4 col-lg-3">
                <div class="text-xs-center">
                    @if (auth()->user()->profile_pic)
                        @if (File::exists(public_path('storage/partner/profile/' . auth()->user()->profile_pic)))
                            <img src="{{ asset('storage/partner/profile/' . auth()->user()->profile_pic) }}"
                                 alt="{{auth()->user()->name}}" class="page-profile-v1-avatar border-round"
                                 style="width: 170px;height: 172px">
                        @endif
                    @else
                        <img src="{{asset('backend/download.png')}}"
                             class="page-profile-v1-avatar border-round" style="width: 170px;height: 172px">
                    @endif
                </div>
                <div class="panel panel-transparent" style="margin-top: 20px">
                    <div class="panel-heading p-x-1">
                        <span class="panel-title font-weight-bold">Intro</span>
                    </div>
                    <div class="list-group m-t-1">
                        <a href="#" class="list-group-item p-x-1 b-a-0"><i class="fa fa-mobile"
                                                                           style="color: #1a7ab9"></i>&nbsp;&nbsp; {{ auth()->user()->phone ? :  'Not Set Yet' }}
                        </a>
                        <a href="#" class="list-group-item p-x-1 b-a-0"><i class="fa fa-envelope"
                                                                           style="color: #888"></i>&nbsp;&nbsp;&nbsp;{{auth()->user()->email ? : 'Not Set Yet'}}
                        </a>
                    </div>
                </div>
            </div>

            <hr class="page-wide-block visible-xs visible-sm">

            <div class="col-md-8 col-lg-9">
                <h1 class="font-size-20 m-y-4">{{auth()->user()->name}}<span
                            class="font-weight-normal">'s profile</span>
                </h1>

                <ul class="nav nav-tabs" id="profile-tabs">
                    <li class="active">
                        <a href="#profile-board" data-toggle="tab">
                            Profile
                        </a>
                    </li>
                </ul>
                <div class="tab-content tab-content-bordered p-a-0 bg-white">
                    <div class="tab-pane fade in active" id="profile-board">
                        <hr class="m-y-0">
                        <div class="panel-heading">
                            <span class="panel-title">Personal Information</span>
                            <div class="panel-heading-controls">
                                <a href="{{ route('profile.edit') }}" class="btn btn-xs btn-success btn-outline"><i
                                            class="fa fa-pencil-square"></i> Edit</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Name:</td>
                                    <td>{{auth()->user()->name}}</td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td>{{auth()->user()->email}}</td>
                                </tr>
                                <tr>
                                    <td>Phone:</td>
                                    <td>{{auth()->user()->phone}}</td>
                                </tr>
                                <tr>
                                    <td>Address:</td>
                                    <td>{{auth()->user()->address}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection