@extends('admin.template')

@section('content')
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Edit Pelanggan</h3>
        </div>


        <div class="panel panel-white">
            <div class="panel-heading clearfix">
                <h4 class="panel-title">Informasi Pelanggan</h4>
            </div>
            <div class="panel-body">
                {!! Form::model($customer, ['route' => ['admin.customer.update', $customer->id], 'class' => 'form-horizontal', 'method' => 'PUT', 'files' => true]) !!}
                <div class="form-group">
                    <label for="input-Default" class="col-sm-2 control-label">Nama Pelanggan</label>
                    <div class="col-sm-10">
                        {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                    </div>
                </div>

                <div class="form-group">
                    <label for="input-Default" class="col-sm-2 control-label">Email Pelanggan</label>
                    <div class="col-sm-10">
                        {{ Form::email('email', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                    </div>
                </div>

                <div class="form-group">
                    <label for="input-Default" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                        {{ Form::password('password', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                    </div>
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                {!! Form::close() !!}
                <a href="{{ url()->previous() }}" class="btn btn-info" style="margin-top: 10px;">Cancel</a>
                {!! Form::open(['route' => ['admin.customer.destroy', $customer->id], 'method' => 'DELETE']) !!}
                <button type="submit" style="margin-top: 10px;" class="btn btn-danger"> <i class="fa fa-times"></i> Delete</button>
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
