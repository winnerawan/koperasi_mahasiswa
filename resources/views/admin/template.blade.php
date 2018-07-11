<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>{{ config('app.name') }} Administrator Panel</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="{{ asset("admin/assets/plugins/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
    <link href="{{ asset("admin/assets/plugins/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet">
    <link href="{{ asset("admin/assets/plugins/icomoon/style.css") }}" rel="stylesheet">
    <link href="{{ asset("admin/assets/plugins/uniform/css/default.css") }}" rel="stylesheet"/>
    <link href="{{ asset("admin/assets/plugins/switchery/switchery.min.css") }}" rel="stylesheet"/>
    <link href="{{ asset("admin/assets/plugins/nvd3/nv.d3.min.css") }}" rel="stylesheet">

    <link href="{{ asset("admin/assets/plugins/datatables/css/jquery.datatables.min.css") }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("admin/assets/plugins/datatables/css/jquery.datatables_themeroller.css") }}" rel="stylesheet" type="text/css"/>
    <!-- Theme Styles -->
    <link href="{{ asset("admin/assets/css/space.min.css") }}" rel="stylesheet">
    <link href="{{ asset("admin/assets/css/custom.css") }}" rel="stylesheet">
    <link rel="shortcut icon" href="http://unipma.ac.id/favicon.ico">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <!-- Page Container -->
    <div class="page-container">

        @include('admin.partials.sidebar')
        <!-- Page Content -->
            <div class="page-content">
                @include('admin.partials.header')
                @yield('content')

            </div><!-- /Page Content -->
    </div><!-- /Page Container -->


    <!-- Javascripts -->
    <script src="{{ asset("admin/assets/plugins/jquery/jquery-3.1.0.min.js") }}"></script>
    <script src="{{ asset("admin/assets/plugins/bootstrap/js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("admin/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js") }}"></script>
    <script src="{{ asset("admin/assets/plugins/uniform/js/jquery.uniform.standalone.js") }}"></script>
    <script src="{{ asset("admin/assets/plugins/switchery/switchery.min.js") }}"></script>
    <script src="{{ asset("admin/assets/plugins/d3/d3.min.js") }}"></script>
    <script src="{{ asset("admin/assets/plugins/nvd3/nv.d3.min.js") }}"></script>
    <script src="{{ asset("admin/assets/plugins/flot/jquery.flot.min.js") }}"></script>
    <script src="{{ asset("admin/assets/plugins/flot/jquery.flot.time.min.js") }}"></script>
    <script src="{{ asset("admin/assets/plugins/flot/jquery.flot.symbol.min.js") }}"></script>
    <script src="{{ asset("admin/assets/plugins/flot/jquery.flot.resize.min.js") }}"></script>
    <script src="{{ asset("admin/assets/plugins/flot/jquery.flot.tooltip.min.js") }}"></script>
    <script src="{{ asset("admin/assets/plugins/flot/jquery.flot.pie.min.js") }}"></script>
    <script src="{{ asset("admin/assets/plugins/chartjs/chart.min.js") }}"></script>
    <script src="{{ asset("admin/assets/js/space.min.js") }}"></script>
    <script src="{{ asset("admin/assets/js/pages/dashboard.js") }}"></script>
    <script src="{{ asset("admin/assets/plugins/datatables/js/jquery.datatables.min.js") }}"></script>
    <script src="{{ asset("admin/assets/js/pages/table-data.js") }}"></script>
        @yield('extra-script')
</body>
</html>
