<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="shortcut icon" href="{{asset('backend/fav.png')}}">
    <title>Hotel Finder | Login
    </title>
    <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/assets/css/pixeladmin.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('backend/assets/css/clean.min.css')}}" rel="stylesheet">
    <style>
        @media (min-width: 992px) {
            .col-lg-offset-3 {
                margin-left: 30% !important;
            }
        }
    </style>

</head>
<body>
<div class="page-signup-header p-a-2 text-sm-center">
    <a class="px-demo-brand px-demo-brand-lg text-default" href="/">
        <span class="px-demo-logo bg-primary m-t-0"><span class="px-demo-logo-1"></span><span
                    class="px-demo-logo-2"></span><span class="px-demo-logo-3"></span><span
                    class="px-demo-logo-4"></span><span class="px-demo-logo-5"></span><span
                    class="px-demo-logo-6"></span><span class="px-demo-logo-7"></span><span
                    class="px-demo-logo-8"></span><span class="px-demo-logo-9"></span></span>
        Hotel Finder</a>
    <a href="{{route('login')}}" class="btn btn-primary">Sign In</a>
</div>

<div class="col-lg-5 col-lg-offset-3 page-signup-container">
    <h2 class="m-t-0 m-b-4 text-xs-center font-weight-semibold font-size-20">Create an Account</h2>

    <form action="{{route('register')}}" method="post" class="panel p-a-4">
        {{csrf_field()}}
        <fieldset class=" form-group form-group-lg{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label"> Name </label>

            <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Your Name"
                   required>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </fieldset>

        <fieldset class=" form-group form-group-lg{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

            <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Email Address"
                   required>
            @if ($errors->has('email'))
                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                           </span>
            @endif
        </fieldset>

        <fieldset class=" form-group form-group-lg{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label">Password</label>

            <input type="password" class="form-control" name="password" placeholder="Password" required>
            @if ($errors->has('password'))
                <span class="help-block">
                 <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </fieldset>
        <fieldset class=" form-group form-group-lg{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label">Confirm Password</label>

            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password"
                   required>
        </fieldset>

        {{--<label class="custom-control custom-checkbox">--}}
            {{--<input type="checkbox" class="custom-control-input">--}}
            {{--<span class="custom-control-indicator"></span>--}}
            {{--I agree with the <a href="#" target="_blank">Terms and Conditions</a>--}}
        {{--</label>--}}

        <button type="submit" class="btn btn-block btn-lg btn-primary m-t-3">Sign Up</button>
    </form>

    {{--<h4 class="m-y-3 text-xs-center font-weight-semibold text-muted">or sign up with</h4>--}}

    {{--<div class="text-xs-center">--}}
    {{--<a href="index.html" class="page-signup-social-btn btn btn-success btn-rounded" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a>&nbsp;&nbsp;&nbsp;--}}
    {{--</div>--}}
</div>

</body>
</html>