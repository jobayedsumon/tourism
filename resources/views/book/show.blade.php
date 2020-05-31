@extends('layouts.master')
@section('title', '| Book Details')
@section('content')

    <div class="px-content">

        <div class="row">

            <hr class="page-wide-block visible-xs visible-sm">

            <div class="col-md-7 col-md-offset-2 col-xl-6">

                <div class="bg-transparent">
                    <div class="list-group">
                        <div class="table-responsive">
                            <div class="table-header">
                                <div class="table-caption">
                                    Hotel Booking Details
                                </div>
                            </div>
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Name:</td>
                                    <td>{{$book_detail->name}}</td>
                                </tr>
                                <tr>
                                    <td>Phone:</td>
                                    <td>{{$book_detail->phone}}</td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td>{{$book_detail->email}}</td>
                                </tr>
                                <tr>
                                    <td>Check In:</td>
                                    <td>{{$book_detail->check_in}}</td>
                                </tr>
                                <tr>
                                    <td>Check Out:</td>
                                    <td>{{$book_detail->check_out}}</td>
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