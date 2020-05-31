@extends('layouts.master')
@section('title', '| Room Edit')
@section('content')
    <div class="px-content">
        <div class="page-header">
            <div class="row">
                <div class="col-md-4 text-xs-center text-md-left text-nowrap">
                    <h1><i class="page-header-icon fa fa-tags"></i>Edit Hotel Room</h1>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 20px">
            <div class="col-md-6 col-md-offset-3">
                <form method="post" id="validation-form" action="{{route('room.update', ['room', $room->id])}}"
                      enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="row">
                        <div class="form-group">
                            <label for="hotel">Hotel Name:</label>
                            <select class="form-control select2-md select2-example" name="hotel"
                                    style="width: 100%" data-allow-clear="true">
                                @foreach($hotel as $data)
                                <option value="{{ $data->id}}"
                                        {{ $data->id == $room->hotels_id ? 'selected' : ''}}>
                                {{ $data->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="single"> Single Ac Room:</label>
                            <input type="text" class="form-control" name="single_ac"
                                   id="single_ac" placeholder="Total Room" value="{{$room->single_ac}}">
                            @if ($errors->has('single_ac'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('single_ac') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="single_ac_cost">Single Room AC Cost:</label>
                            <input type="text" class="form-control" name="single_ac_cost"
                                   id="single_ac_cost" placeholder="Single Room Cost" value="{{$room->single_ac_cost}}">
                            @if ($errors->has('single_ac_cost'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('single_ac_cost') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="single"> Single Non Ac Room:</label>
                            <input type="text" class="form-control" name="single_non_ac"
                                   id="single_non_ac" placeholder="Total Room" value="{{$room->single_non_ac}}">
                            @if ($errors->has('single_non_ac'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('single_non_ac') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="single_non_ac_cost">Single Room Non AC Cost:</label>
                            <input type="text" class="form-control" name="single_non_ac_cost"
                                   id="single_non_ac_cost" placeholder="Single Non Ac Room Cost" value="{{$room->single_non_ac_cost}}">
                            @if ($errors->has('single_non_ac_cost'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('single_non_ac_cost') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="double_ac"> Double Ac Room:</label>
                            <input type="text" class="form-control" name="double_ac"
                                   id="double_ac" placeholder="Total Room" value="{{$room->double_ac}}">
                            @if ($errors->has('double_ac'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('double_ac') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="double_ac_cost">Double Room AC Cost:</label>
                            <input type="text" class="form-control" name="double_ac_cost"
                                   id="double_ac_cost" placeholder="Double Ac Room Cost" value="{{$room->double_ac_cost}}">
                            @if ($errors->has('double_ac_cost'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('double_ac_cost') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="double_non_ac"> Double Non Ac Room:</label>
                            <input type="text" class="form-control" name="double_non_ac"
                                   id="double_non_ac" placeholder="Total Room" value="{{$room->double_non_ac}}">
                            @if ($errors->has('double_non_ac'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('double_non_ac') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="double_non_ac_cost">Double Room Non AC Cost:</label>
                            <input type="text" class="form-control" name="double_non_ac_cost"
                                   id="double_non_ac_cost" placeholder="Double Non Ac Room Cost" value="{{$room->double_non_ac_cost}}">
                            @if ($errors->has('double_non_ac_cost'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('double_non_ac_cost') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="discount">Discount:</label>
                            <input type="text" class="form-control" name="discount"
                                   id="discount" placeholder="Discount" value="{{$room->discount}}">
                        </div>
                        <div class="form-group">
                            <label for="available">Room Availability:</label> <br>
                            <label class="custom-control custom-checkbox checkbox-inline">
                                <input type="checkbox" class="custom-control-input single-check" name="availability"
                                       value="0" {{ $room->availability == '0'  ? 'checked' : '' }}>
                                <span class="custom-control-indicator"></span>
                                <b>Available</b>
                            </label>
                            <label class="custom-control custom-checkbox checkbox-inline">
                                <input type="checkbox" class="custom-control-input single-check" name="availability"
                                       value="1" {{ $room->availability == '1'  ? 'checked' : '' }}>
                                <span class="custom-control-indicator"></span>
                                <b>Not Available</b>
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="wifi">Wifi Availability:</label> <br>
                            <label class="custom-control custom-checkbox checkbox-inline">
                                <input type="checkbox" class="custom-control-input single-check1" name="internet"
                                       value="0" {{ $room->internet == '0'  ? 'checked' : '' }}>
                                <span class="custom-control-indicator"></span>
                                <b>Yes</b>
                            </label>
                            <label class="custom-control custom-checkbox checkbox-inline">
                                <input type="checkbox" class="custom-control-input single-check1" name="internet"
                                       value="1" {{ $room->internet == '1'  ? 'checked' : '' }}>
                                <span class="custom-control-indicator"></span>
                                <b>No</b>
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="tv">Tv Availability:</label> <br>
                            <label class="custom-control custom-checkbox checkbox-inline">
                                <input type="checkbox" class="custom-control-input single-check2" name="tv" value="0"
                                        {{ $room->tv == '0'  ? 'checked' : '' }}>
                                <span class="custom-control-indicator"></span>
                                <b>Yes</b>
                            </label>
                            <label class="custom-control custom-checkbox checkbox-inline">
                                <input type="checkbox" class="custom-control-input single-check2" name="tv" value="1"
                                        {{ $room->tv == '1'  ? 'checked' : '' }}>
                                <span class="custom-control-indicator"></span>
                                <b>No</b>
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-3d pull-right">Update Room</button>
                </form>
            </div>
        </div>
    </div>
    @push('custom_js')
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
            $('#summernote-base').summernote({
                height: 160,
                toolbar: [
                    ['parastyle', ['style']],
                    ['fontstyle', ['fontname', 'fontsize']],
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    // ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['insert', ['table', 'hr']],
                    ['history', ['undo', 'redo']],
                    ['misc', ['codeview', 'fullscreen']],
                    ['help', ['help']]
                ],
            });

        </script>
    @endpush
@endsection