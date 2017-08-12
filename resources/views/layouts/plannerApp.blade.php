<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/owl-slider.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/settings.css')}}"/>
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}"/>
    <script type="text/javascript" src="{{asset('js/jquery-1.11.1.min.js')}}"></script>

    <title>@yield('title')</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Styles -->
    {{--<link href="{{ asset('css/app.css')}}') }}" rel="stylesheet">--}}
    @yield('style')
</head>
<body>

@includeIf('layouts.includes.cartHiddenBox')

<div class="wrappage">

    @yield('ifRequired')

    <header id="header" class="header-v1">
        @include('layouts.includes.topNavBar')
        @include('layouts.includes.mainMenu')
    </header>

    {{--<div class="main-content">--}}

        @yield('content')

    {{--</div>--}}

    <div id="back-to-top">
        <i class="fa fa-long-arrow-up"></i>
    </div>
    @include('layouts.includes.footer')
</div>


<!-- Scripts -->

<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.themepunch.plugins.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/engo-plugins.js')}}"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript" src="{{asset('js/map-icons.js')}}"></script>
<script type="text/javascript" src="{{asset('js/store.js')}}"></script>

@yield('scripts')

</body>
</html>
