@extends('customer.template')


@section('content')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->

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
                    <h4 class="page-title">Ubah Password</h4>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">
                            {{--<h4 class="m-t-0 header-title">Input Types</h4>--}}
                            {{--<p class="text-muted m-b-30 font-14">--}}
                                {{--Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.--}}
                            {{--</p>--}}

                            <div class="row">
                                <div class="col-12">
                                    <div class="p-20">

                                        <div class="panel-body">
                                            {!! Form::model($user, ['route' => ['customer.password.update', $user->id], 'class' => 'form-horizontal', 'method' => 'PUT', 'files' => true]) !!}
                                            <div class="form-group">
                                                <label for="input-Default" class="col-sm-2 control-label">Password Lama</label>
                                                <div class="col-sm-10">
                                                    {{ Form::password('current_password', array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="input-Default" class="col-sm-2 control-label">Password Baru</label>
                                                <div class="col-sm-10">
                                                    {{ Form::password('password', array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="input-Default" class="col-sm-4 control-label">Konfirmasi Password Baru</label>
                                                <div class="col-sm-10">
                                                    {{ Form::password('password_confirmation', array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                </div>
                                            </div>


                                            <button type="submit" class="btn btn-success">Simpan</button>
                                            <a href="{{ url()->previous() }}" class="btn btn-danger">Cancel</a>
                                            {!! Form::close() !!}
                                    </div>
                                </div>

                            </div>
                            <!-- end row -->

                        </div> <!-- end card-box -->
                    </div><!-- end col -->
                </div>
                <!-- end row -->

                </div>
            </div>
        </div>
@endsection
