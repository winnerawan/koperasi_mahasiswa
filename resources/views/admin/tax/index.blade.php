@extends('admin.template')

@section('content')
    <!-- Page Inner -->
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Pajak</h3>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-body">
                        {{--<button type="button" class="btn btn-success m-b-sm" data-toggle="modal"--}}
                        {{--data-target="">Tambah Kategori Baru--}}
                        {{--</button>--}}
                        <!-- Modal -->
                            <div class="table-responsive">
                                <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                    <thead>
                                    <tr>
                                        <th>Persen</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><a href="{{url('admin/tax/1/edit')}}"> {{ $tax->tax }} %</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Row -->
        </div>
    </div><!-- Main Wrapper -->


@endsection
