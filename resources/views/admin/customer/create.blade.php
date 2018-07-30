@extends('admin.template')

@section('content')
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Tambah Pelanggan</h3>
        </div>


        <div class="panel panel-white">
            <div class="panel-heading clearfix">
                <h4 class="panel-title">Informasi Pelanggan</h4>
            </div>
            <div class="panel-body">
                {!! Form::open(['route' => 'admin.customer.store', 'data-parsley-validate' => '', 'class' => 'form-horizontal', 'files' => true, 'method' => 'POST  ']) !!}
                <div class="form-group">
                    <label for="input-Default" class="col-sm-2 control-label">Nama Pelanggan</label>
                    <div class="col-sm-10">
                        {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                    </div>
                </div>

                <div class="form-group">
                    <label for="input-Default" class="col-sm-2 control-label">NIM</label>
                    <div class="col-sm-10">
                        {{ Form::text('nim', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                    </div>
                </div>

                <div class="form-group">
                    <label for="input-Default" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                        {{ Form::password('password', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                    </div>
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ url()->previous() }}" class="btn btn-danger">Cancel</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
@endsection
