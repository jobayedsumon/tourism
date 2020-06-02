<!doctype html>
<html lang="en">

<head>
    <title>Trusted Tourism</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="{{asset('frontend/images/favicon.png')}}" type="image/x-icon">


    @include('frontend.layouts.css')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
</head>


<body id="main-homepage">

<!--====== LOADER =====-->
<div class="loader"></div>


@include('frontend.layouts.header-top')
@include('frontend.layouts.navbar')

@if(request()->routeIs('frontend.index'))
    @include('frontend.index.slider')
    @include('frontend.index.offer')
    @include('frontend.index.feature')
    @include('frontend.index.highlight')
@endif
@yield('content')
@include('frontend.layouts.footer')
@include('frontend.layouts.js')

</body>

</html>