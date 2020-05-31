<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="shortcut icon" href="{{asset('backend/fav.png')}}">
    <title>Hotel Finder | Email Confirmation
    </title>
    <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/assets/css/pixeladmin.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/assets/css/clean.min.css')}}" rel="stylesheet">

</head>
<body>
<div class="page-signin-header p-a-2 text-sm-center">
    <a class="px-demo-brand px-demo-brand-lg text-default" href="/">
        <img src="{{asset('')}}" alt=""></a>
</div>
<div class="px-content">
    <div class="col-lg-5 col-lg-offset-3 page-signin-container" id="page-signin-form" style="margin-top: 30px">
        <h1>Click the Link To Verify Your Email</h1>
        Click the following link to verify your email <a href="{{url('hotel/verifyemail/'.$email_token)}}"><button class="btn-primary">Confirmation</button></a>

    </div>
</div>
</body>
</html>
