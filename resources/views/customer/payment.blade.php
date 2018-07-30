@extends('customer.template')

@section('content')


    <div class="wrapper">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="btn-group pull-right m-t-15">
                        {{--<button type="button" class="btn btn-custom dropdown-toggle waves-effect waves-light"--}}
                        {{--data-toggle="dropdown" aria-expanded="false">Aksi <span class="m-l-5"><i--}}
                        {{--class="fa fa-cog"></i></span></button>--}}
                        {{--<div class="dropdown-menu dropdown-menu-right">--}}
                        {{--<a class="dropdown-item" href="{{ url('customer/dosen/create') }}">Tambah Dosen</a>--}}
                        {{--</div>--}}

                    </div>
                    <h4 class="page-title">Pembayaran</h4>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">
                        {{ $payment->name }}
                        <p>{{ $payment->description }}</p>
                        {{--<h4 class="m-t-0 header-title">Buttons example</h4>--}}
                        {{--<p class="text-muted font-14 m-b-30">--}}
                        {{--The Buttons extension for DataTables provides a common set of options, API methods and--}}
                        {{--styling to display buttons on a page that will interact with a DataTable. The core library--}}
                        {{--provides the based framework upon which plug-ins can built.--}}
                        {{--</p>--}}
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>

@endsection

@section('extra-script')
    <script type="text/javascript">
        (function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.quantity').on('change', function(e) {

                var id = $(this).attr('data-id')
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "PATCH",
                    url: '{{ url("customer/cart") }}' + '/' + id,
                    data: {
                        'quantity': this.value,
                    },
                    success: function(data) {
                        window.location.href = '{{ url('customer/cart') }}';
                    }
                });
            });
        })();
    </script>
@endsection
