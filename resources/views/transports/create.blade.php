@extends('layouts.master')
@section('title', '| Transport Create')
@section('content')
    <div class="px-content">
        <div class="page-header">
            <div class="row">
                <div class="col-md-4 text-xs-center text-md-left text-nowrap">
                    <h1><i class="page-header-icon fa fa-tags"></i>Add Transport</h1>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 20px"> 
            <div class="col-md-6 col-md-offset-3">
                <form method="post" id="validation-form" action="{{route('transports.store')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
 
                        <div class="form-group"> 
                            <label for="transportname">Transport Name:</label>
                            <input type="text" class="form-control" name="transportname"
                                   id="transportname" placeholder="Transport Name" value="{{old('transportname')}}">
                        </div>

                        <div class="form-group"> 
                            <label for="transporttype">Transport Type:</label>
                            <input type="text" class="form-control" name="transporttype"
                                   id="transporttype" placeholder="Transport Name" value="{{old('transporttype')}}">
                        </div>

                        <div class="form-group">
                            <label for="to">Please Enter your From and To Location:</label>
                            <input type="text" class="form-control" name="to"
                                   id="to" placeholder="From to To" value="{{old('to')}}">
                        </div>

                        <div class="form-group">
                            <label for="address">Counter Address:</label>
                            <input type="text" class="form-control" name="address"
                                   id="address" placeholder="Counter Address" value="{{old('address')}}">
                        </div>
 
                        <div class="form-group">
                            <label for="number">Contact Number:</label>
                            <input type="text" class="form-control" name="number"
                                   id="number" placeholder="Contact number" value="{{old('number')}}">
                        </div>

                        <div class="form-group">
                            <label for="ac">AC Ticket Price:</label>
                            <input type="text" class="form-control" name="ac"
                                   id="ac" placeholder="Enter AC bus ticket price number" value="{{old('ac')}}">
                        </div>

                        <div class="form-group">
                            <label for="nonac">Non AC Ticket Price:</label>
                            <input type="text" class="form-control" name="nonac"
                                   id="nonac" placeholder="Enter Non AC bus ticket price number" value="{{old('nonac')}}">
                        </div>

                    </div>
                    <button type="submit" class="btn btn-success btn-3d pull-right">Add Transport</button>
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
                        'transport': {
                            required: true,
                        },
                        'from': {
                            required: true,
                        },
                        'to': {
                            required: true,
                        },

                    },
            });
        </script>
    @endpush
@endsection