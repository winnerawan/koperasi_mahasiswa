<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="http://unipma.ac.id/favicon.ico">

    <!-- All CSS Files -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="{{ asset("frontend/css/bootstrap.min.css") }}">
    <!-- Nivo-slider css -->
    <link rel="stylesheet" href="{{ asset("frontend/lib/css/nivo-slider.css") }}">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="{{ asset("frontend/css/core.css") }}">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="{{ asset("frontend/css/shortcode/shortcodes.css") }}">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{ asset("frontend/style.css") }}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset("frontend/css/responsive.css") }}">
    <!-- Template color css -->
    <link href="{{ asset("frontend/css/color/color-core.css") }}" data-style="styles" rel="stylesheet">
    <!-- User style -->
    <link rel="stylesheet" href="{{ asset("frontend/css/custom.css") }}">

    <!-- Modernizr JS -->
    <script src="{{ asset("frontend/js/vendor/modernizr-2.8.3.min.js") }}"></script>
</head>

<body>

    @include('front.partials.header')
        @yield('content')



<!-- jquery latest version -->
<script src="{{ asset("frontend/js/vendor/jquery-3.1.1.min.js") }}"></script>
<!-- Bootstrap framework js -->
<script src="{{ asset("frontend/js/bootstrap.min.js") }}"></script>
<!-- jquery.nivo.slider js -->
<script src="{{ asset("frontend/lib/js/jquery.nivo.slider.js") }}"></script>
<!-- All js plugins included in this file. -->
<script src="{{ asset("frontend/js/plugins.js") }}"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="{{ asset("frontend/js/main.js") }}"></script>
    @yield('extra-script')

</body>

</html>
