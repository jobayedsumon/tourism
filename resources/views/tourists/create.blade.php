@extends('layouts.master')
@section('title', '| Tourist Create')
@section('content')
    <div class="px-content">
        <div class="page-header">
            <div class="row">
                <div class="col-md-4 text-xs-center text-md-left text-nowrap">
                    <h1><i class="page-header-icon fa fa-tags"></i>Add Tourist Area</h1>
                </div>
            </div>
        </div> 
        <div class="row" style="margin-top: 20px"> 
            <div class="col-md-6 col-md-offset-3">
                <form method="post" id="validation-form" action="{{route('tourists.store')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
 
                        <div class="form-group"> 
                            <label for="location">Tourist Location:</label>
                            <input type="text" class="form-control" name="location"
                                   id="location" placeholder=" Tourist Location " value="{{old('location')}}">
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="location">Latitude:</label>
                                    <input type="text" class="form-control" name="latitude"
                                           id="latitude" placeholder=" Tourist Latitude " value="{{old('latitude')}}">
                                </div>
                                <div class="col-md-6">
                                    <label for="location">Longitude:</label>
                                    <input type="text" class="form-control" name="longitude"
                                           id="longitude" placeholder=" Tourist Longitude " value="{{old('longitude')}}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group"> 
                            <label for="touristspot">Tourist Spot:</label>
                            <input type="text" class="form-control" name="touristspot"
                                   id="touristspot" placeholder="Tourist Spot" value="{{old('touristspot')}}">
                        </div>

                            <!-- Textarea -->
                        <div class="form-group">
                          <label class="col-md-12 control-label" for="details">Please Enter Details Information:</label>
                          <div class="col-md-12">                     
                            <textarea class="form-control" id="details" name="details" required placeholder="Please Enter Details Information" value="{{old('details')}}"></textarea>
                          </div>
                        </div>
                        <div class="form-group">
                            <label for="image">Tourist Spot Images:</label>
                            <input type="file" id="images" name="images[]" multiple required />
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-3d pull-right">Add Details</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                console.log("Geolocation is not supported by this browser.");
            }
        }

        function showPosition(position) {
            document.getElementById('latitude').value = position.coords.latitude;
            document.getElementById('longitude').value = position.coords.longitude;
        }
        getLocation();
    </script>
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
                        'location': {
                            required: true,
                        },
                        'touristspot': {
                            required: true,
                        },
                        'details': {
                            required: true,
                        },

                    },
            });
        </script>
    @endpush
@endsection