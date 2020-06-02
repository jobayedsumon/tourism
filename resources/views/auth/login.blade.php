<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="shortcut icon" href="{{asset('backend/fav.png')}}">
    <title>Hotel Finder | Login
    </title>
    <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/assets/css/pixeladmin.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/assets/css/clean.min.css')}}" rel="stylesheet">
    <style>
        @media (min-width: 992px)
        {
            .col-lg-offset-3 {
                margin-left: 30% !important;
            }
        }
    </style>

</head>
<body>
<div class="page-signin-header p-a-2 text-sm-center">
    <a class="px-demo-brand px-demo-brand-lg text-default" href="/">
        <img src="{{asset('')}}" alt=""></a>
</div>
<div class="px-content">
    <div class="col-lg-5 col-lg-offset-3 page-signin-container" id="page-signin-form" style="margin-top: 30px">
        <h2 class="m-t-0 m-b-4 text-xs-center font-weight-semibold font-size-20">
            Sign In to your Account  </h2>

        <form class="panel p-a-4" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <fieldset class=" form-group form-group-lg{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Email Address" required>
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
            <div class="clearfix">
                <label class="custom-control custom-checkbox pull-xs-left">
                    <input type="checkbox" class="custom-control-input" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <span class="custom-control-indicator"></span>
                    Remember me
                </label>
            </div>
            <button type="submit" class="btn btn-block btn-lg btn-primary m-t-3">Sign In</button>
        </form>
        <h3 class="text-center">Don't Have Account  <a href="{{route('register')}}" class="btn btn-primary">Sign Up</a></h3>
    </div>
</div>
</body>
</html>