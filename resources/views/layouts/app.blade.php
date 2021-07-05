<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}  @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="/css/core.css">
    <!-- Template shortcodes/elements style -->
    <link rel="stylesheet" href="/css/shortcode/shortcodes.css">
    <!-- Template main style -->
    <link rel="stylesheet" href="/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="/css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="/css/custom.css">


    <!-- Modernizr JS -->
    <script src="/js/vendor/modernizr-2.8.3.min.js"></script>

    @yield('css')
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Body main wrapper start -->
<div class="wrapper fixed-newslatter">
   @include('components.header')
@include('components.breadcrumb')

    @yield('content')
   @include('components.footer')
</div>
<!-- Body main wrapper end -->

@include('components.modals')


<!-- jquery latest version -->
<script src="/js/vendor/jquery-1.12.0.min.js"></script>

<!-- Bootstrap framework js -->
<script src="/js/bootstrap.min.js"></script>

<!-- All js plugins included in this file. -->
<script src="/js/plugins.js"></script>

<script src="/js/slick.min.js"></script>
<!-- Waypoints.min.js. -->

<script src="/js/waypoints.min.js"></script>
<!-- Main js file that contents all jQuery plugins activation. -->

<script src="/js/main.js"></script>

@yield('js')
</body>
