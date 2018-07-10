<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset("merchant/assets/images/favicon.ico") }}">
    <!-- DataTables -->
    <link href="{{ asset("merchant/assets/datatables/dataTables.bootstrap4.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("merchant/assets/datatables/buttons.bootstrap4.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{ asset("merchant/assets/datatables/responsive.bootstrap4.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="{{ asset("merchant/assets/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("merchant/assets/css/icons.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("merchant/assets/css/metismenu.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("merchant/assets/css/style.css") }}" rel="stylesheet" type="text/css" />

    <script src="{{ asset("merchant/assets/js/modernizr.min.js") }}"></script>

</head>

<body>

<body class="bg-accpunt-pages">

<!-- HOME -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div class="wrapper-page">

                    <div class="account-pages">
                        <div class="account-box">
                            <div class="account-logo-box">
                                <h2 class="text-uppercase text-center">
                                    <a href="{{ url('') }}" class="text-success">
                                        <span><img src="" alt="{{ config('app.name') }}" height="18"></span>
                                    </a>
                                </h2>
                                <h6 class="text-uppercase text-center font-bold mt-4">Sign In</h6>
                            </div>
                            <div class="account-content">
                                <form class="form-horizontal" role="form" method="POST" action="{{ url('/merchant/login') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group m-b-20 row">
                                        <div class="col-12">
                                            <label for="emailaddress">Email address</label>
                                            <input class="form-control" type="email" name="email" id="email" required="" placeholder="Email">
                                        </div>
                                    </div>

                                    <div class="form-group row m-b-20">
                                        <div class="col-12">
                                            <a href="{{ url('/merchant/password/reset') }}" class="text-muted pull-right"><small>Forgot your password?</small></a>
                                            <label for="password">Password</label>
                                            <input class="form-control" type="password" required="" name="password" id="password" placeholder="Password">
                                        </div>
                                    </div>

                                    <div class="form-group row m-b-20">
                                        <div class="col-12">

                                            <div class="checkbox checkbox-success">
                                                <input id="remember" type="checkbox" checked="">
                                                <label for="remember">
                                                    Remember me
                                                </label>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-group row text-center m-t-10">
                                        <div class="col-12">
                                            <button class="btn btn-block btn-gradient waves-effect waves-light" type="submit">Sign In</button>
                                        </div>
                                    </div>

                                </form>

                                <div class="row m-t-50">
                                    <div class="col-sm-12 text-center">
                                        <p class="text-muted">Don't have an account? <a href="{{ url('merchant/register') }}" class="text-dark m-l-5"><b>Sign Up</b></a></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end card-box-->


                </div>
                <!-- end wrapper -->

            </div>
        </div>
    </div>
</section>


<!-- jQuery  -->
<script src="{{ asset("merchant/assets/js/jquery.min.js") }}"></script>
<script src="{{ asset("merchant/assets/js/popper.min.js") }}"></script>
<script src="{{ asset("merchant/assets/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("merchant/assets/js/metisMenu.min.js") }}"></script>
<script src="{{ asset("merchant/assets/js/waves.js") }}"></script>
<script src="{{ asset("merchant/assets/js/jquery.slimscroll.js") }}"></script>
<script src="{{ asset("merchant/waypoints/lib/jquery.waypoints.min.js") }}"></script>
<script src="{{ asset("merchant/counterup/jquery.counterup.min.js") }}"></script>
<!-- Required datatable js -->
<script src="{{ asset("merchant/assets/datatables/jquery.dataTables.min.js") }}"></script>
<script src="{{ asset("merchant/assets/datatables/dataTables.bootstrap4.min.js") }}"></script>
<script src="{{ asset("merchant/assets/datatables/dataTables.buttons.min.js") }}"></script>
<script src="{{ asset("merchant/assets/datatables/buttons.bootstrap4.min.js") }}"></script>
<script src="{{ asset("merchant/assets/datatables/jszip.min.js") }}"></script>
<script src="{{ asset("merchant/assets/datatables/pdfmake.min.js") }}"></script>
<script src="{{ asset("merchant/assets/datatables/vfs_fonts.js") }}"></script>
<script src="{{ asset("merchant/assets/datatables/buttons.html5.min.js") }}"></script>
<script src="{{ asset("merchant/assets/datatables/buttons.print.min.js") }}"></script>
<!-- Responsive examples -->
<script src="{{ asset("merchant/assets/datatables/dataTables.responsive.min.js") }}"></script>
<script src="{{ asset("merchant/assets/datatables/responsive.bootstrap4.min.js") }}"></script>
<!-- Chart JS -->
<script src="{{ asset("merchant/chart.js/chart.bundle.js") }}"></script>

<!-- init dashboard -->
<script src="{{ asset("merchant/assets/pages/jquery.dashboard.init.js") }}"></script>

<!-- App js -->
<script src="{{ asset("merchant/assets/js/jquery.core.js") }}"></script>
<script src="{{ asset("merchant/assets/js/jquery.app.js") }}"></script>
<!-- END HOME -->


{{--@extends('merchant.layout.auth')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Login</div>--}}
                {{--<div class="panel-body">--}}
                    {{--<form class="form-horizontal" role="form" method="POST" action="{{ url('/merchant/login') }}">--}}
                        {{--{{ csrf_field() }}--}}

                        {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                            {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control" name="password">--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<div class="checkbox">--}}
                                    {{--<label>--}}
                                        {{--<input type="checkbox" name="remember"> Remember Me--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-8 col-md-offset-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--Login--}}
                                {{--</button>--}}

                                {{--<a class="btn btn-link" href="{{ url('/merchant/password/reset') }}">--}}
                                    {{--Forgot Your Password?--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}
