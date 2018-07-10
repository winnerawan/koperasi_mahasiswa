<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ config('app.name') }}</title>

    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="">

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Questrial:400%7CMontserrat:300,400,700,700i' rel='stylesheet'>

    <!-- Css -->
    <link rel="stylesheet" href="{{ asset("front/css/bootstrap.min.css") }}"/>
    <link rel="stylesheet" href="{{ asset("front/css/font-icons.css") }}"/>
    <link rel="stylesheet" href="{{ asset("front/css/style.css") }}"/>
    <link rel="stylesheet" href="{{ asset("front/css/color.css") }}"/>

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset("front/img/favicon.ico") }}">
    <link rel="apple-touch-icon" href="{{ asset("front/img/apple-touch-icon.png") }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset("front/img/apple-touch-icon-72x72.png") }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset("front/img/apple-touch-icon-114x114.png") }}">

</head>

<body>

<!-- Preloader -->
<div class="loader-mask">
    <div class="loader">
        <div></div>
    </div>
</div>

        @include('frontend.partials.header')


        @yield('content')

    <!-- jQuery Scripts -->
    <script type="text/javascript" src="{{ asset("front/js/jquery.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("front/js/bootstrap.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("front/js/easing.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("front/js/jquery.magnific-popup.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("front/js/owl-carousel.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("front/js/flickity.pkgd.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("front/js/modernizr.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("front/js/scripts.js") }}"></script>

</body>
</html>
