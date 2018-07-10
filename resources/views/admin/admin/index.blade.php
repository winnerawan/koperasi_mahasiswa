@extends('admin.template')

@section('content')
    <!-- Page Inner -->
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Data Administrator</h3>
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
                                        <th>Nama Administrator</th>
                                        <th>Email</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        @foreach($admins as $admin)
                                            <td><a href="{{ url('admin/admin/'. $admin->id .'/edit') }}"> {{ $admin->name }}</a></td>
                                            <td>{{ $admin->email }}</td>
                                    </tr>
                                    @endforeach
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
