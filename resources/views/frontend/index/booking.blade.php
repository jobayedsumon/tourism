@extends('frontend.layouts.master')
@section('title','| Booking')
@section('content')

<!--===== INNERPAGE-WRAPPER ====-->
<section class="innerpage-wrapper">
    <div id="flight-booking" class="innerpage-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4 side-bar left-side-bar">
                    <div class="row">

                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="side-bar-block support-block">
                                <h3>Need Help</h3>
                                <p>Bangladesh's tourist attractions include historical and monuments, resorts, beaches, picnic spots, forests and tribal people, wildlife of various species. Activities for tourists include angling, water skiing, river cruising, hiking, rowing, yachting, and sea bathing.</p>
                                <div class="support-contact">
                                    <span><i class="fa fa-phone"></i></span>
                                    <p>+8801621414681 </p>
                                </div><!-- end support-contact -->
                            </div><!-- end side-bar-block -->
                        </div><!-- end columns -->

                    </div><!-- end row -->

                </div><!-- end columns -->


                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 content-side">

                    <form method="post" class="lg-booking-form" action="{{route('book.store')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="lg-booking-form-heading">
                            <span></span>
                            <h3>Personal Information</h3>
                        </div><!-- end lg-bform-heading -->

                        <div class="personal-info">

                            <div class="row">
                                <div class="col-xs-6 col-sm-6">
                                    <div class="form-group">
                                        <label> Name</label>
                                        <input type="text" name="name" value="{{old('name')}}" class="form-control" required/>
                                    </div>
                                </div><!-- end columns -->
                                <div class="col-xs-6 col-sm-6">
                                    <div class="form-group">
                                        <label> Phone</label>
                                        <input type="text" name="phone" value="{{old('phone')}}" class="form-control" required/>
                                    </div>
                                </div><!-- end columns -->

                            </div><!-- end row -->

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Check-in Date </label>
                                        <input type="text" name="check_in" class="form-control dpd3" required/>
                                    </div>
                                </div><!-- end columns -->

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Check-out Date </label>
                                        <input type="text" name="check_out" class="form-control dpd3" required/>
                                    </div>
                                </div><!-- end columns -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" name="email" class="form-control"/>
                                    </div>
                                </div><!-- end columns -->

                            </div><!-- end row -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Total Room </label>
                                        <input type="text" name="total_room" class="form-control"/>
                                    </div>
                                </div><!-- end columns -->
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Room Environment </label>
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="room_environment" value="1" > Ac  </label>
                                        <label><input type="checkbox" name="room_environment" value="0"> Non Ac  </label>
                                    </div>
                                </div><!-- end columns -->
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Room Type </label>
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="room_type" value="0" > Single   </label>
                                        <label><input type="checkbox" name="room_type" value="1"> Double </label>
                                    </div>
                                </div><!-- end columns -->
                            </div>



                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Tourist Guide </label>
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="room_type" value="0" > Yes   </label>
                                        <label><input type="checkbox" name="room_type" value="1"> No </label>
                                    </div>
                                </div><!-- end columns -->
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Car </label>
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="room_type" value="0" > Yes   </label>
                                        <label><input type="checkbox" name="room_type" value="1"> No </label>
                                    </div>
                                </div><!-- end columns -->
                            </div>
                        </div><!-- end personal-info -->

                        <button type="submit" class="btn btn-orange">Confirm Booking</button>
                    </form>

                </div><!-- end columns -->

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end flight-booking -->
</section><!-- end innerpage-wrapper -->

@endsection
