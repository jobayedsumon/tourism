@extends('frontend.layouts.master')
@section('title','| Customer Login')
@section('content')
<!--===== FULL-PAGE-FORM ====-->
<section>
    <div class="colored-border"></div>
    <div id="full-page-form">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="custom-form custom-form-fields">
                        <h3>Login</h3>
                        <form method="POST" action="{{ route('customer.login') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email"  name="email" value="{{old('email')}}" required/>
                                <span><i class="fa fa-user"></i></span>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                           </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password"  name="password" required/>
                                <span><i class="fa fa-lock"></i></span>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                           </span>
                                @endif
                            </div>

                            <button class="btn btn-orange btn-block">Login</button>
                        </form>

                        <div class="other-links">
                            <p class="link-line">New Here ? <a href="{{route('customer.register')}}">Signup</a></p>
                            <a class="simple-link" href="#">Forgot Password ?</a>
                        </div><!-- end other-links -->
                    </div><!-- end custom-form -->

                    <p class="full-page-copyright">© 2018 Tour BD. All rights reserved.</p>
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

