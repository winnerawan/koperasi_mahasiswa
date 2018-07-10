@extends('admin.template')

@section('content')
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Edit Persentase Pajak</h3>
        </div>


        <div class="panel panel-white">
            <div class="panel-heading clearfix">
                <h4 class="panel-title">Informasi Pajak</h4>
            </div>
            <div class="panel-body">
                {!! Form::model($tax, ['route' => ['admin.tax.update', $tax->id], 'class' => 'form-horizontal', 'method' => 'PUT', 'files' => true]) !!}
                <div class="form-group">
                    <label for="input-Default" class="col-sm-2 control-label">Persentase</label>
                    <div class="col-sm-10">
                        {{ Form::text('tax', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                    </div>
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                {!! Form::close() !!}
                <a href="{{ url()->previous() }}" class="btn btn-info" style="margin-top: 10px;">Cancel</a>

            </div>
        </div>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
@endsection

