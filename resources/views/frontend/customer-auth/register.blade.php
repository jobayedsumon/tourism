@extends('frontend.layouts.master')
@section('title','| Customer Register')
@section('content')
    <!--===== FULL-PAGE-FORM ====-->
    <section>
        <div class="colored-border"></div>
        <div id="full-page-form">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="custom-form custom-form-fields">
                            <h3>Registration</h3>
                            <form action="{{route('customer.register')}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <input type="text" class="form-control" placeholder="Username" name="name"
                                           value="{{old('name')}}" required/>
                                    <span><i class="fa fa-user"></i></span>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" name="email"
                                           value="{{old('email')}}" required/>
                                    <span><i class="fa fa-user"></i></span>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                           </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password"
                                           required/>
                                    <span><i class="fa fa-lock"></i></span>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                           </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input type="password" class="form-control" placeholder="Confirm Password"
                                           name="password_confirmation" required/>
                                    <span><i class="fa fa-lock"></i></span>
                                </div>

                                <button class="btn btn-orange btn-block">Register</button>
                            </form>

                            <div class="other-links">
                                <p class="link-line">Already Have An Account ? <a href="{{route('customer.login')}}">Login
                                        Here</a></p>
                            </div><!-- end other-links -->
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

