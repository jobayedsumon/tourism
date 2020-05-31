@extends('layouts.master')
@section('title', '| Hotel Book')
@section('content')
    <div class="px-content">
        <div class="page-header">
            <div class="row">
                <div class="col-md-4 text-xs-center text-md-left text-nowrap">
                    <h1><i class="page-header-icon fa fa-tags"></i>Hotel Book</h1>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 20px">
            <div class="col-md-6 col-md-offset-3">
                <form method="post" id="validation-form" action="{{route('book.store')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="form-group">
                            <label for="hotel">Hotel Name:</label>
                            <select class="form-control select2-md select2-example" name="hotel"
                                    style="width: 100%" data-allow-clear="true">
                                @foreach($hotel_data as $data)
                                    <option></option>

                                    <option value="{{ $data->id }}">
                                        {{ $data->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group{{ $errors->has('check_in') ? ' has-error' : '' }}">
                            <label for="check_in">Check-in Date:</label>
                            <input type="text" name="check_in" id="datepicker" class="form-control">
                            @if ($errors->has('check_in'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('check_in') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('check_out') ? ' has-error' : '' }}">
                            <label for="check_out">Check-Out Date:</label>
                            <input type="text" name="check_out" id="datepicker1" class="form-control">
                            @if ($errors->has('check_out'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('check_out') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="featured_images"> Room Type:</label> <br>
                            <label class="custom-control custom-checkbox checkbox-inline">
                                <input type="checkbox" class="custom-control-input single-check" name="room_type" value="1">
                                <span class="custom-control-indicator"></span>
                                <b>Single</b>
                            </label>
                            <label class="custom-control custom-checkbox checkbox-inline">
                                <input type="checkbox" class="custom-control-input single-check" name="room_type" value="0">
                                <span class="custom-control-indicator"></span>
                                <b>Double</b>
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="featured_images">Room Condition:</label> <br>
                            <label class="custom-control custom-checkbox checkbox-inline">
                                <input type="checkbox" class="custom-control-input single-check1" name="room_environment" value="1">
                                <span class="custom-control-indicator"></span>
                                <b>Ac</b>
                            </label>
                            <label class="custom-control custom-checkbox checkbox-inline">
                                <input type="checkbox" class="custom-control-input single-check1" name="room_environment" value="0">
                                <span class="custom-control-indicator"></span>
                                <b>Non Ac</b>
                            </label>
                        </div>
                        <div class="form-group{{ $errors->has('room_no') ? ' has-error' : '' }}">
                            <label for="room_no">Room No:</label>
                            <input type="text" class="form-control" name="room_no" value="{{ old('room_no') }}" placeholder="Room No">
                            @if ($errors->has('room_no'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('room_no') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('total_room') ? ' has-error' : '' }}">
                            <label for="total_room">Total Room:</label>
                            <input type="text" class="form-control" name="total_room" value="{{ old('total_room') }}" placeholder="Total Room">
                            @if ($errors->has('total_room'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('total_room') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                            <label for="price">Room Cost:</label>
                            <input type="text" class="form-control" name="price" value="{{ old('name') }}" placeholder="Cost">
                            @if ($errors->has('price'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name">
                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone">Mobile No:</label>
                            <input type="text" class="form-control" name="phone"
                                   id="phone" placeholder="Phone No" value="{{old('phone')}}">
                            @if ($errors->has('phone'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email"
                                   id="email" placeholder="Email Address" value="{{old('email')}}">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                    </div>
                    <button type="submit" class="btn btn-success btn-3d pull-right">Book Now</button>
                </form>
            </div>
        </div>
    </div>
    @push('custom_js')

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $('#validation-form').pxValidate({
                focusInvalid: false,
                rules: {
                    'name': {
                        required: true,
                        minlength: 3
                    },
                    'room_no': {
                        required: true,
                    },

                    'phone': {
                        required: true,
                        maxlength: 11
                    },
                },

            });
        </script>
        <script>
            $( function() {
                $( "#datepicker, #datepicker1" ).datepicker({dateFormat: 'yy-mm-dd',minDate: 0});
            } );
            $('.single-check').on('change', function() {
                $('.single-check').not(this).prop('checked', false);
            });
            $('.single-check1').on('change', function() {
                $('.single-check1').not(this).prop('checked', false);
            });
            $('.select2-example').select2({
                placeholder: 'Select Your Hotel',
            });
        </script>
    @endpush
@endsection