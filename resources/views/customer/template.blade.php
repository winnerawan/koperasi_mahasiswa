<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured customer theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- App Favicon -->
    <link rel="shortcut icon" href="http://unipma.ac.id/favicon.ico">

    <!-- App title -->
    <title>{{ config('app.name') }}</title>

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{ asset("customer/assets/plugins/morris/morris.css") }}">

    <!-- Switchery css -->
    <link href="{{ asset("customer/assets/plugins/switchery/switchery.min.css") }}" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="{{ asset("customer/assets/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />

    <!-- App CSS -->
    <link href="{{ asset("customer/assets/css/style.css") }}" rel="stylesheet" type="text/css" />

    <!-- Modernizr js -->
    <script src="{{ asset("customer/assets/js/modernizr.min.js") }}"></script>

    <link href="{{ asset("customer/assets/plugins/datatables/dataTables.bootstrap4.min.css") }}" rel="stylesheet" type="text/css" />

<body>

@include('customer.partials.header ')

@yield('content')

<!-- jQuery  -->
<script src="{{ asset("customer/assets/js/jquery.min.js") }}"></script>
<script src="{{ asset("customer/assets/js/popper.min.js") }}"></script><!-- Tether for Bootstrap -->
<script src="{{ asset("customer/assets/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("customer/assets/js/waves.js") }}"></script>
<script src="{{ asset("customer/assets/js/jquery.nicescroll.js") }}"></script>
<script src="{{ asset("customer/assets/plugins/switchery/switchery.min.js") }}"></script>

<!--Morris Chart-->
<script src="{{ asset("customer/assets/plugins/morris/morris.min.js") }}"></script>
<script src="{{ asset("customer/assets/plugins/raphael/raphael-min.js") }}"></script>

<!-- Counter Up  -->
<script src="{{ asset("customer/assets/plugins/waypoints/lib/jquery.waypoints.min.js") }}"></script>
<script src="{{ asset("customer/assets/plugins/counterup/jquery.counterup.min.js") }}"></script>

<!-- Required datatable js -->
<script src="{{ asset("customer/assets/plugins/datatables/jquery.dataTables.min.js") }}"></script>
<script src="{{ asset("customer/assets/plugins/datatables/dataTables.bootstrap4.min.js") }}"></script>
<!-- Buttons examples -->
<script src="{{ asset("customer/assets/plugins/datatables/dataTables.buttons.min.js") }}"></script>
<script src="{{ asset("customer/assets/plugins/datatables/buttons.bootstrap4.min.js") }}"></script>
<script src="{{ asset("customer/assets/plugins/datatables/jszip.min.js") }}"></script>
<script src="{{ asset("customer/assets/plugins/datatables/pdfmake.min.js") }}"></script>
<script src="{{ asset("customer/assets/plugins/datatables/vfs_fonts.js") }}"></script>
<script src="{{ asset("customer/assets/plugins/datatables/buttons.html5.min.js") }}"></script>
<script src="{{ asset("customer/assets/plugins/datatables/buttons.print.min.js") }}"></script>

<!-- Key Tables -->
<script src="{{ asset("customer/assets/plugins/datatables/dataTables.keyTable.min.js") }}"></script>

<!-- Responsive examples -->
<script src="{{ asset("customer/assets/plugins/datatables/dataTables.responsive.min.js") }}"></script>
<script src="{{ asset("customer/assets/plugins/datatables/responsive.bootstrap4.min.js") }}"></script>

<!-- Selection table -->
<script src="{{ asset("customer/assets/plugins/datatables/dataTables.select.min.js") }}"></script>


<!-- App js -->
<script src="{{ asset("customer/assets/js/jquery.core.js") }}"></script>
<script src="{{ asset("customer/assets/js/jquery.app.js") }}"></script>

<!-- Page specific js -->
<script src="{{ asset("customer/assets/pages/jquery.dashboard.js") }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        // Default Datatable
        $('#datatable').DataTable();
        //Buttons examples
        var table = $('#datatable-buttons').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf']
        });
        // Key Tables
        $('#key-table').DataTable({
            keys: true
        });
        // Responsive Datatable
        $('#responsive-datatable').DataTable();
        // Multi Selection Datatable
        $('#selection-datatable').DataTable({
            select: {
                style: 'multi'
            }
        });
        table.buttons().container()
            .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
    } );
</script>

    @yield('extra-script')

</body>

</head>
