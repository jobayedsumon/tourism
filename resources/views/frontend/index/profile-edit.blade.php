@extends('frontend.layouts.master')
@section('title','| Profile Edit')
@section('content')
    <!--===== FULL-PAGE-FORM ====-->
    <section>
        <div class="colored-border"></div>
        <div id="full-page-form">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="custom-form custom-form-fields">
                            <h3 class="text-capitalize">{{auth()->user()->name}}</h3>

                            <form action="{{route('user.update-profile')}}" method="post">
                                {{csrf_field()}}
                                {{ method_field('PUT') }}
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <input type="text" class="form-control"  name="name"
                                           value="{{auth()->user()->name}}" required/>
                                    <span><i class="fa fa-user"></i></span>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control"  name="email"
                                           value="{{auth()->user()->email}}" required/>
                                    <span><i class="fa fa-user"></i></span>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                           </span>
                                    @endif
                                </div>

                                <button class="btn btn-orange btn-block">Update</button>
                            </form>

                        </div><!-- end custom-form -->

                        <p class="full-page-copyright">© Tour BD. All rights reserved.</p>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end full-page-form -->
        <div class="colored-border"></div>
    </section>
    <style>
        .help-block {
            color: #2d0909;
        }
    </style>
@endsection

