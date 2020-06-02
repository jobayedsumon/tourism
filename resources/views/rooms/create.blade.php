@extends('layouts.master')
@section('title', '| Room Create')
@section('content')
    <div class="px-content">
        <div class="page-header">
            <div class="row">
                <div class="col-md-4 text-xs-center text-md-left text-nowrap">
                    <h1><i class="page-header-icon fa fa-tags"></i>Add Hotel Rooms</h1>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 20px">
            <div class="col-md-6 col-md-offset-3">
                <form method="post" id="validation-form" action="{{route('room.store')}}" enctype="multipart/form-data">
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

                        <div class="form-group">
                            <label for="single"> Single Ac Room:</label>
                            <input type="text" class="form-control" name="single_ac"
                                   id="single_ac" placeholder="Total Room" value="{{old('single_ac')}}">
                            @if ($errors->has('single_ac'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('single_ac') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="single_ac_cost">Single Room AC Cost:</label>
                            <input type="text" class="form-control" name="single_ac_cost"
                                   id="single_ac_cost" placeholder="Single Room Cost" value="{{old('single_ac_cost')}}">
                            @if ($errors->has('single_ac_cost'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('single_ac_cost') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="single"> Single Non Ac Room:</label>
                            <input type="text" class="form-control" name="single_non_ac"
                                   id="single_non_ac" placeholder="Total Room" value="{{old('single_non_ac')}}">
                            @if ($errors->has('single_non_ac'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('single_non_ac') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="single_non_ac_cost">Single Room Non AC Cost:</label>
                            <input type="text" class="form-control" name="single_non_ac_cost"
                                   id="single_non_ac_cost" placeholder="Single Non Ac Room Cost" value="{{old('single_non_ac_cost')}}">
                            @if ($errors->has('single_non_ac_cost'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('single_non_ac_cost') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="double_ac"> Double Ac Room:</label>
                            <input type="text" class="form-control" name="double_ac"
                                   id="double_ac" placeholder="Total Room" value="{{old('double_ac')}}">
                            @if ($errors->has('double_ac'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('double_ac') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="double_ac_cost">Double Room AC Cost:</label>
                            <input type="text" class="form-control" name="double_ac_cost"
                                   id="double_ac_cost" placeholder="Double Ac Room Cost" value="{{old('double_ac_cost')}}">
                            @if ($errors->has('double_ac_cost'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('double_ac_cost') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="double_non_ac"> Double Non Ac Room:</label>
                            <input type="text" class="form-control" name="double_non_ac"
                                   id="double_non_ac" placeholder="Total Room" value="{{old('double_non_ac')}}">
                            @if ($errors->has('double_non_ac'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('double_non_ac') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="double_non_ac_cost">Double Room Non AC Cost:</label>
                            <input type="text" class="form-control" name="double_non_ac_cost"
                                   id="double_non_ac_cost" placeholder="Double Non Ac Room Cost" value="{{old('double_non_ac_cost')}}">
                            @if ($errors->has('double_non_ac_cost'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('double_non_ac_cost') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="discount">Discount:</label>
                            <input type="text" class="form-control" name="discount"
                                   id="discount" placeholder="Discount" value="{{old('discount')}}">
                        </div>
                        <div class="form-group">
                            <label for="discount">Room Availability:</label> <br>
                            <label class="custom-control custom-checkbox checkbox-inline">
                                <input type="checkbox" class="custom-control-input single-check" name="availability" value="0">
                                <span class="custom-control-indicator"></span>
                                <b>Available</b>
                            </label>
                            <label class="custom-control custom-checkbox checkbox-inline">
                                <input type="checkbox" class="custom-control-input single-check" name="availability" value="1">
                                <span class="custom-control-indicator"></span>
                                <b>Not Available</b>
                            </label>


                        </div>
                        <div class="form-group">
                            <label for="featured_images">Wifi Availability:</label> <br>
                            <label class="custom-control custom-checkbox checkbox-inline">
                                <input type="checkbox" class="custom-control-input single-check1" name="internet" value="0">
                                <span class="custom-control-indicator"></span>
                                <b>Yes</b>
                            </label>
                            <label class="custom-control custom-checkbox checkbox-inline">
                                <input type="checkbox" class="custom-control-input single-check1" name="internet" value="1">
                                <span class="custom-control-indicator"></span>
                                <b>No</b>
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="featured_images">Tv Availability:</label> <br>
                            <label class="custom-control custom-checkbox checkbox-inline">
                                <input type="checkbox" class="custom-control-input single-check2" name="tv" value="0">
                                <span class="custom-control-indicator"></span>
                                <b>Yes</b>
                            </label>
                            <label class="custom-control custom-checkbox checkbox-inline">
                                <input type="checkbox" class="custom-control-input single-check2" name="tv" value="1">
                                <span class="custom-control-indicator"></span>
                                <b>No</b>
                            </label>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-success btn-3d pull-right">Add Room</button>
                </form>
            </div>
        </div>
    </div>
    @push('custom_js')
        <style>
            .help-block  {
                color: #9c2a2a;
            }
        </style>
        <script>
            $('.select2-example').select2({
                placeholder: 'Select Your Hotel',
            });
            $('#validation-form').pxValidate({
                focusInvalid: false,
                rules: {
                    'hotel': {
                        required: true,
                    },
                    'single_room': {
                        required: true,
                    },
                    'double_room': {
                        required: true,
                    },
                    'area': {
                        required: true,
                    },

                },
            });
            $('.single-check').on('change', function() {
                $('.single-check').not(this).prop('checked', false);
            });
            $('.single-check1').on('change', function() {
                $('.single-check1').not(this).prop('checked', false);
            });
            $('.single-check2').on('change', function() {
                $('.single-check2').not(this).prop('checked', false);
            });


        </script>
    @endpush
@endsection