@extends('layouts.master')
@section('title', '| Hotel Create')
@section('content')
    <div class="px-content">
        <div class="page-header">
            <div class="row">
                <div class="col-md-4 text-xs-center text-md-left text-nowrap">
                    <h1><i class="page-header-icon fa fa-tags"></i>Edit Hotel</h1>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 20px">
            <div class="col-md-6 col-md-offset-3">
                <form method="post" id="validation-form" action="{{route('hotel.update', $hotel->id)}}"
                      enctype="multipart/form-data">
                    {{ method_field('PUT') }}
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" name="name" value="{{ $hotel->name }}">
                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description">Description:</label>
                            <textarea class="form-control" id="summernote-base" name="description">{{ $hotel->description }}</textarea>
                            @if ($errors->has('description'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="tourist_area">Tourist area:</label>
                            <input type="text" class="form-control" name="tourist_area"
                                   id="tourist_area" placeher="Tourist area" value="{{ $hotel->tourist_area }}">
                        </div>

                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control" name="address"
                                   id="address" placeher="Address" value="{{ $hotel->address }}">
                        </div>

                        <div class="form-group">
                            <label for="transportation">Transportation:</label>
                            <input type="text" class="form-control" name="transportation"
                                   id="transportation" placeher="Transportation" value="{{ $hotel->transportation }}">
                        </div>

                        <div class="form-group">
                            <label for="area">Area:</label>
                            <input type="text" class="form-control" name="area"
                                   id="area" placeher="Area" value="{{('area')}}">
                        </div>
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone">Mobile No:</label>
                            <input type="text" class="form-control" name="phone"
                                   id="phone" placeher="Phone No" value="{{ $hotel->phone }}">
                            @if ($errors->has('phone'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email"
                                   id="email" placeher="Email Address" value="{{ $hotel->email }}">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="website">Website:</label>
                            <input type="text" class="form-control" name="website"
                                   id="website" placeher="Website" value="{{ $hotel->website }}">
                        </div>
                        <div class="form-group">
                            <label for="featured_images">Feature Image:</label>
                            <input type="file" id="feature_image" name="feature_image" required />

                        </div>
                        <div class="form-group">
                            <label for="featured_images">Hotel Images:</label>
                            <input type="file" id="images" name="images[]" multiple/>

                        </div>
                        <div class="form-group">
                            <label for="featured_images">Parking Option:</label> <br>
                            <label class="custom-control custom-checkbox checkbox-inline">
                                <input type="checkbox" class="custom-control-input single-check" name="parking"
                                       value="0" {{$hotel->parking == 0 ? 'checked' : ''}}>
                                <span class="custom-control-indicator"></span>
                                <b>Yes</b>
                            </label>
                            <label class="custom-control custom-checkbox checkbox-inline">
                                <input type="checkbox" class="custom-control-input single-check" name="parking"
                                       value="1" {{$hotel->parking == 1 ? 'checked' : ''}}>
                                <span class="custom-control-indicator"></span>
                                <b>No</b>
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="featured_images">Tourist Guide:</label> <br>
                            <label class="custom-control custom-checkbox checkbox-inline">
                                <input type="checkbox" class="custom-control-input single-check" name="tourist"
                                       value="0" {{$hotel->tourist == 0 ? 'checked' : ''}}>
                                <span class="custom-control-indicator"></span>
                                <b>Yes</b>
                            </label>
                            <label class="custom-control custom-checkbox checkbox-inline">
                                <input type="checkbox" class="custom-control-input single-check" name="tourist"
                                       value="1" {{$hotel->tourist == 1 ? 'checked' : ''}}>
                                <span class="custom-control-indicator"></span>
                                <b>No</b>
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="featured_images">Car Service:</label> <br>
                            <label class="custom-control custom-checkbox checkbox-inline">
                                <input type="checkbox" class="custom-control-input single-check" name="car"
                                       value="0" {{$hotel->car == 0 ? 'checked' : ''}}>
                                <span class="custom-control-indicator"></span>
                                <b>Yes</b>
                            </label>
                            <label class="custom-control custom-checkbox checkbox-inline">
                                <input type="checkbox" class="custom-control-input single-check" name="car"
                                       value="1" {{$hotel->car == 1 ? 'checked' : ''}}>
                                <span class="custom-control-indicator"></span>
                                <b>No</b>
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="featured_images">Pool:</label> <br>
                            <label class="custom-control custom-checkbox checkbox-inline">
                                <input type="checkbox" class="custom-control-input single-check1" name="pool" value="0"
                                        {{$hotel->pool == 0 ? 'checked' : ''}}>
                                <span class="custom-control-indicator"></span>
                                <b>Yes</b>
                            </label>
                            <label class="custom-control custom-checkbox checkbox-inline">
                                <input type="checkbox" class="custom-control-input single-check1" name="pool" value="1"
                                        {{$hotel->pool == 1 ? 'checked' : ''}}>
                                <span class="custom-control-indicator"></span>
                                <b>No</b>
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="featured_images">Restaurant:</label> <br>
                            <label class="custom-control custom-checkbox checkbox-inline">
                                <input type="checkbox" class="custom-control-input single-check2" name="restaurant"
                                       value="0" {{$hotel->restaurant == 0 ? 'checked' : ''}}>
                                <span class="custom-control-indicator"></span>
                                <b>Yes</b>
                            </label>
                            <label class="custom-control custom-checkbox checkbox-inline">
                                <input type="checkbox" class="custom-control-input single-check2" name="restaurant"
                                       value="1" {{$hotel->restaurant == 1 ? 'checked' : ''}}>
                                <span class="custom-control-indicator"></span>
                                <b>No</b>
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="featured_images">Gym:</label> <br>
                            <label class="custom-control custom-checkbox checkbox-inline">
                                <input type="checkbox" class="custom-control-input single-check3" name="gym" value="0"
                                        {{$hotel->gym == 0 ? 'checked' : ''}}>
                                <span class="custom-control-indicator"></span>
                                <b>Yes</b>
                            </label>
                            <label class="custom-control custom-checkbox checkbox-inline">
                                <input type="checkbox" class="custom-control-input single-check3" name="gym" value="1"
                                        {{$hotel->gym == 1 ? 'checked' : ''}}>
                                <span class="custom-control-indicator"></span>
                                <b>No</b>
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-3d pull-right">Update</button>
                </form>
            </div>
        </div>
    </div>
    @push('custom_js')
        <script>
            $('#summernote-base').summernote({
                height: 120,
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
            $('#validation-form').pxValidate({
                focusInvalid: false,
                rules: {
                    'name': {
                        required: true,
                        minlength: 3
                    },
                    'email': {
                        required: true,
                        email: true,
                    },
                    'phone': {
                        required: true,
                        maxlength: 11
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
            $('.single-check3').on('change', function() {
                $('.single-check3').not(this).prop('checked', false);
            });
            $('.single-check4').on('change', function() {
                $('.single-check4').not(this).prop('checked', false);
            });
            $('.single-check5').on('change', function() {
                $('.single-check5').not(this).prop('checked', false);
            });

        </script>
    @endpush
@endsection