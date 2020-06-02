@extends('layouts.master')
@section('title', '| Dashboard')
@section('content')
    <div class="px-content">
    <ol class="breadcrumb page-breadcrumb">
        <li><a href="/">Home</a></li>
        <li class="active">Dashboard</li>
    </ol>

    <div class="page-header">
        <div class="row">
            <div class="col-md-4 text-xs-center text-md-left text-nowrap">
                <h1><i class="page-header-icon ion-ios-pulse-strong"></i>Dashboard</h1>
            </div>
            <hr class="page-wide-block visible-xs visible-sm">
            <!-- Spacer -->
            <div class="m-b-2 visible-xs visible-sm clearfix"></div>

            <form action="" class="page-header-form col-xs-12 col-md-4 pull-md-right">
                <div class="input-group">
                    <span class="input-group-addon b-a-0 font-size-16"><i class="ion-search"></i></span>
                    <input type="text" placeholder="Search..." class="form-control p-l-0 b-a-0">
                </div>
            </form>
            <div>
                <h1>WellCome To Tour BD </h1>
            </div>
        </div>
    </div>


    <hr class="page-block m-t-0">
</div>
    @endsection
