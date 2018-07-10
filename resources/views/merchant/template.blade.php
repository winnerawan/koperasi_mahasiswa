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
@include('merchant.partials.header')
@include('merchant.partials.sidebar')
@yield('content')


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
<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').DataTable();

        //Buttons examples
        var table = $('#datatable-buttons').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf']
        });

        table.buttons().container()
            .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
    } );

</script>
</body>
</html>
